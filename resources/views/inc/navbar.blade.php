<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container" >
        <a href="/"><img src="/images/logo.png"  style="width: 70%;"> </a>
        <a class="navbar-brand" href="{{ url('/') }}">
          
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>


            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/" style="font-size: 120%;">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about" style="font-size: 120%;">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/student" style="font-size: 120%;">Students</a>
                
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="/posts" style="font-size: 120%;">Posts</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/activity" style="font-size: 120%;">Activies</a>
                    </li>
                  
                <!--
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  data-target="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                    -->
              

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" >
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:120%;"  href="{{ route('login') }}">{{ __('Login') }} </a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link"  style="font-size:120%;" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"  style="font-size:120%;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li><a href="/profile">Change Password</a></li>
                            
                           <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                           </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>