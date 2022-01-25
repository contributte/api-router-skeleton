<?php declare(strict_types=1);

namespace Tests\Cases\Integration\Container;

use Nette\Configurator;
use Nette\DI\Container;
use Tester\Assert;
use Throwable;

require_once __DIR__ . '/../../../bootstrap.php';

$rootDir = realpath(__DIR__ . '/../../../..');
$parameters = [
	'rootDir' => $rootDir,
	'appDir' => $rootDir . '/app',
	'wwwDir' => $rootDir . '/www',
];

// Production container build
test(function () use ($parameters): void {
	$configurator = new Configurator();
	$configurator->setTempDirectory(TEMP_DIR);

	$configurator->addConfig($parameters['rootDir'] . '/config/config.neon');
	$configurator->addParameters($parameters);

	try {
		$configurator->setDebugMode(false);
		$container = $configurator->createContainer();
		Assert::type(Container::class, $container);
	} catch (Throwable $t) {
		Assert::fail(sprintf('Building production container failed. Exception: %s.', $t->getMessage()));
	}
});

// Development container build
test(function () use ($parameters): void {
	$configurator = new Configurator();
	$configurator->setTempDirectory(TEMP_DIR);

	$configurator->addConfig($parameters['rootDir'] . '/config/config.neon');
	$configurator->addParameters($parameters);
	try {
		$configurator->setDebugMode(false);
		$container = $configurator->createContainer();
		Assert::type(Container::class, $container);
	} catch (Throwable $t) {
		Assert::fail(sprintf('Building development container failed. Exception: %s.', $t->getMessage()));
	}
});
