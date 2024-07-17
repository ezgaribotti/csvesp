<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Response::macro('success', function (?array $data = null, ?string $message = null) {
            return Response::json([
                'status_code' => 200,
                'message' => $message,
                'data' => $data
            ]);
        });

        Response::macro('error', function (int $statusCode, ?string $message = null) {
            if (!in_array($statusCode, [400, 401, 403, 404, 422, 503]))
                $statusCode = 500;

            return Response::json([
                'status_code' => $statusCode,
                'message' => $message,
                'data' => null
            ], $statusCode);
        });
    }

    public function boot(): void
    {
        //
    }
}
