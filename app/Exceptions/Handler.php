<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        // return parent::render($request, $exception);
    
        if($exception instanceof ValidationException){
            return response()->json($exception->validator->errors());
        }

        if($exception instanceof NotFoundHttpException){
            return response()->json(["errors" => "The Specified URL Not found"], 404);
        }

        if($exception instanceof ModelNotFoundException){
            return response()->json(["errors" => "The Specified ID Not found"], 404);
        }

        if($exception instanceof AuthorizationException){
            return response()->json(["errors" => "The Specified token not found"], 403);
        }

        return response()->json(["errors" => "Internal Server Error"], 500);  
    }
}
