      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       @extends('layouts.app')

       @section ('content')
       
       
    <style>

.map-container-6{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-6 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}


</style>
       
     <!--Section: Contact v.1-->
<section class="section pb-5">

  <!--Section heading-->

       
<div class= "jumbotron jumbotron font-cursive">
    <div class="container-fluid">
       <h5 class=" text-center mbr-light pb-1 mbr-fonts-style display-4">Contact Us</h5>
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
        
               <em> <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    We are all very different. We were born in different cities, at different times, we love different music, food, movies. But we have something that unites us all. It is our company. We are its heart. We are not just a team, we are a family.
                </p></em>
            </div>
        </div>
    </div>
    </div>
    
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">
 {!!Form::open(['action'=>'ContactController@store',
              'method'=>'GET  ']) !!}
        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>

          <p>We'll write rarely, but with only the best content.</p>
          <br>
         
          <!--Body-->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" name="name" class="form-control">
            <label for="name">Your name</label>
          </div>

          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" name="email" class="form-control">
            <label for="email">Your email</label>
          </div>
 <div class="md-form">
       
    <select class="form-control" name="subject">
      <option></option>
      <option>Feedback</option>
      <option>Complain</option>
      <option>Query</option>
      <option>Suggestion</option>
    </select>
            <label for="subject">Subject</label>
          </div>
          

          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea name="description" class="form-control md-textarea" rows="3"></textarea>
            <label for="description">Description</label>
          </div>

          <div class="text-center mt-4">
               {{Form::submit('Send', ['class'=> 'submit-btn'])}}   
          </div>

        </div>
      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
   
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d31508.94329124789!2d151.22910489221255!3d-33.890434634086155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x6b12ad9eb1c241fd%3A0x1ff8d2143068b5bf!2sHotel%20Bondi%2C%20Campbell%20Parade%2C%20Bondi%20Beach%20NSW%2C%20Australia!3m2!1d-33.889775!2d151.2749565!5e0!3m2!1sen!2snp!4v1568467525608!5m2!1sen!2snp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
          <p>Hotel Bondi, 178 Campbell Parade,</p>
          <p>Australia</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
          <p>+ 01 234 567 89</p>
          <p>Mon - Fri, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
          <p>info@gmail.com</p>
          <p>hms@gmail.com</p>
        </div>
      </div>


   
    </div>
    <!--Grid column-->
  </div>

       </section>
<!--Section: Contact v.1-->  
       

     @endsection