@extends('layouts.app')
       @section ('content')
       <style>
 .section {

	height: 70vh;
}

.section .section-center {   
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

#booking {
	font-family: 'PT Sans', cursive;
/*	background-image: url('room.jpg');*/
	background-size: cover;
	background-position: center;
}

.booking-form {
	background: rgba(0, 0, 0, 0.7);
	padding: 40px;
	border-radius: 6px;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 20px;
}

.booking-form .form-control {
	background-color: #fff;
	height: 60px;
	color: #191a1e;
	border: none;
	font-size: 16px;
	font-weight: 400;
	-webkit-box-shadow: none;
	box-shadow: none;
	border-radius: 40px;
	
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control::placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 10px;
	bottom: 6px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: rgba(0, 0, 0, 0.3);
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	display: block;
	margin-left: 20px;
	margin-bottom: 5px;
	font-weight: 400;
	text-transform: uppercase;
	line-height: 24px;
	height: 24px;
	font-size: 12px;
	color: #fff;
}

.booking-form .form-checkbox input {
	position: absolute !important;
	margin-left: -9999px !important;
	visibility: hidden !important;
}

.booking-form .form-checkbox label {
	position: relative;
	padding-top: 4px;
	padding-left: 30px;
	font-weight: 400;
	color: #fff;
}

.booking-form .form-checkbox label+label {
	margin-left: 15px;
}

.booking-form .form-checkbox input+span {
	position: absolute;
	left: 2px;
	top: 4px;
	width: 20px;
	height: 20px;
	background: #fff;
	border-radius: 50%;
}


.booking-form .form-btn {
	margin-top: 27px;
}
 

.booking-form .Submit-btn, .submit-btn {
	color: #fff;
	background-color: #f23e3e;
	font-weight: 400;
	height: 50px;
	font-size: 14px;
	border: none;
	width: 100%;
	border-radius: 40px;
	text-transform: uppercase;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}
   .booking-form .Submit-btn {
	color: #fff;
    background-color: black;
    }
    
.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
	opacity: 0.9;
}</style>
             @include('inc.message')
      
                   
 <div class= "container-fluid text-rigth">         
      
                 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary"data-toggle="modal" data-target="#exampleModalCenter">
  BOOK NOW
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class=" modal-header" style="background-color:cream">
        <h5 class="modal-title" id="exampleModalLongTitle">Event Booking </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
					<br><br><br>
     {!!Form::open(['action'=>'EventsController@store',
              'method'=>'GET']) !!}
	<div class="row">
     <div class="col-md-6">
		<div class="form-group">
           <span class="form-label">Event Name</span>
	<select class="form-control" name="ename" >
	                <option></option>
					<option>Birthday</option>
			     	<option>Marriage</option>
			    	<option> Get together</option></select>
                   <span class="select-arrow"></span>
              </div>				
       </div>
<div class="col-md-6">
                <div class="form-group">
				<span class="form-label">Hall Type</span>
	           <select class="form-control" name="hall_type" >
	                <option></option>
					<option>Small</option>
			     	<option>Medium</option>
				    <option>Large</option></select>
                    <span class="select-arrow"></span>
                 </div>
    </div>			
	        								
</div>

<div class="row">
				<div class="col-md-6">
           <div class="form-group">
	<span class="form-label">Event Date</span>
 <input class="form-control" type="date" name="event_date" required>
	       </div>
        </div>
 <div class="col-md-6">
   <div class="form-group">
<span class="form-label">No of Guest</span>
<input class="form-control" type="text" name="no_of_guest" >
     </div>               </div>
                        </div>
<div class="row">
<div class="col-md-6">
				
            <div class="form-group">
                	<span class="form-label">Book under name</span>
	<input class="form-control" type="text" name="name"  required>
	</div>
</div>


<div class="col-md-6">
<div class="form-group">
<span class="form-label">Contact No</span>
<input class="form-control" type="text" name="contact" required>
	</div>
</div>
</div>

							

<div class="row">
<div class="col-md-12">
				<div class="form-group">
<span class="form-label">Description</span>
<input class="form-control" type="textarea" name="description" >
</div>
</div>
    </div>
	<div class="row">
<div class="col-md-6">
{{Form::submit('Submit', ['class'=> 'submit-btn'])}} 
        </div>
<div class="col-md-6">
<button type="button" class="Submit-btn" data-dismiss="modal">Cancel</button>
        
        </div>
        </div>    </div></div></div></div></div></div></div></div></div></div>
      
       <div class= "jumbotron jumbotron text-center">
       
       <h1><em><u>EVENT WE DO</u></em></h1>
      <div class="row">
  

       
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=edmYnwPGEYc"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/other.jpg" alt="video"
        data-toggle="modal" data-target="#modal2"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PjGkVCAo8Fw"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/marriage.jpg" alt="video"
        data-toggle="modal" data-target="#modal5"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gsNY7TV4r1M"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer d-block d-md-flex justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/birth.jpg" alt="video"
        data-toggle="modal" data-target="#modal3"></a>

  </div>
  <!-- Grid column -->
<!-- Card deck -->
           </div></div>
           
           
<div class= "jumbotron jumbotron text-center">
<h1><em><u>Hall Type</u></em></h1>
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">{{$hallDetails[0]->event_name}}</h4>
      <!--Text-->
      <p class="card-text">{{$hallDetails[0]->description}}</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       <div class="card-footer">
      <small class="text-muted">{{$hallDetails[0]->price}}</small>
    </div>
    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">{{$hallDetails[1]->event_name}}</h4>
      <!--Text-->
      <p class="card-text">{{$hallDetails[1]->description}}</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <div class="card-footer">
      <small class="text-muted">{{$hallDetails[1]->price}}</small>
    </div>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">{{$hallDetails[2]->event_name}}</h4>
      <!--Text-->
      <p class="card-text">{{$hallDetails[2]->description}}</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
     <div class="card-footer">
      <small class="text-muted">{{$hallDetails[2]->price}}</small>
    </div>

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->

</div>
      

        @endsection
   