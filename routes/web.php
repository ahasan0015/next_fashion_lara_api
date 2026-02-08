<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
// Route::get('/users', function () {
//     return view('admin.pages.users.index');
// });
Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');
// Route::get('/users/id', [UserController::class,'show']);
// Route::get('/users/{id}', 'show')->name('users.show');


