<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameTimeslot extends Model
{
    protected $table = "game_timeslot";

    public function attendees(){
        return $this->belongsToMany(Attendee::class);
    }
}
