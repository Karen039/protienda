@extends('layouts.app')


@section('body-class', 'login-page sidebar-collapse')


@section('content')
<div class="page-header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form method="POST" action="{{ route('login') }}">
            @csrf

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Inicio de Sesion</h4>
                <!-- <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div> -->
              </div>
              <p class="description text-center">Ingresa tus datos</p>
              <div class="card-body">
                <!--div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name...">
                </div>-->
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input id="email" type="email" placeholder="Email..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password" type="password" placeholder="Password..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
              </div>
             
              <br><br><br>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</a>
              </div>
              <!--@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif-->
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('includes.footer')
  </div>
</div>
@endsection
