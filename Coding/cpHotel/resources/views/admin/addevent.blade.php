@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')   
<br><br>
         {!!Form::open(['action'=>'AddeventController@store',
              'method'=>'POST']) !!}
    <div class="form-group">
        <label for="event_name">Event name</label>
        <input name="event_name" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input name="price" type="text" class="form-control" >
    </div>
   <div class="form-group">
        <label for="description">Description</label>
        <input name="description" type="text" class="form-control" >
    </div>
 
{{Form::submit('Add', ['class'=> 'submit-btn'])}}                                                                                                                                                                                   @endsection            