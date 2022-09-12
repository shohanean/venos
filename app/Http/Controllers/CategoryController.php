<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with(['user', 'subcategory'])->latest()->get();
        return view('backend.category.index', compact('categories'));
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
        $request->validate([
            'category_name' => 'required'
        ]);
        $status = [];
        foreach ($request->category_name as $key => $category) {
            if(Category::where('category_name', $category)->exists()){
                $status["exists"][$key + 1] = $category;
            }
            else{
                Category::create([
                    'category_name' => $category,
                    'slug' => Str::slug($category),
                    'added_by' => auth()->id(),
                ]);
                $status["added"][$key + 1] = $category;
            }
        }
        return back()->with('status', $status);
    }
    public function subcategory_store(Request $request)
    {
        $request->validate([
            'category_id' => 'required'
        ],[
            'category_id.required' => 'You have to choose a category first'
        ]);
        if(!$request->subcategory_name){
            return back()->withErrors(['subcategory'=> 'Subcategory name field is required.']);
        }
        foreach ($request->subcategory_name as $subcategory) {
            if(!Subcategory::where([
                'subcategory_name' => $subcategory,
                'category_id' => $request->category_id
            ])->exists()){
                Subcategory::create([
                    'subcategory_name' => $subcategory,
                    'category_id' => $request->category_id,
                    'slug' => Str::slug($subcategory),
                    'added_by' => auth()->id(),
                ]);
            }
        }
        return back()->with('subcategory_status', 'Subcategory added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
