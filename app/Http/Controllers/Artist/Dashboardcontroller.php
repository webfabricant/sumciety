<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{

	public function __construct(){
        $this->middleware('auth');
        $this->middleware('role');
    }

    public function index(){
        return view('artist.pages.dashboard');
    }
}
