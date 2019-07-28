@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Add Skills</h3>
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
          <div class="contctxt">Add Skills</div>
          <div class="formint conForm">
            <form action="{{url('/applicant/dashboard/'.$id.'/skills')}}" method="POST">
                @csrf
                <input type="hidden" value="{{ $id }}" name="user_id">
              <div class="input-wrap">
                <input type="text" name="skills" id="skills" placeholder="Skill Name" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="input-wrap">
                    <select class="form-control" name="lavel">
                      <option value='' selected disabled>Select</option>
                      <option value='10%'> 10% </option>
                      <option value='20%'> 20% </option>
                      <option value='30%'> 30% </option>
                      <option value='40%'> 40% </option>
                      <option value='50%'> 50% </option>
                      <option value='60%'> 60% </option>
                      <option value='70%'> 70% </option>
                      <option value='80%'> 80% </option>
                      <option value='90%'> 90% </option>
                      <option value='100%'>100% </option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="sub-btn">
                    <input type="submit" name="submit" class="sbutn" value="Update">
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
