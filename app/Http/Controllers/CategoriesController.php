<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
    {
        $categories = Category::query()->orderBy('name')->get();
        $successMessage = $request->session()->get('success.message');
        return view('categories.index', compact('categories'))
            ->with('successMessage', $successMessage);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesFormRequest $request)
    {
        $cat = Category::create($request->all());
        $request->session()->flash('success.message', "Category '{$cat->name}' Added");
        return to_route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category, Request $request )
    {
        $category->name = $request->name;
        $category->save();
        return to_route('categories.index')
            ->with('success.message', 'Category Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, Request $request)
    {
        $category->delete();
        return to_route('categories.index')
            ->with('success.message', "Category '{$category->name}' Deleted");
    }
}
