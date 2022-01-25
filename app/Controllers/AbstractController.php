<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\ApiResponseFormatter;
use Nette\Application\IPresenter;

abstract class AbstractController implements IPresenter
{

	protected ApiResponseFormatter $apiResponseFormatter;

	public function __construct(ApiResponseFormatter $apiResponseFormatter)
	{
		$this->apiResponseFormatter = $apiResponseFormatter;
	}
}
