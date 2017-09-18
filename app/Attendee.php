<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    public function game_timeslots(){
        return $this->belongsToMany(GameTimeslot::class);
    }
}
