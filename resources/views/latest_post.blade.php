@extends('frontend.layout.master')
@section('title')
 Latest Post
@endsection


@section('content')
@include('frontend.layout.slider')

<div class="contentsection contemplete clear">
	
		<div class="maincontent clear">
         

			<div class="samepost clear">
				
                 <h2><a href="">{{ $post->title }}</a></h2>
				<h4>{{ date('F j , Y' , strtotime($post->created_at)) }} , By <a href="#">{{ $post->author }}</a></h4>
				 <a href="#"><img src="{{ asset('images/frontend_image/post1.jpg') }}" alt="post image"/></a>
				<p>
					{{ ($post->body) }}
				</p>
			
				<div class="relatedpost clear">
					<h2>Related articles</h2>
					<a href="#"><img src="{{ asset('images/frontend_image/post1.jpg') }}"/></a>
					<a href="#"><img src="{{ asset('images/frontend_image/post1.jpg') }}"/></a>
					<a href="#"><img src="{{ asset('images/frontend_image/post1.jpg') }}"/></a>
					
				</div>


			</div>

			
		
		</div>

		
	

		@endsection
