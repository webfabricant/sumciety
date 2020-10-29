<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth:admin');
        }




         public function traditional_user()
         {
             $traditional_users = User::where('role', '1')->get();
             return view('admin.pages.users.traditionaluser.index',compact('traditional_users'));
         }




        public function orgnization()
        {
            $orgnizations = User::where('role' , '3')->get();
            return view('admin.pages.users.orgnization.index', compact('orgnizations'));
        }
//.............................. Artist Function

    public function artist()
    {
        $artists = User::where('role', '2')->get();
        return view('admin.pages.users.artist.index', compact('artists'));
    }


    public function profile()
    {
        $user = Auth::User();
        $artist = User::where('id', $user->id)->first();
        return view('admin.pages.users.artist.profile', compact('artist'));
    }


    public function update(Request $request,$id)
    {
        $artist = User::find($id);

        $artist->firstname = $request->firstname;
        $artist->lastname = $request->lastname;
        $artist->email = $request->email;

        if ($request->hasfile('profile_image')) {
            $image = $request->file('profile_image');
            $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image->move($destinationPath, $name);
            $artist->profile_image =  $name;
        }

        $artist->phone = $request->phone;
        $artist->city = $request->city;
        $artist->country = $request->country;
        $artist->address =  $request->address;
        $artist->dob = $request->dob;
        $artist->link = $request->link;
        $artist->about = $request->about;

        $artist->save();
        return redirect()->back();
    }

}
