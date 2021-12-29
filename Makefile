############################################################
# PROJECT ##################################################
############################################################
.PHONY: project install setup clean

project: install setup

install:
	composer install

setup:
	mkdir -p temp log
	chmod +0777 temp log

clean:
	find temp -mindepth 1 ! -name '.gitignore' -type f,d -exec rm -rf {} +
	find log -mindepth 1 ! -name '.gitignore' -type f,d -exec rm -rf {} +

############################################################
# DEVELOPMENT ##############################################
############################################################
.PHONY: qa dev cs csf phpstan tests coverage dev build

qa: cs phpstan

cs:
	vendor/bin/codesniffer app tests

csf:
	vendor/bin/codefixer app tests

phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon --memory-limit=512M app tests/toolkit

tests:
	vendor/bin/tester -s -p php --colors 1 -C tests

coverage:
	vendor/bin/tester -s -p phpdbg --colors 1 -C --coverage ./coverage.xml --coverage-src ./app tests

dev:
	NETTE_DEBUG=1 NETTE_ENV=dev php -S 0.0.0.0:8000 -t www

build:
	echo "BUILD OK"

############################################################
# DEPLOYMENT ###############################################
############################################################
.PHONY: deploy

deploy: clean project build
