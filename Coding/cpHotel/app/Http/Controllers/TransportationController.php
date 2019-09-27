<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transportation;
use DB; 

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans =    Transportation::orderBy('created_at', 'desc')-> get();
         
        
          return view('admin.trans') ->with('trans',$trans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view  ('pages.transportation');
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
            'arrival_date'=> 'required',
            'address'=> 'required',
            'no_of_guest'=> 'required',
            'vechicle_type'=> 'required',
            'name'=> 'required',
            'phone'=> 'required',
            'guide'=> 'required'
          
            
        ]);
         $transportations = new transportation;
        $transportations -> arrival_date =$request -> input('arrival_date');
        $transportations -> address =$request -> input('address');
        $transportations -> no_of_guest =$request -> input('no_of_guest');
        $transportations -> vechicle_type =$request -> input('vechicle_type');
        $transportations -> name =$request -> input('name');
        $transportations -> phone =$request -> input('phone');
        $transportations -> guide =$request -> input('guide');
        $transportations->user_id = auth()->user()->id;
     
        $transportations->save();
        return redirect ('/transportation') ->with
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
