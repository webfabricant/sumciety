<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::latest()->get();
        return view('admin.pages.category.categories', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;

        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $name = time().'blog'.'.'.$image->getClientOriginalExtension();
            $destinationPath ='images/';
            $image->move($destinationPath, $name);
            $category->image = 'images/'.$name;

        }
        $category->save();
        $notification = array(
            'message' => 'Category Added Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);
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
        $category = Category::find($id);
        return view('admin.pages.category.edit', compact('category'));
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
        $category = Category::find($id);
        $category->name = $request->name;

        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $name = time().'blog'.'.'.$image->getClientOriginalExtension();
            $destinationPath ='images/';
            $image->move($destinationPath, $name);
            $category->image = 'images/'.$name;

        }
        $category->update();
        $notification = array(
            'message' => 'Category Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->dalete();
        $notification = array(
            'message' => 'Category Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);
       /* $category = Category::find($id);
        $category->delete();
        $notification = array(
            'message' => 'Category Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);*/
    }
}
