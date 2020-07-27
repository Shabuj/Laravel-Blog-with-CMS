@section('title_section')
Add New Post | Admin
@endsection
@extends('backend.master1')


        @section('content')
                <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">               
                 <form action="{{ route('post_save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="category">
                                    {{ $i=1 }}
                                 @foreach ($cat as $cat)
                                 <option value="{{ $i++ }}">{{$cat->name}}</option>
                                 @endforeach
                                </select>
                            </td>
                        </tr>
                   
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"> </textarea>
                            </td>
                        </tr>
                    

                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="image" />
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tags </label>
                            </td>
                            <td>
                                <input type="text" name="tags" />
                            </td>
                        </tr>


                       
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit"  Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

   
@endsection


