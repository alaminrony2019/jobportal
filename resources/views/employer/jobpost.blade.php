@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Post a Job</h3>
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
          <div class="contctxt">Job Information</div>
          <div class="formint conForm">
            <form action="{{url('/employer/dashboard/'.$id.'/jobpost')}}" method="POST">
                @csrf
                <input type="hidden" value="{{ $id }}" name="employer_id">
              <div class="input-wrap">
                <input type="text" name="title" placeholder="Job Title" class="form-control">
              </div>
              <div class="row">

                <div class="col-md-6">
                  <div class="input-wrap">
                    <select class="form-control" name="salary">
                      <option value='' selected disabled>Select Salary</option>
                      <option value='5000-1000'>BDT 5000 - 1000</option>
                      <option value='1000-15000'>BDT 1000 - 15000</option>
                      <option value='15000-20000'>BDT 15000 - 20000</option>
                      <option value='20000-25000'>BDT 20000 - 25000</option>
                      <option value='25000-30000'>BDT 25000 - 30000</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select class="form-control" name="country">
                      <option value='' selected disabled>Select Country</option>
                      <option value='Bangladesh'>Bangladesh</option>
                      <option value='USA'>USA</option>
                      <option value='UK'>UK</option>
                      <option value='India'>India</option>
                      <option value='Pakistan'>Pakistan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-wrap">
                    <select class="form-control" name="location">
                      <option value='' selected disabled>Select Location</option>
                      <option value='Dhaka'>Dhaka</option>
                      <option value='Chittagong'>Chittagong</option>
                      <option value='Khulna'>Khulna</option>
                      <option value='Mymensingh'>Mymensingh</option>
                      <option value='Rajshahi'>Rajshahi</option>
                      <option value='Rangpur'>Rangpur</option>
                      <option value='Sylhet'>Sylhet</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-wrap">
                    <textarea class="form-control" placeholder="Ad Description" name="description"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="sub-btn">
                    <input type="submit" class="sbutn" value="Post Job">
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
