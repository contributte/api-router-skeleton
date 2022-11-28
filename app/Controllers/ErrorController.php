<?php

declare(strict_types=1);

namespace App\Controllers;

use Nette\Application\Request;
use Nette\Application\Response;
use Nette\Application\Responses\JsonResponse;
use Throwable;
use Tracy\Debugger;
use Tracy\ILogger;

final class ErrorController extends AbstractController
{

	public function run(Request $request): Response
	{
		$exception = $request->getParameter('exception');
		if ($exception instanceof Throwable) {
			Debugger::log($exception, ILogger::EXCEPTION);
		}

		return new JsonResponse($this->apiResponseFormatter->formatException($exception));
	}
}
