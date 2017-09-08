<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    public function games(){
        return $this->belongsToMany(Game::class);
    }
}
