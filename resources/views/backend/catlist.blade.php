 @section('title_section')
   Category List | Admin

 @endsection

 @extends('backend.master1')

@section('content')
 <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php $i=1;   @endphp
						@foreach($show_category as $catlists)
						<tr class="odd gradeX">
							<td>{{ $i++ }}</td>
							<td>{{ $catlists->name }} </td>
							<td><a href="{{ route('editcat',$catlists->id) }}">Edit</a> || <a href="{{ route('delcat',$catlists->id) }}">Delete</a></td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
               </div>
            </div>
        </div>


      @endsection