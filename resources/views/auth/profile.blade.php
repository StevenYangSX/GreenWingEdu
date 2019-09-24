@extends('layouts.app')


@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/common.css') }}" />  
</head>
<body>
<h2 style="color:#00b300;"><strong>User Profile</strong></h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit your profile') }}</div>
                @if(isset($details))
                <div class="card-body">
                    <form method="POST" action="{{ url('change/password') }}">
                        @csrf
                        @foreach($details as $user)
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                
                            <div class="col-md-6">
                               
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{$user->name}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{$user->email}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                     @endforeach
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</body>

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