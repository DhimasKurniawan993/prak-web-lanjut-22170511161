<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProfileController;//perlu dihapus
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/profile/{nama}/{kelas}/{npm}',//perlu dihapus
//[ProfileController::class, 'profile']);//perlu dihapus

Route::get('/user/profile', [UserController::class,
'profile']);

Route::get('/user/create', [UserController::class,
'create']);

Route::post('/user/store', [UserController::class,
'store'])->name('user.store');