<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Contact;
class PostController extends Controller
{
    public function readmore($id)
    {
    	
    	$post=Post::find($id);
    	return view('single',compact('post'));
    }

    public function cat_post($id)
    {
    	$cat_post = DB::table('posts')->where('catagory_id','=',$id)->get();
    	return view('category_post',compact('cat_post'));
    }
    public function latest_post($id)
    {
        
        $post=Post::find($id);
        return view('latest_post',compact('post'));
    }
    public function store(Request $request)
    {
        

        $this->validate( $request, [
                        'firstname' => 'required|string|max:44',
                        'lastname'  => 'required|string|max:33',
                        'email'     => 'required|string',
                        'massage'   =>'required'
        ]);

        $contact = new Contact;
        $contact->firstname = $request->firstname;
        $contact->lastname  = $request->lastname;
        $contact->email     = $request->email;
        $contact->massage   = $request->massage;
        $contact->save();
        session()->flash('message','Message sent successfully');
        return redirect()->back();
       
       
    }

    public function search_key(Request $request)
    {
        $post=Post::where('title','LIKE','%'.$request->keyword.'%')
                     ->orWhere('body','LIKE','%'.$request->keyword.'%')
                     ->paginate(2);
        return view('user_search',compact('post'));
    }
}
