<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laundry;
use DB; 

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laundries = Laundry::orderBy('created_at', 'desc')-> get();
         
        
          return view('admin.laundry') ->with('laundries',$laundries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view  ('pages.laundry');
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
            'room_no'=> 'required',
            'dress_quantity'=> 'required',
            'description'=> 'required',
            'iron'=> 'required'
          
            
        ]);
         $laundry = new laundry;
        $laundry -> room_no =$request -> input('room_no');
        $laundry -> dress_quantity =$request -> input('dress_quantity');
        $laundry -> description =$request -> input('description');
        $laundry -> iron =$request -> input('iron');
       
        $laundry->user_id = auth()->user()->id;
     
        $laundry->save();
        return redirect ('/laundry') ->with
            ('success', 'called for laundry');
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
