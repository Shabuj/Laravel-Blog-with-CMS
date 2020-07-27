<?php

namespace App\Http\Controllers\admin;
use App\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
   public function index()
    {
    	return view('backend.index1');
    }
    public function addCategory()
    {
    	return view('backend.addcat');
    }
    public function addpost()
    {
        $cat = Catagory::all();
    	return view('backend.addpost',compact('cat'));
    }
}
