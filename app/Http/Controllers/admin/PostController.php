<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catagory;
use App\Post;


class PostController extends Controller
{
   
    public function createCategory(Request $request)
    {
        $this->validate($request,[
                'name'  => 'required|string|max:100'
        ]);

        $cat = new Catagory;
        $cat->name = $request->name;
        $cat->save();
        session()->flash('message','Category create successfully');
        return redirect()->back();
    }
    public function post_save(Request $request)
    {
        $this->validate($request,[
            'title'     =>    'required|string| max:100',
            'category'  =>    'required',
            'body'      =>    'required|string| max:460',
            'image'     =>    'nullable|image',
            'author'    =>    'required| string',
            'tags'      =>    'required| string'

        ]);
        $post = new Post;

        $post->catagory_id = $request->category;
        $post->title       = $request->title;
        $post->body        = $request->body;
        $post->author      = $request->author;
        $post->image  = $request->image->store('public/images');
       
        $post->tags        = $request->tags;
        $post->save();
        session()->flash('message','Post updated successfully');
       // echo $post?"Post added successfully": "Post is Not added successfully ";
        return redirect()->back();
    }
    public function postlist()
    {
        $post=DB::table('catagories')
                        ->join('posts','catagories.id', '=', 'posts.catagory_id')
                        ->get();
        return view('backend.postlist',compact('post'));
    }

    public function show_category()
    {
        $show_category = Catagory::all();
        return view('backend.catlist',compact('show_category'));
    }

    public function editPost($id)
    {
        $editpost= Post::find($id);
        return view('backend.editpost',compact('editpost'));

    }  

    public function editedpost(Request $request,$id)
    {
          $this->validate($request,[
            'title'     =>    'required|string| max:100',
            'category'  =>    'required',
            'body'      =>    'required|string| max:460',
            'image'     =>    'nullable|image',
            'author'    =>    'required| string',
            'tags'      =>    'required| string'

        ]);
        $post = Post::find($id);

        $post->catagory_id = $request->category;
        $post->title       = $request->title;
        $post->body        = $request->body;
        $post->author      = $request->author;
        $post->image  = $request->image->store('public/images');
       
        $post->tags        = $request->tags;
        $post->save();
       // echo $post?"Post added successfully": "Post is Not added successfully ";
        return redirect()->route('postlist');
    }
    public function deletePost($id)
    {
        $deletepost = Post::find($id);
        $deletepost->delete();
        return redirect()->route('postlist');
    }  
    public function store(Request $request)
    {
        //
    }

    
    public function delete_category($id)
    {
        $cd = Catagory::find($id);
        $cd->delete();
        return redirect()->back();
    }

    
    public function edit_category($id)
    {
        $edit = Catagory::find($id);
        return view('backend.edit_category',compact('edit'));
    }

   
    public function updateCategory(Request $request,$id)
    {
        $this->validate($request,
                        [ 
                            'name' => 'required|string|max:100'
                        ]
        );
        $cp = Catagory::find($id);
        $cp->name = $request->name;
        $cp->save();
        echo "Update Category";
        return redirect()->back();

    }

    public function destroy($id)
    {
        //
    }
}
