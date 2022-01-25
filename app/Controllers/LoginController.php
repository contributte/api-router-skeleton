<?php declare(strict_types=1);

namespace App\Controllers;

use Contributte\ApiRouter\ApiRoute;
use Nette\Application\IResponse;
use Nette\Application\Request;
use Nette\Application\Responses\JsonResponse;

/**
 * API for logging users in
 *
 * @ApiRoute(
 * 	"/api/login",
 * 	methods={
 * 		"POST"="run"
 * 	},
 *  presenter="Login",
 *  format="json"
 * )
 */
final class LoginController extends AbstractController
{

	public function run(Request $request): IResponse
	{
		return new JsonResponse($this->apiResponseFormatter->formatMessage('Hello'));
	}

}
