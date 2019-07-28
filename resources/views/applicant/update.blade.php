@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Update Profile</h3>
  </div>
</div>
<!--inner heading end-->

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container">

    <!--Post Job Start-->
    <div class="row">
      <div class="col-md-2 col-sm-2"></div>
      <div class="col-md-8 col-sm-8">
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
          <div class="contctxt">Update Information</div>
          <div class="formint conForm">
            <form action="{{ url('/applicant/dashboard/'.$id.'/updateProfile') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="input-wrap">
                <input type="text" name="description" placeholder="Job Title" class="form-control">
              </div>
              <div class="row">

                <div class="col-md-6">
                  <div class="input-wrap">
                 <input type="file" class="custom-file-input" id="customFile" name="profile_pic">
                   <label class="custom-file-label" for="customFile"> Profile Picture</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrap">
                   <input type="file" class="custom-file-input" id="customFile" name="resume">
                     <label class="custom-file-label" for="customFile"> Resume</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="sub-btn">
                    <input type="submit" class="sbutn" value="Update">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-2"></div>
    </div>

    <!--Post Job End-->
  </div>
</div>
<!--Inner Content End-->
@endsection
