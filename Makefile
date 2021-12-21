.PHONY: project install setup qa dev cs csf phpstan tests build

############################################################
# PROJECT ##################################################
############################################################

project: install setup

install:
	composer install

qa: cs phpstan

cs:
	vendor/bin/codesniffer app tests

csf:
	vendor/bin/codefixer app tests

phpstan:
	vendor/bin/phpstan analyse -l max -c phpstan.neon --memory-limit=512M app tests/toolkit

tests:
	vendor/bin/tester -s -p php --colors 1 -C tests

coverage:
	vendor/bin/tester -s -p phpdbg --colors 1 -C --coverage ./coverage.xml --coverage-src ./app tests

dev:
	NETTE_DEBUG=1 NETTE_ENV=dev php -S 0.0.0.0:8000 -t www
