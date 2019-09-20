@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')   
<br><br>
         {!!Form::open(['action'=>'AddroomController@store',
              'method'=>'POST']) !!}
    <div class="form-group">
        <label for="room_name">Room name</label>
        <input name="room_name" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input name="price" type="text" class="form-control" >
    </div>
   <div class="form-group">
        <label for="description">Description</label>
        <input name="description" type="text" class="form-control" >
    </div>
 
{{Form::submit('Add', ['class'=> 'submit-btn'])}}                                                                                                                                                                                  
 @endsection            
