<?php

namespace App\Http\Controllers\Frontend;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
	 // public function __construct(){
  //       $this->middleware('verified');
  //   }

    public function index(){
        $blogData = Blog::latest()->get();
        return view('frontend.index', compact('blogData'));
    }
}
