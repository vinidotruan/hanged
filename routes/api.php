<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('users', 'UserController');
Route::resource('casual-games', 'CasualGameController');
Route::resource('pvp-games', 'PvpGameController');
Route::resource('categories', 'CategoryController');
Route::resource('words', 'WordsController');
// Route::post('login', 'UserController@login');

Route::group([
    'prefix' => 'rankings'
], function() {
    Route::get('casual', 'CasualGameController@ranking');
    Route::get('pvp', 'PvpGameController@ranking');
});
