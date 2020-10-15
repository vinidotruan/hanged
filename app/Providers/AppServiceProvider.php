<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\PvpGame;
use App\CasualGame;
use App\Observers\PvpGameObserver;
use App\Observers\CasualGameObserver;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    { }

    public function boot()
    {
        Schema::defaultStringLength(191);
        // User::observe(UserObserver::class);
        CasualGame::observe(CasualGameObserver::class);
        PvpGame::observe(PvpGameObserver::class);
    }
}
