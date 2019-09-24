@extends('layouts.app')


@section('content')
<head>

    <br>
    <br>
    <section class="features-icons bg-light text-center">
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
              <a class="features-icons-icon d-flex" href=''>
               <img class="icon-check m-auto text-primary" src="images/icon1.png" >
               </a>
              <h2><a href='/'>Search Class</a></h2>
              <p class="lead mb-0">Looking for a class or tutorial?</p>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a class="features-icons-icon d-flex" href='/'>
               <img class="icon-check m-auto text-primary" src="images/icon2.png" >
               </a>
              <h2><a href='/'>Post</a></h2>
              <p class="lead mb-0"> Watch the all of the tuturial post.</p>
            </div>
          </div>

        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <a class="features-icons-icon d-flex" href=''>
              <img class="icon-check m-auto text-primary" src="images/inco3.png" >
                </a>
              <h2><a href='/'>Comment</a></h2>
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
    <div class="introduction2">
    <div class="introWord" >
    <h1>Grow With GreenWing |  Study With GreenWing  |  Success With GreenWing</h1>
    </div>
    <br>
    <br>
    <br>
    <br>
    </div>
    <div class="Cooperative" style="margin-left:50px">
    <div class="coopPhoto">
    <h2 style="color:#00b300;"><strong>Cooperative Academy</strong></h2>
    <br>
    
        <img src="images/sfu.png" style=" width:350px;height:250px">
        <img src="images/ubc.jpg" style=" width:350px;height:250px">
        <img src="images/cc.jpg" style=" width:350px;height:250px">
        <img src="images/AC.jpg" style=" width:350px;height:250px">
        <img src="images/nwss.jpg" style=" width:350px;height:250px">
    </div>
    <br>

    <div class="coopschool">
        <ul>
            <li><a href="http://www.sfu.ca"><h3>Simon Fraser University</h3></a></li>
            <li><a href="http://www.ubc.ca"><h3>University of British Columbia</h3></a></li>
            <li><a href="http://www.columbiacollege.ca"><h3>Columbica College</h3></a></li>
            <li><a href="http://www.alexandercollege.ca"><h3>Alexander College</h3></a></li>
            <li><a href="http://www.nwss.ca"><h3>New Westminster Secondary School</h3></a></li>
            <li><a href="http://www.tripsavvy.com/guide-to-universities-colleges-in-vancouver-3371270"><h3>And More...</h3></a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    
    
    
    <div class="mapouter">
    <h2 style="color:#00b300;"><strong>Cooperative Location</strong></h2>
    <div class="gmap_canvas"><iframe width="1000" height="546" id="gmap_canvas" src="https://maps.google.com/maps?q=university%2Fcolleague%20greate%20vancouver&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style>.mapouter{margin-top:40px;text-align:left;height:546px;width:1000px;margin-left:400px}.gmap_canvas {overflow:hidden;background:none!important;height:546px;width:1000px;}</style></div>
    

</body>
<br>
		<br>
		<br>
    

<br>
<br>
<br>
<!-- Icons Grid -->


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
