@extends('layouts.frontLayout.front_master')

@section('content')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">

    <h3>View Applicant</h3>
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
              <div class="listImg"><img src="#" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
              <div class="row">
                  @foreach($applicants as $applicant)
                <div class="col-md-8">
                  <h3><a href="#">{{$applicant ->first_name}} {{$applicant ->last_name}}</a></h3>
                  <div class="designation">{{$applicant->description}}</div>

                  <ul class="cantTags">
                       {{ date("d-m-Y", strtotime($applicant->created_at)) }}
                  </ul>
                </div>
                <div class="col-md-4">

                </div>
                @endforeach
              <div align="" class="col-md-12">{{$applicants->links()}}	</div>

              </div>
            </div>
          </div>
        </div>





        </div>
      </div>

  </div>
</div>
<!--Inner Content End-->
@endsection
