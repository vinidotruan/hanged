<?php

namespace App\Observers;

use App\PvpGame;

class PvpGameObserver
{
    /**
     * Handle the pvp game "updated" event.
     *
     * @param  \App\PvpGame  $pvpGame
     * @return void
     */
    public function updated(PvpGame $pvpGame)
    {
        if($pvpGame->points_player_one > 0 && $pvpGame->points_player_two > 0) {
            if($pvpGame->points_player_one > $pvpGame->points_player_two) {
                $pvpGame->playerOne->addPvpPoints($pvpGame->points_player_one,$pvpGame->points_player_two);
                $pvpGame->playerOne->save();
            } else {
                $pvpGame->playerTwo->addPvpPoints($pvpGame->points_player_two,$pvpGame->points_player_one);
                $pvpGame->playerTwo->save();
            }
        }
    }
}
