@extends('layouts.app')
   @section ('content')
   
 
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="welcome.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="room.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="welcome.jpg" alt="Third slide">
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
        
<div class= "jumbotron jumbotron font-cursive">
    <div class="container-fluid">
       <h5 class=" text-center mbr-light pb-1 mbr-fonts-style display-4">Welcome!! </h5>
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
               
               <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-5">Book Now </h1>
                
               <em> <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    We are all very different. We were born in different cities, at different times, we love different music, food, movies. But we have something that unites us all. It is our company. We are its heart. We are not just a team, we are a family.
                </p></em>
              
            </div>
             <div class="avatar mx-auto">
             <div class="col-sm-6 col-md-6 col-lg-4">
      <a href="/room">  <img src="../assets/img/room1.jpg" height="250" width="250" class="rounded-circle z-depth-1" 250X20
          alt="Sample avatar"></a>
      </div>
            </div>
        <div class="avatar mx-auto">
    <a href="/event">     <img src="../assets/img/event.jpg" height="250" width="250" class="rounded-circle z-depth-1"
                                 alt="Sample avatar"></a>
      </div>
        <div class="avatar mx-auto">
 <a href="/transportation">        <img src="../assets/img/tran.jpg" height="250" width="250"
class="rounded-circle z-depth-1"
                                 alt="Sample avatar"></a>
      </div>
        </div>
    
         
        
        
      <hr>  
        <!-- Section: Team v.1 -->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
  <!-- Section description -->
  <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
    eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
      <p class="text-uppercase blue-text"><strong>Graphic designer</strong></p>
      <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
        adipisci sed quia non numquam modi tempora eius.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Twitter -->
        <a class="p-2 fa-lg tw-ic">
          <i class="fab fa-twitter blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
      <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
      <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium
        doloremque rem laudantium totam aperiam.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
      <div class="avatar mx-auto">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
      <p class="text-uppercase blue-text"><strong>Photographer</strong></p>
      <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim est fugiat nulla id eu laborum.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
        <!-- Dribbble -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-dribbble blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6">
      <div class="avatar mx-auto">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
      <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
      <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
        totam officia voluptates perferendis voluptatibus aut.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Github -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-github blue-text"> </i>
        </a>
      </ul>
    <h1>    <a href="/staff "><i class="fas fa-angle-double-right"> <em> <u>See More</u></em></i></a></h1>
       
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.1 -->
        
        
    </div>
</div>
       
        
@endsection

