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

$router->post('users', function (){
    request()->vlidate([
        'national_id' => 'required',
        'name' => 'required',
        'family' => 'required',
        'city_id' => 'required',
        'school_id' => 'required',
        'gender' => 'required',
        'token' => 'required',
    ]);
    return User::create(request()->all());
});

$router->put('users/{user}', function ($user){
    $user = User::findOrFail($user);
    request()->vlidate({
        'national_id' => 'required',
        'name' => 'required',
        'family' => 'required',
        'city_id' => 'required',
        'school_id' => 'required',
        'gender' => 'required',
        'token' => 'required',
    });
    return $user->update(request()->all());
});