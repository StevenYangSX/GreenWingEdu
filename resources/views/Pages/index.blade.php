
@extends('layouts.app')         
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/common.css') }}" /> 
</head>



<body>
        

  
          <div class="container">
          <!-- Example row of columns -->
          <div class="row" >
            <div class="col-md-4" >
              <h2 style="color:#00b300;"><strong>Students</strong></h2>
              <p> We build multiple tools to help students with their process of learning. We help over thousands of students improve their academic results. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4" >
              <h2 style="color:#99ff33;"><strong>Parents</strong></h2>
              <p>We build platform for parents who are caring about children's life. Making connection through thousands miles between parents and children. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4" >
              <h2 style="color:#ccff33;"><strong>Opportunites</strong></h2>
              <p>We build network for employers and students, providing lots of co-op, internship, part-time/full-time job opportunites. </p>
              <p><a class="btn btn-secondary" href="#" role="button" >View details &raquo;</a></p>
            </div>
          </div>
          <hr>
          </div>
    
        
      
    
<!-- Icons Grid -->
<section class="features-icons bg-light text-center" style="margin-top:20px;">
      <div class="container" >
        <div class="row">

          <!-- <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a class="features-icons-icon d-flex" href='/new_users/sign_in'>
               <img class="icon-check m-auto text-primary" src="/calender.png" >
               </a>
              <h3>Try The Best Fit</h3>
              <p class="lead mb-0"> System matches for you</p>
            </div>
          </div> -->
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a class="features-icons-icon d-flex" href='/'>
               <img class="icon-check m-auto text-primary" src="images/icon1.png" >
               </a>
              <h3><a href='/'>Search Class</a></h3>
              <p class="lead mb-0">Looking for a class or tutorial?</p>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a class="features-icons-icon d-flex" href='/'>
               <img class="icon-check m-auto text-primary" src="images/icon2.png" >
               </a>
              <h3><a href='/'>Post</a></h3>
              <p class="lead mb-0"> Watch the all of the tuturial post.</p>
            </div>
          </div>

        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <a class="features-icons-icon d-flex" href=''>
              <img class="icon-check m-auto text-primary" src="images/inco3.png" >
                </a>
              <h3><a href='/'>Comment</a></h3>
              <p class="lead mb-0">Write comment for classes</p>
              </div>
        </div>
          <!-- <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <a class="features-icons-icon d-flex" href='/new_users/sign_in'>
               <img class="icon-check m-auto text-primary" src="/welcome_icon6.jpeg" >
               </a>
              <h3>Internship</h3>
              <p class="lead mb-0">Seeking for internship?</p>
            </div> -->
          </div>
        </div>
      </div>
    </section>

  <!-- Image Showcases -->
  <section class="showcase" style="margin-left:200px;margin-right:200px">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/student.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 style="color:#ccff33;"><strong>Our Target</strong></h2>
            <p class="lead mb-0">
            GreenWing Education is a non-profit organization created in 2009 Vancouver. Aiming to create a large 
        social networking including current high school, university student, their parents, and also employees, 
        employers of different areas.
                </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
          <h2 style="color:#99ff33;"><strong>Our Focus</strong></h2>
            <p class="lead mb-0">GreenWing focus on constructing a source-sharing model with which students
        are guided by other alumnus, alumna. Rather than other agency, GreenWing provides service but not for projit.
        Anyone gets helped once they help others.</div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/buildingsmall.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 style="color:#00b300;"><strong>Our Future</strong></h2>
            <p class="lead mb-0">
            There are lots students who regitstered in GreenWing are now working
        in top 10 world-wide companies including Google, MicroSoft, TD Bank, and so on. Regitster today, get ready for
        being a GreenWinger.       </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h3 class="mb-5">What people are saying about Green Wing Eduction</h3>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="images/testimonials-1.jpg" alt="">
              <h5>Chao D.</h5>
              <p class="font-weight-light mb-0">"I get grade A here!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="images/testimonials-2.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Green Wing Education has a well system of classes."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="images/testimonials-3.jpg" alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"I am parent and I found my kid becoming better because of Green Wing Education."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>





<!-- Footer -->

<footer class="footer bg-light">
<hr style="height:1px;border:none;border-top:1px solid #555555;margin-left:60px;margin-right:60px;" />
      <div class="container" style="margin-left:40%; ">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto" >
            <ul class="list-inline mb-2" >
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &copy; Start Green Wing Education All Rights Reserved.</p>
          </div>

        </div>
      </div>
    </footer>


@endsection
