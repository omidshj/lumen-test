<?php

$router->get('hello', function () use ($router) {
    return 'hello world';
});

$router->get('user', function () use ($router) {
    return auth()->user();
});

$router->get('users', function () use ($router) {
    return App\Models\User::paginate();
});