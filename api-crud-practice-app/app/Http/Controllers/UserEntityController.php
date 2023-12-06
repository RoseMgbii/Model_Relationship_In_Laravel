<?php

namespace App\Http\Controllers;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\DeleteUserAction;
use App\Http\Actions\GetAllUsersAction;
use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\DeleteUserRequest;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Models\UserEntity;
use Illuminate\Http\Request;

class UserEntityController extends Controller
{
    public function createUserProfile(CreateUserRequest $request, CreateUserAction $action){
        return $action->handle($request);
    }

    public function getAllUsers(GetAllUsersAction $action){
        return $action->handle();
    }

    public function updateUserProfile($currentName, UpdateUserProfileRequest $request, UpdateUserAction $action){
        return $action->handle($currentName, $request);
    }

    public function deleteRecordUsingName($name, DeleteUserAction $action){
        return $action->handle($name);
    }


}



