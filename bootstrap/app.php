<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Application;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\StuffMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        $middleware->web(append:[
            \App\Http\Middleware\LocaleMiddleware::class,
        ]);
        $middleware->alias([
            'admin' => AdminMiddleware::class,
            'user' => UserMiddleware::class,
            'stuff' => StuffMiddleware::class,
            'auth' => Authenticate::class,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();