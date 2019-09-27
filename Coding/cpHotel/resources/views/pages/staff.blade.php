@extends('layouts.app')
@section ('content')

<h2>Tap to edit</h2>
@if (count($staff) > 0)
@foreach ($staff as $staff)


 <div class= "jumbotron jumbotron">
   <div class="row">
       <div class="col-md-2">
         <img style="width:100%" src="/storage/cover_images/{{$staff ->cover_image}}">
       </div>

       
       <div class="col-md-8 col-sm-8">
 
           <h3> <a href="/staff/{{$staff-> id}}" >{{$staff->fname}} </a></h3>
    <h5>{{$staff->lname}}</h5>
    <small>Joined on {{$staff->created_at}} </small>

       </div>
    
</div>
</div>
@endforeach
@else
    <p> No POst found</p>
    @endif
@endsection