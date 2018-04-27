<?php

namespace App\Http\Controllers;

use Illuminate\Supporte\Facades\DB;
use Request;
use App\Reservation;

class ReservationController extends Controller
{
    //
    //
    public function list(){
        return view('reservations');
    }

    public function create(){

        return redirect()->action('ReservationController@list');
    }

    public function remove(){

        return redirect()->action('ReservatioController@list');
    }

    public function show($action){

        return view($action);
    }
}
