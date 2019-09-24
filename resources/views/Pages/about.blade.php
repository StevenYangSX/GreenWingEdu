@extends('layouts.app')
        

@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/common.css') }}" />  
</head>

        <div class="navigation">

		<br>
		<br>
		<section class="showcase" style="margin-left:200px;margin-right:200px">
          <div class="container-fluid p-0">
          <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/wingsmall.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 style="color:#00b300;"><strong>About Us</strong></h2>
            <p class="lead mb-0">
            GreenWing Education is a non-profit organization created in 2009 Vancouver. Aiming to create a large 
        social networking including current high school, university student, their parents, and also employees, 
        employers of different areas.GreenWing focus on constructing a source-sharing model with which students
				are guided by other alumnus, alumna. Rather than other agency, GreenWing provides service but not for projit.
				Anyone gets helped once they help others. There are lots students who regitstered in GreenWing are now working
				in top 10 world-wide companies including Google, MicroSoft, TD Bank, and so on. Regitster today, get ready for
				being a GreenWinger.
				</div>
         </div>
		</section>
		<div class="introduction" style="margin-top:100px">

    <br>
    </div>
        
		<div class="mapouter" >
    
    <h2 style="color:#00b300;"><strong>Our location</strong></h2>
    <br>
			<div class="gmap_canvas">
				<iframe width="1000" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=6971%20dow%20dve%2Cburnaby&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
					
				</iframe><a href="https://www.pureblack.de">pure black</a>
			</div>
			<style>.mapouter{text-align:left;width:1000px; height:700px; margin-left:400px;margin-top:100px;}.gmap_canvas {overflow:hidden;background:none!important;width:1000px; height:600px; }</style>
		</div>


		<br>
		<br>
		<br>

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

