<?php

use App\Models\User;

$router->get('hello', function (){
    return 'hello world';
});

$router->get('userone', function (){
    return User::find(1);
});

$router->get('user', function (){
    return auth()->user();
});

$router->get('users', function (){
    return User::paginate();
});

$router->get('tehran', function (){
    return User::where('city_id', 7)->paginate();
});