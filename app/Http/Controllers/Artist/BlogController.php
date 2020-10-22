<?php

namespace App\Http\Controllers\Artist;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('role');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Blog::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('artist.pages.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $blog=new Blog();
        $blog->sub_id=Auth::user()->id;
        $blog->title=$request->title;
        $blog->description=$request->description;

        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $name = time().'blog'.'.'.$image->getClientOriginalExtension();
            $destinationPath ='post_images/';
            $image->move($destinationPath, $name);
            $blog->photo='post_images/'.$name;

        }

        if($request->hasfile('gallery')){
            foreach($request->file('gallery') as $image)
            {
                $name = time().'blog'.'.'.$image->getClientOriginalName();
                $destinationPath ='post_images/';
                $image->move($destinationPath, $name);
                $data[] = $name;
                $blog->gallery=json_encode($data);
            }
        }

        if($request->hasfile('video')){
            $video = $request->file('video');
            $name = time().'blog'.'.'.$video->getClientOriginalExtension();
            $destinationPath ='post_videos/';
            $video->move($destinationPath, $name);
            $blog->video='/post_videos/'.$name;

        }


        $blog->save();

       /* Blog::updateOrCreate(['id' => $request->product_id],
            [ 'sub_id' => $request->title, 'title' => $request->title, 'description' => $request->description]);*/

        return response()->json(['success'=>'Product saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return response()->json($blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
