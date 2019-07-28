<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from www.hassandesigns.top/html/jobfinder/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 13:24:17 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@if(!empty($meta_title)){{$meta_title}}@else  Home | Job Finder @endif </title>

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Bootstrap -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
</head>
<body>

  @include('layouts.frontLayout.front_header')

	@yield('content')

  @include('layouts.frontLayout.front_footer')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- general script file -->
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>


</body>


</html>
