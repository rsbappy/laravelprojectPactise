<?php

namespace App\Http\Controllers;

use session;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\SubcategoryStoreRequst;
use App\Http\Requests\SubCategoryUpdateRequest;
use Brian2694\Toastr\Facades\Toastr;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::get(['id', 'name', 'category_id' , 'created_at',  ]);
        return view('subcategory.index', compact('subcategories'));  // Create a view file in resources/views/subcategory/index.blade.php


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $categoies = Category::get(['id', 'name']);
        return view('subcategory.create', compact('categoies'));  // Create a view file in resources/views/subcategory/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryStoreRequst $request)

    {


        Subcategory::create([
            'category_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => str::slug($request->subcategory_name),
            'is_active' => $request->filled('is_active'),
        ]);
         // This will display all the data that you have submitted from the form
        // session()->flash('success', 'Category created successfully');
         Toastr::success('Category created successfully ');


         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = Subcategory::find($id);
        return view('subcategory.show', compact('subcategory'));  // Create a view file in resources/views/subcategory/show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        $categoies = Category::get(['id', 'name']);
        $subcategory= Subcategory::find($id);
        return view('subcategory.edit', compact('categoies', 'subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryUpdateRequest $request, $id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => str::slug($request->subcategory_name),
            'is_active' => $request->filled('is_active'),
        ]);
        Toastr::success('Category updated successfully');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategory::find($id)->delete();
        Toastr::success('Category deleted successfully');
        return redirect()->route('subcategory.index');
    }
}
