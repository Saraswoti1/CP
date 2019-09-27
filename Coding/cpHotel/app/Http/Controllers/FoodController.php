<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use DB; 

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('created_at', 'desc')-> get();
         
        
          return view('admin.food') ->with('foods',$foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view  ('pages.food');
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
            'fname'=> 'required',
            'people_quantity'=> 'required',
            'description'=> 'required',
           
          
            
        ]);
        $food = new food;
        $food -> room_no =$request -> input('room_no');
          $food -> fname =$request -> input('fname');
        $food -> people_quantity =$request -> input('people_quantity');
        $food -> description =$request -> input('description');
        
       
        $food->user_id = auth()->user()->id;
     
        $food->save();
        return redirect ('/food') ->with
            ('success', 'food ordered');
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
