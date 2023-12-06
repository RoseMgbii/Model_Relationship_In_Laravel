<?php

namespace App\Http\Actions;

use App\Models\UserEntity;

class DeleteUserAction
{
    public function handle($name){
        //        $user = UserEntity::where('name',$name)->get();  -> get all the records that has this name
        $user = UserEntity::where('name',$name) -> first();
        $user -> delete();
        return response()->json(['message', 'User deleted successfully'], 204);
    }
}
