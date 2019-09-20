@extends('layouts.app')
@section ('content')
<h1>post</h1>
<h2>Tap to edit</h2>
@if (count($posts) > 0)
@foreach ($posts as $post)
 <div class= "jumbotron jumbotron">
   <div class="row">
       <div class="col-md-2">
        
       </div>
       <div class="col-md-8 col-sm-8">

       
           
        <!--   <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" -->
       </div>
       <div class="col-md-8 col-sm-8">

    <h3><a href="/posts/{{$post-> id}}" >{{$post->title}}</a>  </h3>
    <h5>{{$post->body}}</h5>
    <small>written on {{$post->created_at}} </small>
</div>
</div>
</div>
@endforeach
@else
    <p> No POst found</p>
    @endif
@endsection