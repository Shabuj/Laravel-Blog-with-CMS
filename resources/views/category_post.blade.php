@extends('frontend.layout.master')
@section('title')
 Home 
@endsection


@section('content')
@include('frontend.layout.slider')

<div class="contentsection contemplete clear">
	
		<div class="maincontent clear">
          @foreach($cat_post as $posts)

			<div class="samepost clear">
				
                 <h2><a href="">{{ $posts->title }}</a></h2>
				<h4>{{ date('F j , Y' , strtotime($posts->created_at)) }} , By <a href="#">{{ $posts->author }}</a></h4>
				 <a href="#"><img src="{{ asset('images/frontend_image/post1.jpg') }}" alt="post image"/></a>
				<p>
					{{ str_limit(strip_tags($posts->body), $limit = 150, $end = '...') }}
				</p>
			
				<div class="readmore clear">
					<a href="{{ route('read_post',$posts->id ) }}">Read More</a>
					
				</div>


			</div>

			@endforeach
		
		</div>

		
	

		@endsection
