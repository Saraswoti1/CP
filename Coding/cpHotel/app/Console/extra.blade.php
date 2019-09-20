<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <!--@include('inc.message')-->
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
             
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
         <li ><a href="/index">Home</a></li>
         <li ><a href="/about">About Us</a></li>
         @can('isAdmin')
         <li ><a href="/a_dashboard">Dashboard</a></li>
         @endcan
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Book Now
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/room">Room</a></li>
          <li><a href="/event">Event</a></li>
          <li><a href="/transportation">Transportation</a></li>
        </ul>
      </li>
      <li><a href="/gallery">Gallery</a></li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Services
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/food">Call For Food</a></li>
          <li><a href="/laundry">Call For Laundry</a></li>
        </ul>
      </li>
      <li><a href="posts/create">Feedback</a></li>
                   <li><a href="/contact">Contact Us</a></li>
                   <li><a href="/staff">About Team</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
    <script>
        // MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
        </script>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <body>
    <div id="app">
    <!--@include('inc.message')-->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon">z</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    
                    
                    
                    
         <li ><a href="/index">Home</a></li>
         <li ><a href="/about">About Us</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Book Now
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/room">Room</a></li>
          <li><a href="/event">Event</a></li>
          <li><a href="/transportation">Transportation</a></li>
        </ul>
      </li>
      <li><a href="/gallery">Gallery</a></li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Services
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/food">Call For Food</a></li>
          <li><a href="/laundry">Call For Laundry</a></li>
        </ul>
      </li>
      <li><a href="posts">Feedback</a></li>
                   <li><a href="/contact">Contact Us</a></li>
                    </ul>
                    
 <!-- Right Side Of Navbar -->
                   
                   
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </div>
</body>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </div>
</body>
</html>














///staff


@extends('layouts.app')
       @section ('content')
       
        <div class= "container-fluid">
        <div class= "jumbotron jumbotron">
   
          
           <p>transportation</p>
     {!!Form::open(['action'=>'StaffController@store',
  'method'=>'GET']) !!}
       <div class="form-group">
      
       {!! Form::label('fname', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('fname',null,['class'=>'form-control','required' => 'required']) !!}

           {!! Form::label('lname', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('lname',null,['class'=>'form-control','required' => 'required']) !!}

           {!! Form::label('email', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('email',null,['class'=>'form-control','required' => 'required']) !!}
         
         
                   {!! Form::label('irdobon', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('dob',null,['class'=>'form-control','required' => 'required']) !!}


         {!! Form::label('address', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('address',null,['class'=>'form-control','required' => 'required']) !!}

         {!! Form::label('phone2', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('phone2',null,['class'=>'form-control','required' => 'required']) !!}

         {!! Form::label('job_category', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('job_category',null,['class'=>'form-control','required' => 'required']) !!}
           
                    {!! Form::label('work_time', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('work_time',null,['class'=>'form-control','required' => 'required']) !!}
           
                    {!! Form::label('join_date', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('join_date',null,['class'=>'form-control','required' => 'required']) !!}
           
                    {!! Form::label('experience', 'Title:', array('class' => 'boldfont')) !!}
{!! Form::text('experience',null,['class'=>'form-control','required' => 'required']) !!}
           
  
  <br>
{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}} 
</div>

         
       
       
        @endsection




//table
<!-- Table with panel -->
<div class="card card-cascade narrower">

  <!--Card image-->
  <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

    <div>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-th-large mt-0"></i>
      </button>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-columns mt-0"></i>
      </button>
    </div>

    <a href="" class="white-text mx-3">Table name</a>

    <div>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-pencil-alt mt-0"></i>
      </button>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="far fa-trash-alt mt-0"></i>
      </button>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-info-circle mt-0"></i>
      </button>
    </div>

  </div>
  <!--/Card image-->

  <div class="px-4">

    <div class="table-wrapper">
      <!--Table-->
      <table class="table table-hover mb-0">

        <!--Table head-->
        <thead>
          <tr>
            <th>
              <input class="form-check-input" type="checkbox" id="checkbox">
              <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
            </th>
            <th class="th-lg">
              <a>First Name
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Last Name
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox1">
              <label class="form-check-label" for="checkbox1" class="label-table"></label>
            </th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox2">
              <label class="form-check-label" for="checkbox2" class="label-table"></label>
            </th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox3">
              <label class="form-check-label" for="checkbox3" class="label-table"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox4">
              <label class="form-check-label" for="checkbox4" class="label-table"></label>
            </th>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox5">
              <label class="form-check-label" for="checkbox5" class="label-table"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->


//table personal

     <!--      @foreach ($users as $key=> $value) 
          <tr>
        <td>Name</td>
        <td>{{$value->name}}</td>
        
      </tr>
      <tr>
        <td>Email</td>
        <td>{{$value->email}}</td>
        
      </tr>
                                            <tr>
        <td>Joined at</td>
        <td>{{$value->created_at}}</td>
        
      </tr>
      <tr>
        <td>Updated at</td>
        <td>{{$value->updated_at}}</td>
        
      </tr>-->
               
