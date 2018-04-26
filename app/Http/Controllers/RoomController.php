<?php

namespace App\Http\Controllers;

use Illuminate\Supporte\Facades\DB;
use Illuminate\Http\Request;
use App\Room;
class RoomController extends Controller
{
    //
    //
    public function list(){

        $roomCount = Room::all()->count();
        return view('home')->with('qtd_rooms', $roomCount);
    }
}
