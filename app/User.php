<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','points'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function casualGames() {
        return $this->hasMany(CasualGame::class, 'player_id');
    }

    public function pvpPlayerOneGames() {
        return $this->hasMany(PvpGame::class, 'player_one_id');
    }
    public function pvpPlayerTwoGames() {
        return $this->hasMany(PvpGame::class, 'player_two_id');
    }

    public function pvpGames() {
        return $this->pvpPlayerTwoGames->merge($this->pvpPlayerOneGames);
    }

    public function scopeCasualRanking($query) {
        return $query->orderBy('points', 'desc');
    }

    public function scopePvpRanking($query) {
        return $query->orderBy('pvp_points', 'desc');
    }

    public function addPvpPoints($pointsPlayerWinner, $pointsPlayerLooser) {
        $this->pvp_points += $pointsPlayerWinner - $pointsPlayerLooser;
        $this->save();
    }
}
