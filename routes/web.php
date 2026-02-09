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
Route::get('/users/create', [UserController::class,'create'])->name('users.create');
// Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');
Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
// Route::get('/users/id', [UserController::class,'show']);
// Route::get('/users/{id}', 'show')->name('users.show');


