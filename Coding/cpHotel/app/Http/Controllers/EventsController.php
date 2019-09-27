<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Event::orderBy('created_at', 'desc')-> get();
         
        
          return view('admin.event') ->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view  ('pages.event');
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
            'ename'=> 'required',
            'event_date'=> 'required',
            'hall_type'=> 'required',
            'no_of_guest'=> 'required',
            'description'=> 'required',
             'name'=> 'required',    
            'contact'=> 'required'
           
          

        ]);
         $Event = new Event;
        $Event -> ename =$request -> input('ename');
        $Event -> event_date =$request -> input('event_date');
        $Event -> hall_type =$request -> input('hall_type');
        $Event -> no_of_guest =$request -> input('no_of_guest');
        $Event -> description =$request -> input('description');
        $Event -> name =$request -> input('name');
        $Event -> contact =$request -> input('contact');
        $Event->user_id = auth()->user()->id;
     
        $Event->save();
        return redirect ('/event') ->with
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
