<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
 


//add room and add event
Route::resource('addroom', 'AddroomController');
Route::resource('addevent', 'AddeventController');
Route::resource('addtrans', 'AddtransController');
Route::resource('addstaff', 'StaffController');
Route::resource('contact', 'ContactController');



//page controller
Route::get('/index', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/room', 'PagesController@room')->name('room');
Route::get('/transportation', 'PagesController@transportation')->name('transportation');
Route::get('/event', 'PagesController@event')->name('event');
Route::get('/laundry', 'PagesController@laundry')->name('laundry');
Route::get('/food', 'PagesController@food')->name('food');
 Route::get('/staff', 'PagesController@staff')->name('staff');
Route::get('/a_dashboard', 'PagesController@a_dashboard')->name('a_dashboard');
Route::get('/u_dashboard', 'PagesController@u_dashboard')->name('u_dashboard');
Route::get('/users', 'PagesController@users')->name('admin.users');

//pages controller for index 
Route::get('/home','HomeController@index');
Route::get('admin/index','AdminController@index');
Route::resource('admin/index','AdminController');

Route::get('admin/event', 'EventsController@index')->name('admin/event');
Route::get('admin/food', 'FoodController@index')->name('admin/food');
Route::get('admin/laundry', 'LaundryController@index')->name('admin/laundry');
Route::get('admin/room', 'RoomController@index')->name('admin/room');
Route::get('admin/trans', 'TransportationController@index')->name('admin/trans');


Route::get('/staff', 'StaffController@index')-> name('staff');

Route::get('/addstaff', 'StaffController@create')->name('admin.addstaff');
Route::get('/addstaff', 'StaffController@store')->name('admin.addstaff');


//pages controller for create and store
Route::get('pages/event', 'EventsController@create')-> name('event');
Route::get('pages/event', 'EventsController@store')-> name('event');

Route::get('pages/food', 'FoodController@create')-> name('food');
Route::get('pages/food', 'FoodController@store')-> name('food');


Route::get('pages/laundry', 'LaundryController@create')-> name('laundry');
Route::get('pages/laundry', 'LaundryController@store')-> name('laundry');

Route::get('pages/room', 'RoomController@create')-> name('room');
Route::get('pages/room', 'RoomController@store')-> name('room');


Route::get('pages/transportation', 'TransportationController@create')-> name('transportation');
Route::get('pages/transportation', 'TransportationController@store')-> name('transportation');

Route::resource('posts', 'PostsController');




Route::get('/addroom', 'AddroomController@create')-> name('addroom');
Route::get('addroom', 'AddroomController@store')-> name('addroom');


//Admin
Route::get ('/admin', function(){
    return view('admin.dashboard');
});
Route::get ('/users', function(){
    return view('admin.users');
});
Route::get ('/addstaff', function(){
    return view('admin.addstaff');
});
Route::get ('/contactmes', function(){
    return view('admin.contactmes');
});
Route::get ('/admin/foods', function(){
    return view('admin.food');
});
Route::get ('/addroom', function(){
    return view('admin.addroom');
});
Route::get ('/addevent', function(){
    return view('admin.addevent');
});
Route::get ('/addtrans', function(){
    return view('admin.addtrans');
});
Route::get ('/addstaff', function(){
    return view('admin.addstaff');
});



//login middleware


Route::group(['middleware' => ['web','auth']],function(){
    Route::get('/',function(){
        return view('pages/index');
    });
    Route::get ('/home',function(){
        if (Auth::user()->admin==0){
            $user_id=auth()->user()->id;
            $user = App\User::find($user_id);
            return view('home')->with('posts',$user->posts);
            
            
        }else{
            $users['users'] = \App\User::all();
            return view('adminhome',$users);
            
        }
        
    });
        
    });
  
    
