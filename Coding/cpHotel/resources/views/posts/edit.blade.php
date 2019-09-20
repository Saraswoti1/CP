@extends('layouts.app')
@section ('content')
<div class="container-fluid">
<h1>edit</h1>


{!! Form::open(['action'=>[
 'PostsController@update',
 $post->id],
  'method'=>'POST', 'files' => true, 'role' => 'form']) !!}


{!! Form::label('title', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('title',$post->title,['class'=>'form-control','required' => 'required']) !!}


{!! Form::label('body', 'Body:', array('class' => 'boldfont')) !!} <br>

{{ Form::textarea('body', $post->body,
['placeholder'=>'Enter a description here ...', 'required' => 'required'],['id' => 'article-ckeditor']
) }}
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}} 
 
{!! Form::close() !!}

</div>

@endsection