<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
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

        $this->renderable(function (Throwable $e)
        {
            if($e instanceof NotFoundHttpException)
            {
                return response()->json([
                    'message' => 'Resource not found'
                ], 404);
            }
            elseif($e instanceof BadRequestException)
            {
                return response()->json([
                    'message' => 'Bad Request',
                ], 400);
            }
            elseif($e instanceof ResourceNotFoundException)
            {
                return response()->json([
                    'message' => 'Resource Not Found',
                ], 404);
            }
            else
            {
                return response()->json([
                    'message' => 'Internal Server Error',
                ], 500);
            }
        });
    }
}
