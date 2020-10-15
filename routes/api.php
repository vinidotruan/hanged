<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('users', 'UserController');
Route::resource('casual-games', 'CasualGameController');
Route::resource('pvp-games', 'PvpGameController');

Route::group([
    'prefix' => 'rankings'
], function() {
    Route::get('casual', 'CasualGameController@ranking');
    Route::get('pvp', 'PvpGameController@ranking');
});
