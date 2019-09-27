@extends('layouts.app')
@section ('content')
<div class="container-fluid">
<h1>create</h1>
 <div class= "jumbotron jumbotron">
   <div class="row">
       <div class="col-md-2">
        
       </div>
       <div class=" col-sm-8">

       

{!! Form::open(['action'=>'PostsController@store',
  'method'=>'POST', 'enctype' =>'multipart/form-data', 'files' => true, 'role' => 'form']) !!}


{!! Form::label('title', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('title',null,['class'=>'form-control','required' => 'required']) !!}


{!! Form::label('body', 'Comment', array('class' => 'boldfont')) !!} <br>

{{ Form::textarea('body', null, 

['placeholder'=>'Enter your experience here ...', 'required' => 'required'],['id' => 'article-ckeditor']
) }}
<br>    
{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}} 
</div>
{!! Form::close() !!}
     </div></div></div>


@endsection 