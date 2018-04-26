<?php

namespace App\Http\Controllers;

use Illuminate\Supporte\Facades\DB;
use Request;
use App\HotelGuest;

class HotelGuestController extends Controller
{
    public function list(){
        $hotel_guests = HotelGuest::all();

        return view('guests')->with('hotelGuests', $hotel_guests);
    }

    public function create(){
        $params = Request::all();
        HotelGuest::create($params);

        return redirect('guests');
    }

    public function show($action){

        return view($action);
    }

    public function remove(){

    }
}
