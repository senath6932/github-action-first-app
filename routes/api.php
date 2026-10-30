<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Get all users
Route::get('/get-all-users', [UserController::class, 'getAllUsers']);

