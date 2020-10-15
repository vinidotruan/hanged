<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasualGame extends Model
{

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'player_id');
    }
}
