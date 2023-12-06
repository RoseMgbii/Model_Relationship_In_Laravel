<?php

use App\Http\Controllers\UserEntityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create-new-user', [UserEntityController::class, 'createUserProfile']);

Route::get('get-user', [UserEntityController::class, 'getAllUsers']);

Route::put('update-profile/{currentName}', [UserEntityController::class, 'updateUserProfile']);

Route::delete('delete-user/{name}', [UserEntityController::class, 'deleteRecordUsingName']);
