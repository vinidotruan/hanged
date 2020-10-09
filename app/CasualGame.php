<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasualGame extends Model
{

    protected $guarded = [];

    // public static function boot() {
    //     // self::user()->points = self::points + + self::user()->points;
    // }


    public function user() {
        return $this->hasMany(User::class, 'player_id');
    }
}
