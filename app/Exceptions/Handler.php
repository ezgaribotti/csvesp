<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (\TypeError $typeError) {
            return response()->error(500, $typeError->getMessage());
        });

        $this->renderable(function (AuthenticationException $exception) {
            return response()->error(401, $exception->getMessage());
        });

        $this->renderable(function (ValidationException $exception) {
            return response()->error(422, $exception->getMessage());
        });

        $this->renderable(function (HttpException $exception) {
            return response()->error($exception->getStatusCode(), $exception->getMessage());
        });

        $this->renderable(function (\Exception $exception) {
            return response()->error(500, $exception->getMessage());
        });
    }
}
