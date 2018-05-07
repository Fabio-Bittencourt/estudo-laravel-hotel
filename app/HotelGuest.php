<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelGuest extends Model
{
    //
    protected $fillable = array('full_name', 'id_rg');

    public function reservation() {
        return $this->hasOne('App\Reservation');
    }
}
