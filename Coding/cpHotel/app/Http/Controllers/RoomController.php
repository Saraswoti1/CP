<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use DB; 

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('created_at', 'desc')-> get();
         
        
          return view('admin.room') ->with('rooms',$rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view  ('pages.room');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
       $this -> validate($request, [
            'check_in'=> 'required',
            'check_out'=> 'required',
            'room_type'=> 'required',
            'room_quantity'=> 'required',
            'no_of_guest'=> 'required'
          
          
            
        ]);
         $room = new room;
        $room -> check_in =$request -> input('check_in');
        $room -> check_out =$request -> input('check_out');
        $room -> room_type =$request -> input('room_type');
        $room -> room_quantity =$request -> input('room_quantity');
        $room -> no_of_guest =$request -> input('no_of_guest');
       
        $room->user_id = auth()->user()->id;
     
        $room->save();
        return redirect ('/room') ->with
            ('success', 'Booking successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
