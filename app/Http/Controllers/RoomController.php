<?php

namespace App\Http\Controllers;

use Illuminate\Supporte\Facades\DB;
use Request;
use App\Room;

class RoomController extends Controller
{
    public function list(){
        $rooms = Room::all();
        return view('rooms')->with('room', $rooms);
    }

    public function create(){
        $params = Request::all();
        Room::create($params);

        return redirect()->action('RoomController@list');
    }

    public function show(){
    return view('form-add-room');
    }

    public function remove($id){
        $selectedRoom =  Room::find($id);
        $selectedRoom->delete();

        return redirect()->action('RoomController@list');
    }

    public function edit($id) {
        $infoRoom = Room::find($id);

        return view('form-edit-room')->with('infoRoom', $infoRoom);
    }

    public function update($id) {
        $params = Request::all();
        $selectedRoom = Room::find($id);
        $selectedRoom->update($params);
        return redirect()->action('RoomController@list');

    }
}
