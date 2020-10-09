<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PvpGame extends Model
{
    protected $guarded = [];

    public function player_one() {
        return $this->hasMany(User::class, 'player_one_id');
    }

    public function player_two() {
        return $this->hasMany(User::class, 'player_two_id');
    }
}
