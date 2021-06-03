<?php

declare(strict_types=1);

namespace App\Controllers;

use Nette\Application\IResponse;
use Nette\Application\Request;
use Nette\Application\Responses\JsonResponse;

final class ErrorController extends AbstractController
{
	public function run(Request $request): IResponse
	{
		$exception = $request->getParameter('exception');

		return new JsonResponse($this->apiResponseFormatter->formatException($exception));
	}
}
