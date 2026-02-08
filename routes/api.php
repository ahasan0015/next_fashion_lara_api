<?php

use App\Http\Controllers\Api\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json(['message' => 'API working .......']);
});
// Route::apiResource('roles', RoleController::class);
Route::get('/users', function () {
    return App\Models\User::all();
});

