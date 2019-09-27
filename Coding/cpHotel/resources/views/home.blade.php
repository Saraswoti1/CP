@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                
                    
 <div class="alert alert-success" role="alert">
     <p>You are logged in as  Users</p>
                        </div>
                        <div class="panel-body">
                        @if (count($posts) >0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            
                            <th>Action</th>
                            
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                         
                            <td>
        {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no post</p>
                    @endif
                    </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
