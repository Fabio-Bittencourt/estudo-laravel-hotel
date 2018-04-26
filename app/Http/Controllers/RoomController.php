<?php

namespace App\Http\Controllers;

use Illuminate\Supporte\Facades\DB;
use Request;
use App\Room;
class RoomController extends Controller
{
    //
    //
    public function list(){

        $roomCount = Room::all()->count();
        return view('rooms')->with('qtd_rooms', $roomCount);
    }

    public function create(){
        $params = Request::all();
        Room::create($params);

        return redirect('/rooms');
    }

    public function show(){

    return view('form-add-room');
    }
}
