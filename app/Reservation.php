<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = array('id_room','id_rg_guest', 'reservation_date');

    public function room() {
        return $this->belongsTo('App\Room');
    }
}
