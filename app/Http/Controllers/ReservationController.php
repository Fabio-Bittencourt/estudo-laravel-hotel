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
        $reservations = Reservation::all();

        return view('reservations')->with('reservation', $reservations);
    }

    public function create(){
        $parms = Request::all();
        Reservation::create($params);

        return redirect()->action('ReservationController@list');
    }

    public function remove($id){
        $selectedReservation = Reservation::find($id);
        $selectedReservation->delete();

        return redirect()->action('ReservatioController@list');
    }

    public function show(){

        return view('form-add-reservation');
    }
}
