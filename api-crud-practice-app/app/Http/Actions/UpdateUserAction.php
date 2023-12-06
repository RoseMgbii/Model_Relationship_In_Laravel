<?php

namespace App\Http\Actions;

use App\Http\Requests\UpdateUserProfileRequest;
use App\Models\UserEntity;
use Illuminate\Http\Request;

class UpdateUserAction
{
    /**
     * find the user by the current name given
     * update the column with the new name and email
     * display affected records (records which were changed)
     */
    public function handle($currentName, UpdateUserProfileRequest $request){
        UserEntity::where('name',$currentName) -> update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        $newName = $request->name;
        $updatedUser = UserEntity::where('name', $newName)->get();
        logger($updatedUser);
        return response() -> json(['message' => 'Records updated successfully','Updated Records' => $updatedUser], 204);
    }
}
