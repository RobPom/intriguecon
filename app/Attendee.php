<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use Searchable;

    public function searchableAs()
    {
        return 'attendees_index';
    }
    
    public function game_timeslots(){
        return $this->belongsToMany(GameTimeslot::class);
    }
}
