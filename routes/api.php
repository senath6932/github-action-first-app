<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/get-all-users', [UserController::class, 'getAllUsers']);
