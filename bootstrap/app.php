<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Lecturer;
use App\Http\Middleware\Student;
use App\Http\Middleware\Guest;
use App\Http\Middleware\UpgradeToHttpsUnderNgrok;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'lecturer'=>Lecturer::Class,
            'student'=>Student::Class,
            'guest'=>Guest::Class
        ]);
        $middleware->append(UpgradeToHttpsUnderNgrok::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
