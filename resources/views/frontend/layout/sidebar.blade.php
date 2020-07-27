<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
						
						@foreach($cat as $cats)

						<li><a href="{{ route('cat_post',$cats->id) }}">{{ $cats->name }}</a></li>
					
						
						@endforeach					
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>
				@foreach($posts as $posts)
					<div class="popular clear">
						<h3><a href="{{ url('/latest_post',$posts->id)}}">{{ $posts->title }}</a></h3>
						<a href="{{url('/latest_post',$posts->id) }} "><img src="{{ asset('images/frontend_image/post2.png') }}" alt="post image"/></a>
						<p>{{ str_limit(strip_tags($posts->body), $limit=100, $end='...') }}</p>	
					</div>
				@endforeach	
				
					
					
					
					
	
			</div>
			
		</div>
	</div>