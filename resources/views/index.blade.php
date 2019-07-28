@extends('layouts.frontLayout.front_master')
@section('content')
@include('layouts.frontLayout.front_jobSearch')
<!--featured jobs-->
<div class="featured-wrap">
  <div class="container">
    <div class="heading-title">Featured <span>Jobs</span></div>
    <div class="headTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et viverra nulla. Fusce at rhoncus diam, quis convallis ligula.
      Cras et ligula aliquet, ultrices leo non, scelerisque justo. Nunc a vehicula augue.</div>

      <div class="all-error-msg">
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
</div>

    <ul class="row">
      @foreach($jobs as $job)

      <li class="col-md-6 col-sm-6">
        <div class="listWrpService">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="listImg"><img src="images/feature02.png" alt=""></div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <h3><a href="#">{{$job->title}}</a></h3>
              <p>Company : {{$job->employer->business_name}}</p>
              <ul class="featureInfo">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$job->employer->first_name}}</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date("d-m-Y", strtotime($job->created_at)) }} </li>
              </ul>
              <div class="">
                <p>{{ Str::limit($job->description, 100) }}</p>
              </div>
              <form action="{{url('/apply/job/'.$job->id)}}" method="POST">
                @csrf
                <input type="hidden" name="job_id" value="{{$job->id}}">
                <div class="click-btn">
                  <button type="submit" name="submit" class="btn btn-info">Apply Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </li>

      @endforeach
      <div align="center" class="col-md-12">{{$jobs->links()}}	</div>
    </ul>

  </div>
</div>
<!--feature end-->
@endsection
