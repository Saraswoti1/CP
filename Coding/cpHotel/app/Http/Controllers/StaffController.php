<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use DB; 

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::orderBy('created_at', 'desc')-> get();
         
        
          return view('pages.staff') ->with('staff',$staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view  ('admin.addstaff');
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
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required',
            'dob'=> 'required',
            'address'=> 'required',
               'phone'=> 'required',
            'phone2'=> 'required',
            'job_category'=> 'required',
            'work_time'=> 'required',
               'work_time'=> 'required',
            'join_date'=> 'required',
            'experience'=> 'required'
            
          
          
        ]);
         $staff = new staff;
        $staff -> fname =$request -> input('fname');
        $staff -> lname =$request -> input('lname');
        $staff -> email =$request -> input('email');
        $staff -> dob =$request -> input('dob');
        $staff -> address =$request -> input('address');
        $staff -> phone =$request -> input('phone');
        $staff -> phone2 =$request -> input('phone2');
        $staff -> job_category =$request -> input('job_category');
        
        $staff -> work_time =$request -> input('work_time');
        $staff -> join_date =$request -> input('join_date');
        $staff -> experience =$request -> input('experience');
       
        
    //    $staff->cover_image =$fileNameToStore;
     
        $staff->save();
        return redirect ('/staff') ->with
            ('success', 'Staff Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $staff=staff::find($id);
        return view('admin.staffedit')->with ('staff',$staff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $staff= staff::find($id);
        
              return view('staffedit')->with('staff',$staff);    
    
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
        
 $this -> validate($request, [
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required',
            'dob'=> 'required',
            'address'=> 'required',
               'phone'=> 'required',
            'phone2'=> 'required',
            'job_category'=> 'required',
            'work_time'=> 'required',
               'work_time'=> 'required',
            'join_date'=> 'required',
            'experience'=> 'required'
        ]);
        
        
   
        
        //create post
        $staff= staff::find($id);
      $staff -> fname =$request -> input('fname');
        $staff -> lname =$request -> input('lname');
        $staff -> email =$request -> input('email');
        $staff -> dob =$request -> input('dob');
        $staff -> address =$request -> input('address');
        $staff -> phone =$request -> input('phone');
        $staff -> phone2 =$request -> input('phone2');
        $staff -> job_category =$request -> input('job_category');
        
        $staff -> work_time =$request -> input('work_time');
        $staff -> join_date =$request -> input('join_date');
        $staff -> experience =$request -> input('experience');
       
        
    //    $staff->cover_image =$fileNameToStore;
     
        $staff->save();
        return redirect ('/staff') ->with
            ('success', 'Staff Added Successfully');
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
