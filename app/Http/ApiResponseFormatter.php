<?php declare(strict_types=1);

namespace App\Http;

use Throwable;

final class ApiResponseFormatter
{

	/**
	 * @return mixed[]
	 */
	public function formatMessage(string $message): array
	{
		return [
			'status' => 'ok',
			'payload' => [
				'message' => $message,
			],
		];
	}

	/**
	 * @param mixed[] $payload
	 * @return mixed[]
	 */
	public function formatPayload(array $payload): array
	{
		return [
			'status' => 'ok',
			'payload' => $payload,
		];
	}

	/**
	 * @return mixed[]
	 */
	public function formatException(Throwable $e): array
	{
		return [
			'status' => 'error',
			'code' => $e->getCode(),
			'message' => $e->getMessage(),
		];
	}

}
