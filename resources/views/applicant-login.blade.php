@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Applicant Login</h3>
  </div>
</div>
<!--inner heading end-->

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container">
    <!--Login Start-->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
        @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
       @endif
       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <div class="login">
          <div class="contctxt">User Login</div>
          <div class="formint conForm">
            <form action="{{ url('/applicant-login') }}" method="POST">
                @csrf
              <div class="input-wrap">
                <label class="input-group-addon">Email</label>
                <input type="text" name="email" placeholder="User Name" class="form-control">
              </div>
              <div class="input-wrap">
                <label class="input-group-addon">Password <span><a href="#">Forgot Password?</a></span></label>
                <input type="password" name="password" placeholder="Password" class="form-control">
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Login">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="{{url('/applicant-registration')}}">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>

    <!--Login End-->
</div>
</div>
<!--Inner Content End-->
@endsection
