@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">

    <h3>{{$userDetails ->first_name}} {{$userDetails ->last_name}} Profile</h3>
  </div>
</div>
<!--inner heading end-->

<!--Inner Content start-->

<div class="container">

    <!--Latest Resumes Start-->
    <div class="row">
      <div class="col-md-12 col-sm-6">
        <div class="listWrpService featured-wrap candidate candetail">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="{{ asset('/images/applicant/'.$userDetails->profile_pic) }}" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
              <div class="row">
                <div class="col-md-8">
                  <h3><a href="#">{{$userDetails ->first_name}} {{$userDetails ->last_name}}</a></h3>
                  <div class="designation">{{$userDetails->description}}</div>

                  <ul class="cantTags">
                    @foreach($userDetails->skills as $skill)
                    <li><a href="#">{{$skill->skills}},</a></li>
                    @endforeach
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li class="click-btn apply "><a href="{{url('/applicant/dashboard/'.$userDetails->id.'/updateProfile')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Update Profile</a></li>
                    <li class="click-btn apply cont"><a href="{{url('/applicant/dashboard/'.$userDetails->id.'/skills')}}"> <i class="fa fa-key" aria-hidden="true"></i> Add Skills </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="listWrpService featured-wrap candidate candetail">
          <h2>Skills</h2>
          @foreach($userDetails->skills as $skill)
          <div class="head progresshead">{{$skill->skills}}</div>
          <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->lavel}}"> {{$skill->lavel}} </div>
          </div>
          @endforeach



        </div>
      </div>

  </div>
</div>
<!--Inner Content End-->
@endsection
