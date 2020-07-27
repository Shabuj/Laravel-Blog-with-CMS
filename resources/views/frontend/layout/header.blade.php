<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Delowar">
	<link rel="stylesheet" href="{{ asset('/fonts/frontend_font/font-awesome-4.5.0/css/font-awesome.css')}}">	
	<link rel="stylesheet" href="{{ asset('/css/frontend_css/nivo-slider.css') }} type="text/css" media="screen" />
	
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('/css/frontend_css/style.css') }}">
	<script src="{{ asset('/js/frontend_js/jquery.js') }} " type="text/javascript"></script>
	<script src="{{ asset('/js/frontend_js/jquery.nivo.slider.js') }}" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>

<body>
	<div class="headersection templete clear">
		<a href="#">
			<div class="logo">
				<img src="{{ asset('images/frontend_image/logo.png') }}" alt="Logo"/>
				<h2>@foreach($title as $title)

					{{$title->title }}
                 @endforeach
				</h2>
				<p>Forever Green Life </p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				<a href="http//:www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="http//:twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="http//:linkdin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="http//:www.googleplus.com" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			<div class="searchbtn clear">
			<form action="{{ route('search') }}" method="post">
				@csrf
				<input type="text" name="keyword" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a id="active" href="{{ URL::to('/index') }}">Home</a></li>   
		<li><a href="{{ URL::to('/about') }}">About</a></li>	
		<li><a href="{{ URL::to('/contact') }}">Contact</a></li>
	</ul>
</div>