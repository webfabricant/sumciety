<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Blog;

class FrontendController extends Controller
{
	 

    public function index(){
        $blogData = Blog::latest()->get();
        return view('frontend.index', compact('blogData'));
    }

    public function profile()
    {

    	$user = Auth::user();
    	$users = User::where('id', $user->id)->first();
        return view('frontend.user.profile', compact('users'));
    }
}
