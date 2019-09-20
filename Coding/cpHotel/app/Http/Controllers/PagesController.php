<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addroom;
use App\Addevent;
use App\Addtrans;


class PagesController extends Controller
{
    public function index(){
        return view ('pages.index');
    }
    
    public function about(){
        
        return view ('pages.about');
    }
    
    
    public function gallery(){
        return view ('pages.gallery');
    }
    
     public function contact(){
        return view ('pages.contact');
    }
    
     public function room(){
         $roomDetails = Addroom::all()->take(3);
//         dd($roomDetails);
        return view ('pages.room')->with('roomDetails', $roomDetails);
    }
    
     public function transportation(){
          $transDetails = Addtrans::all()->take(3);
//         dd($roomDetails);
        return view ('pages.transportation')->with('transDetails', $transDetails);
        
    }

    
     public function event(){
         
          $hallDetails = Addevent::all()->take(3);
//         dd($roomDetails);
        return view ('pages.event')->with('hallDetails', $hallDetails);
        
    }
    
     public function laundry(){
        return view ('pages.laundry');
    }
    
     public function food(){
        return view ('pages.food');
    }
    
     public function staff(){
        return view ('pages.staff');
    }
    
     public function a_dashboard(){
        return view ('pages.a_dashboard');
    }
     public function u_dashboard(){
        return view ('pages.u_dashboard');
    }
     public function users(){
        return view ('admin.users');
    }
    
     
}


