
@extends('layouts.app')
            

@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/common.css') }}" />  
</head>


        <div class="member-view width982 clearfix">
    <div class="member-right" style="; height: 80%; margin-bottom: 40px; position: center;">
        <div class="box" style="height: 500px">
            <div id="form">
                <h3>Register</h3>
                <form action="registerpage.php" method="POST">
                
                    User name:<br>
                    <input type="text" name="username" > <br>
                    <br>
                    Email Address:<br>
                    <input type="email" name="email"><br>
                    Password: <br>
                    <input type="text" name="password" > <br>
                    Confirm Password: <br>
                    <input type="text" name="password" > <br>

                    <input type="radio" name="profession" value="HighSchool Student" checked> HighSchool Students<br>
                    <input type="radio" name="profession" value="University Students"> University Students<br>
                    <input type="radio" name="profession" value="Parents"> Parents<br>
                    <input type="radio" name="profession" value="Employee/Employer"> Employee/Employer<br><br><br>


                    <input type="submit" value="Submit">
                  </form> 
                </div>         
        </div>
    </div>
</div>
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

