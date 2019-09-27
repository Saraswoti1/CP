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
        <h5 class="modal-title" id="exampleModalLongTitle">Transportation Booking </h5>
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
     {!!Form::open(['action'=>'TransportationController@store',
  'method'=>'GET']) !!}
	<div class="row">
     <div class="col-md-6">
		<div class="form-group">
	<span class="form-label">Arrival Date</span>
 <input class="form-control" type="date" name="arrival_date" required>
	       </div>		
       </div>
<div class="col-md-6">
                <div class="form-group">
	<span class="form-label">Address To Pick</span>
 <input class="form-control" type="text" name="address" required>
	       </div>		
    </div>			
	        								
</div>

<div class="row">
				<div class="col-md-6">
           <div class="form-group">
<span class="form-label">No of Guest</span>
<input class="form-control" type="text" name="no_of_guest" >
     </div>  
        </div>
 <div class="col-md-6">
   <div class="form-group">
				<span class="form-label">Vechicle Type</span>
	           <select class="form-control" name="vechicle_type" >
	                <option></option>
					<option>Two wheeler</option>
			     	<option>Taxi</option>
				    <option>Sumo</option></select>
                    <span class="select-arrow"></span>
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
<input class="form-control" type="text" name="phone" required>
	</div>
</div>
</div>

							

<div class="row">
<div class="col-md-12">
				<div class="form-group">
           <span class="form-label">Prefered Guide</span>
	<select class="form-control" name="guide" placeholder="Only limited no of guide" >
	                <option></option>
					<option>English</option>
			     	<option>Chinese</option>
			    	<option> Korean</option>
                 <option>Spanish</option>
                 <option>Japanese</option>
                 <option> Indian</option></select>
                  
                   <span class="select-arrow"></span>
                   
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
      
  <div class= "jumbotron jumbotron">    
     
      <div class="card-deck">
  <div class="card">
 
      <div class="row" >
       <div class="card" style="width: 18rem;">
   
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div></div>
   
   
    <div class="card-body">
      <h5 class="card-title">{{$transDetails[0]->trans_name}}</h5>
      <p class="card-text">{{$transDetails[0]->description}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">{{$transDetails[0]->price}}</small>
    </div>
  </div>
  <div class="card">
   
      <div class="row" >
       <div class="card" style="width: 18rem;">
   
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div></div>
   
    <div class="card-body">
      <h5 class="card-title">{{$transDetails[1]->trans_name}}</h5>
      <p class="card-text">{{$transDetails[1]->description}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">{{$transDetails[1]->price}}</small>
    </div>
  </div>
  <div class="card">
    
      <div class="row" >
       <div class="card" style="width: 18rem;">
   
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-30" src="../assets/img/tran.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div></div>
   
    <div class="card-body">
      <h5 class="card-title">{{$transDetails[2]->trans_name}}</h5>
      <p class="card-text">T{{$transDetails[2]->description}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">{{$transDetails[2]->price}}</small>
    </div>
  </div>
      </div></div>
      
   
        @endsection
