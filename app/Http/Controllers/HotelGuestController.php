<?php

namespace App\Http\Controllers;

use Illuminate\Supporte\Facades\DB;
use Request;
use App\HotelGuest;

class HotelGuestController extends Controller
{
    public function list(){
        $hotel_guests = HotelGuest::all();

        return view('guests')->with('hotel_guests', $hotel_guests);
    }

    public function create(){
        $params = Request::all();
        HotelGuest::create($params);

        return redirect('guests');
    }

    public function show(){

        return view('form-add-guests');
    }

    public function remove($id){

        $selectedGuest = HotelGuest::find($id);
        $selectedGuest->delete();

        return view('guests')->action('HotelGuestController@list');

    }
}
