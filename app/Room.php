<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = array('andar', 'room_dimension', 'description');


    public function reservation() {
        return $this->hasOne('App\Reservation');
    }
}
