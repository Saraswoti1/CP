@extends('layouts.admin')

@section('content')
<body>

      <!-- End Navbar -->
     
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
               <a href="/staff"><h3><u><i class="fas fa-hand-point-right"></i>View Staffs</u></h3></a>  
                <h5 class="title">Add Staff</h5>
             
              </div>
              <div class="card-body">
                {!!Form::open(['action'=>'StaffController@store',
              'method'=>'GET  ']) !!}
               
                 
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="first name" name="fname">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lname">
                      </div>
                    </div>
                    </div>
                    <div claa="row">
                    <div class="col-md-10 pr-1">
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10 pr-1">
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" name="dob">
                      </div>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-10 pr-1">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="Phone number" name="phone">
                      </div>
                    </div>
                     <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="Optional number" name="phone2">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                 <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Job Category</label>
                        <input type="text" class="form-control" name="job_category">
                      </div>
                    </div>

                   <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Work Schedule</label>
                        <input type="text" class="form-control" placeholder="eg:8am-2pm" name="work_time">
                      </div>
                    </div>
                    
                
                   <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Join Date</label>
                        <input type="date" class="form-control"  name="join_date">
                      </div>
                    </div>
                  </div>
                
                   <div class="row">
                   <div class="col-md-10 pl-2">
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="textarea" class="form-control" placeholder="Experience details of staff" name="experience">
                      </div>
                    </div>
                  </div>
              
                  
                {{Form::submit('Add', ['class'=> 'submit-btn'])}}   
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/admin.jpg" alt="...">
                    <h5 class="title">Admin</h5>
                  </a>
                  <p class="description">
                    admin@admin.com
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy
                  <br> helodnfk ainf 
                  <br> lreum lrinl leir
                </p>
              </div>
              <hr>
              <div class="button-container">
                <p>hello</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    

</body>
@endsection


@section('script')



