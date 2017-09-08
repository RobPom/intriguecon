<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function active(){
        return $this->status()->active;
    }

    public function days(){
        return $this->hasMany('App\Day')->orderBy('date' , 'ASC');
    }

    public function timeslots(){
        return $this->hasMany('App\Timeslot')->orderBy('date' , 'ASC')->orderBy('start', 'ASC');
    }

    public function status(){
        return $this->hasOne('App\Status');
    }
}
