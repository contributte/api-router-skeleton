<?php

declare(strict_types=1);

use Contributte\Bootstrap\ExtraConfigurator;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new ExtraConfigurator();

// According to NETTE_DEBUG env
$configurator->setEnvDebugMode();

$configurator->enableTracy(__DIR__ . '/../log');

$configurator->setTimeZone('UTC');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->addConfig(__DIR__ . '/../config/config.neon');

if (file_exists(__DIR__ . '/../config/config.local.neon')) {
	$configurator->addConfig(__DIR__ . '/../config/config.local.neon');
}

$container = $configurator->createContainer();

return $container;
