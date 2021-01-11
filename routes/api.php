<?php

use App\Models\User;

$router->get('hello', function () use ($router) {
    return 'hello world';
});

$router->get('userone', function () use ($router) {
    return User::find(1);
});

$router->get('user', function () use ($router) {
    return auth()->user();
});

$router->get('users', function () use ($router) {
    return User::paginate();
});