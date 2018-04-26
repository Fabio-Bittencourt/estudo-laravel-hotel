<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelGuest extends Model
{
    //
    protected $table = 'hotelGuests';
    protected $fillable = array('full_name', 'id_rg');
}
