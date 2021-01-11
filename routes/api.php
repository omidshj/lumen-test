<?php

use App\Models\User;
use Anik\Amqp\Exchange;
use Anik\Amqp\Facades\Amqp;
use Illuminate\Http\Request;
use PhpAmqpLib\Wire\AMQPTable;
use Anik\Amqp\PublishableMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\Model as EloquentModel;


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

$router->post('users', function (Request $request) {
    $attributes = $request->all();

    /** @var Validator $validator */
    $validator = app('validator')->make($attributes, [
        'national_id' => 'required',
        'name' => 'required',
        'family' => 'required',
        'city_id' => 'required',
        'school_id' => 'required',
        'gender' => 'required',
        'token' => 'required',
    ]);

    if ($validator->fails()) {
        throw new ValidationException(
            $validator,
            new JsonResponse($validator->errors()->getMessages(), Response::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
    return User::create($request->all());
});

$router->put('users/{user}', function (Request $request, $user){
    $user = User::findOrFail($user);

    $attributes = $request->all();

    /** @var Validator $validator */
    $validator = app('validator')->make($attributes, [
        'national_id' => 'required',
        'name' => 'required',
        'family' => 'required',
        'city_id' => 'required',
        'school_id' => 'required',
        'gender' => 'required',
        'token' => 'required',
    ]);

    if ($validator->fails()) {
        throw new ValidationException(
            $validator,
            new JsonResponse($validator->errors()->getMessages(), Response::HTTP_UNPROCESSABLE_ENTITY)
        );
    }

    $user->update($request->all());

    return $user;
});
