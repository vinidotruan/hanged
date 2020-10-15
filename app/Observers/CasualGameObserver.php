<?php

namespace App\Observers;

use App\CasualGame;

class CasualGameObserver
{
    /**
     * Handle the casual game "created" event.
     *
     * @param  \App\CasualGame  $casualGame
     * @return void
     */
    public function created(CasualGame $casualGame)
    {
        $casualGame->user->points += $casualGame->points;
        $casualGame->user->save();
    }
}
