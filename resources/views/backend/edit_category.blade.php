@section('title_section')
Edit Category | Admin
@endsection
@extends('backend.master1')

        @section('content')

         <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Edit Category</h2>
               <div class="block copyblock"> 
                 <form action="{{ route('category_update',$edit->id)}}" method="post">
                 	@csrf
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="{{ $edit->name }}" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit"  Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

        @endsection
       