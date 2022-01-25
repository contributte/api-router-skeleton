<?php declare(strict_types=1);

namespace App\Controllers;

use Contributte\ApiRouter\ApiRoute;
use Nette\Application\IResponse;
use Nette\Application\Request;
use Nette\Application\Responses\TextResponse;

/**
 * API for ping/pong
 *
 * @ApiRoute(
 * 	"/api/ping",
 * 	methods={
 * 		"GET"="run"
 * 	},
 *  presenter="Ping",
 *  format="plain"
 * )
 */
final class PingController extends AbstractController
{

	public function run(Request $request): IResponse
	{
		return new TextResponse('pong');
	}

}
