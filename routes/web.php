<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::any('/login',[UserController::class,'login'])->name('login');
Route::any('/Register',[UserController::class,'Register'])->name('Register');
Route::any('/success',[UserController::class,'success'])->name('success');
Route::any('/deconnexion',[UserController::class,'deconnexion'])->name('deconnexion');

