<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PvpGame extends Model
{
    protected $guarded = [];

    public function playerOne() {
        return $this->belongsTo(User::class, 'player_one_id');
    }

    public function playerTwo() {
        return $this->belongsTo(User::class, 'player_two_id');
    }
}
