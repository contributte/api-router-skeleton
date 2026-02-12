<?php declare(strict_types = 1);

namespace Tests\Toolkit;

use Contributte\Tester\Environment;
use Nette\Bootstrap\Configurator;
use Nette\DI\Container as DIContainer;

final class Container
{

	public static function create(bool $debugMode = false): DIContainer
	{
		$configurator = new Configurator();
		$configurator->setTempDirectory(Environment::getTestDir());
		$configurator->setDebugMode($debugMode);

		$configurator->addConfig(Tests::ROOT_PATH . '/config/config.neon');
		$configurator->addStaticParameters([
			'rootDir' => Tests::ROOT_PATH,
			'appDir' => Tests::APP_PATH,
			'wwwDir' => Tests::ROOT_PATH . '/www',
		]);

		return $configurator->createContainer();
	}

}
