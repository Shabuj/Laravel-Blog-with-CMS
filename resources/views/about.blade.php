@extends('frontend.layout.master')
@section('title')
About
@endsection
@section('content')

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>About us</h2>
	            
				<p>{{ $about->about }}</p>
				
				
	</div>

 </div>
 
@endsection
