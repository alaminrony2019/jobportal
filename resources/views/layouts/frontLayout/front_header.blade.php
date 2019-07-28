<!--header start-->
<div class="header-wrap">
  <div class="container">
    <!--row start-->
    <div class="row">
      <!--col-md-3 start-->
      <div class="col-md-3 col-sm-3">
        <div class="logo"><a href="{{url('/')}}"><img src="images/logo.png" alt=""></a></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!--col-md-3 end-->
      <!--col-md-7 end-->
      <div class="col-md-5 col-sm-9">
        <!--Navegation start-->
        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header"> </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li> <a href="{{url('/')}}" class="active"> Home <span></span></a>
                </li>

                <?php
                $employerLogin = Session::get('employerLogin');
                $empname = Session::get('last_name');
                $applicantlogin = Session::get('applicantLogin');
                $appname = Session::get('last_name');
                ?>
                 @if($employerLogin == false && $applicantlogin == false)
                  <li class="dropdown"> <a href="#"> Login <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li> <a href="{{url('/employer-login')}}"> Employers </a></li>
                      <li> <a href="{{url('/applicant-login')}}"> Appliant</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#"> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li> <a href="{{url('/employer-registration')}}"> Employers </a></li>
                      <li> <a href="{{url('/applicant-registration')}}"> Appliant </a></li>
                    </ul>
                  </li>
                  @elseif($employerLogin == true)
                  <li><a href="{{url('/logout')}}"> Logout <span></span></a>
                  <li> <a href="{{url('/employer/dashboard')}}"> {{ $empname }} Profile <span></span></a>

                    @elseif($applicantlogin == true)
                    <li><a href="{{url('/logout')}}"> Logout <span></span></a>
                    <li> <a href="{{url('/applicant/dashboard')}}"> {{ $appname }} Profile <span></span></a>
                  @endif


              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Navegation start-->
      </div>
      <!--col-md-3 end-->
      <!--col-md-2 start-->
      <div class="col-md-4 col-sm-12">
        <div class="header-right">
           <!-- $applicantlogin = Session::get('applicantLogin')
            @if($applicantlogin == false)
          <div class="post-btn"><a href="post-job.html">Post a Job</a></div>
           @endif -->
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!--col-md-2 end-->
    </div>
    <!--row end-->
  </div>
</div>
<!--header start end-->
