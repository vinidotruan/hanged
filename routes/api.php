<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('users', 'UserController');
Route::resource('casual-games', 'CasualGameControllerController');
