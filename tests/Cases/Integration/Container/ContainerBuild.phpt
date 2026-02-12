<?php declare(strict_types = 1);

namespace Tests\Cases\Integration\Container;

use Nette\DI\Container;
use Tester\Assert;
use Tests\Toolkit\Container as TestContainer;
use Throwable;

require_once __DIR__ . '/../../../bootstrap.php';

// Production container build
test('Production container build', function (): void {
	try {
		$container = TestContainer::create(debugMode: false);
		Assert::type(Container::class, $container);
	} catch (Throwable $t) {
		Assert::fail(sprintf('Building production container failed. Exception: %s.', $t->getMessage()));
	}
});

// Development container build
test('Development container build', function (): void {
	try {
		$container = TestContainer::create(debugMode: true);
		Assert::type(Container::class, $container);
	} catch (Throwable $t) {
		Assert::fail(sprintf('Building development container failed. Exception: %s.', $t->getMessage()));
	}
});
