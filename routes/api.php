<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\User;

Route::resource('users', UserController::class);