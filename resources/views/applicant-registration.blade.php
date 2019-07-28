@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Applicant Register</h3>
  </div>
</div>
<!--inner heading end-->


<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container">
    <!--Register Start-->
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
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
          <div class="contctxt">Please complete all fields.</div>
          <div class="formint conForm">
            <form action="{{ url('/applicant-register') }}" method="POST">
                {{ csrf_field() }}
              <div class="input-wrap">
                <input type="text" name="first_name" placeholder="First Name" class="form-control">
              </div>
              <div class="input-wrap">
                <input type="text" name="last_name" placeholder="Last Name" class="form-control">
              </div>
              <div class="input-wrap">
                <input type="email" name="email" placeholder="Enter your email" class="form-control">
              </div>

              <div class="input-wrap">
                <input type="password" name="password" placeholder="Enter your Password" class="form-control">
              </div>

              <div class="sub-btn">
                <input type="submit"  class="sbutn" value="Register Now">
              </div>
              <!-- <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="#.">Register Here</a></div> -->
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>

    <!--Register End-->
</div>
</div>
<!--Inner Content End-->


@endsection
