<?php

namespace App\Http\Controllers\Admin;

use App\Childcategory;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Illuminate\Http\Request;

class ChildcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childcategory = Childcategory::latest()->get();
        return view('artist.pages.childcategory.index', compact('childcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $childcategory = Subcategory::all();
        return view('artist.pages.childcategory.create', compact('childcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new Childcategory();
        $subcategory->name = $request->name;
        $subcategory->subcategory_id = $request->subcategory_id;
        $subcategory->save();
        $notification = array(
            'message' => 'Sub Category Added Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('childcategory.index')->with($notification);
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
        $subcategory = Subcategory::all();
        $childcategory = Childcategory::find($id);
        return view('artist.pages.childcategory.edit', compact('childcategory', 'subcategory'));
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
        $category = Childcategory::find($id);
        $category->name = $request->name;
        $category->subcategory_id = $request->subcategory_id;

        $category->update();
        $notification = array(
            'message' => 'Category Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('subcategory.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
