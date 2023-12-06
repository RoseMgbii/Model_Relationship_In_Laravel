<?php

namespace App\Http\Actions;

use App\Models\UserEntity;

class GetAllUsersAction
{
    /**
     * Get all users
     * where user name is 'rose'
     * convert to json
     * and return records named 'users' and OK status 200
     */
    public function handle()
    {
        $users = UserEntity::get();
        logger($users);
        return response()->json(['message'=>'users include', $users]);
        // get all users with the name: rose
        //$users = UserEntity::where('name','rose') -> get();
    }
}
