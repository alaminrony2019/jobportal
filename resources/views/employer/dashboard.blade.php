@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">

    <h3>{{$emp_details ->first_name}} {{$emp_details ->last_name}} Profile</h3>
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
              <div class="listImg"><img src="{{ asset('/images/resume01.jpg') }}" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
              <div class="row">
                <div class="col-md-8">
                  <h3><a href="#">{{$emp_details ->first_name}} {{$emp_details ->last_name}}</a></h3>
                  <div class="designation">{{$emp_details->business_name}}</div>

                  <ul class="cantTags">

                    <li><a href="#">kgjklhjljhlkjlk,</a></li>

                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li class="click-btn apply "><a href="{{url('/employer/dashboard/'.$emp_details->id.'/jobpost')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Post Job</a></li>
                    <li class="click-btn apply "><a href="{{url('/employer/dashboard/applicant')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> View Applicants</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="listWrpService featured-wrap candidate candetail">
          <h2>All Jobs</h2>

          <ul class="listService">
            @foreach($jobs as $job)
         <li>
       <div class="listWrpService featured-wrap">
         <div class="row">
           <div class="col-md-2 col-sm-3 col-xs-3">
             <div class="listImg"><img src="images/feature01.png" alt=""></div>
           </div>
           <div class="col-md-10 col-sm-9 col-xs-9">

           <div class="row">
           <div class="col-md-9">
             <h3><a href="#">{{$job->title}}</a></h3>
             <p> Company :{{$emp_details->business_name}} </p>
             <ul class="featureInfo innerfeat">
               <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$job->location}}</li>
               <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date("d-m-Y", strtotime($job->created_at)) }}</li>
             </ul>

             <p class="para">{{ Str::limit($job->description, 200) }}</p>

             </div>
             </div>
           </div>
         </div>
       </div>
     </li>
     @endforeach

    {{$jobs->links()}}


   </ul>




        </div>
      </div>
  </div>
</div>
<!--Inner Content End-->
@endsection
