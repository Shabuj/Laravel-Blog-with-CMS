 @section('title_section')
   Postlist | Admin

 @endsection

 @extends('backend.master1')

@section('content')
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>No</th>
							<th>Post Title</th>
							<th>Description</th>
							<th>Category</th>
							<th>Image</th>
							<th>Author</th>
							<th>Tags</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php $i=1 @endphp
						@foreach($post as $posts)
						<tr class="odd gradeX">
							<td>{{ $i++ }}</td>
							<td>{{ $posts->title }}</td>
							<td>{{ str_limit(strip_tags($posts->body), $limit = 30, $end = '...') }}</td>
							
							<td>{{ $posts->name }}</td>
<td> <img src='{{ Storage::url($posts->image) }}' height="40" width="60" alt="">  </td>
							<td>{{ $posts->author }}</td>
							<td>{{ $posts->tags }}</td>
							<td>{{ date('F j , Y' , strtotime($posts->created_at)) }}</td>
							<td><a href="{{ route('editPost',$posts->id) }}">Edit</a> || <a href="{{ route('deletePost', $posts->id) }}">Delete</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
	
               </div>
            </div>
        </div>
   
      @endsection