<?php

namespace App\Http\Actions;

use App\Http\Requests\CreateUserRequest;
use App\Http\Resources\UserEntityResource;
use App\Models\User;
use App\Models\UserEntity;
use Illuminate\Http\Request;

class CreateUserAction
{
    public function handle(CreateUserRequest $request){
        $newUser = UserEntity::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        logger($request);
        return response()->json(['message'=>'User created', new UserEntityResource($newUser)], 201);
    }
}
