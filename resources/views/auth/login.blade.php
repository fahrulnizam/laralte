@extends('layouts-guest.main')

@section('title')
    Login
@endsection

@section('content')
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{{ route('login') }}" aria-label="{{ ('Login') }}">
            @csrf
        <div class="form-group has-feedback">
          <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
              <span class="text-red">
                  {{ $errors->first('email') }}
              </span>
            @endif          
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
              <span class="text-red">
                  {{ $errors->first('password') }}
              </span>
            @endif
        </div>
        <div class="row">
          <div class="col-xs-8">
            <!-- <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <!-- <a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
          <i class="fa fa-facebook"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat">
          <i class="fa fa-google-plus"></i> Sign in using Google+
        </a> -->
      </div>
      <!-- /.social-auth-links -->

      <!-- <a href="#">I forgot my password</a>
      <br> -->
      <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
@endsection
