<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/
switch (explode('/', $_SERVER['REQUEST_URI'])[1] ?? null) {
    case 'simple':
        $app = require __DIR__.'/../bootstrap/simple.php';
        break;
    case 'facade':
        $app = require __DIR__.'/../bootstrap/facade.php';
        break;
    case 'auth':
        $app = require __DIR__.'/../bootstrap/auth.php';
        break;
    case 'authfacade':
        $app = require __DIR__.'/../bootstrap/authfacade.php';
        break;
    default:
        $app = require __DIR__.'/../bootstrap/app.php';
        break;
}

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run();
