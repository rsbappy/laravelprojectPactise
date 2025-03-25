<?php

namespace App\Http\Controllers;

use session;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\SubcategoryStoreRequst;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::with('category')->get(['id', 'name', 'category_id' , 'created_at' ]);
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
         session()->flash('success', 'Category created successfully');
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
        //
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
        //
    }
}
