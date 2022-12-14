<?php

declare(strict_types=1);

namespace App\Controllers;

use Contributte\ApiRouter\ApiRoute;
use Nette\Application\Request;
use Nette\Application\Response;
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

	public function run(Request $request): Response
	{
		return new TextResponse('pong');
	}
}
