<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('category')->get();
        return view('categories/index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::orderBy('category')->get();
        return view('categories/create', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validate($request->rules(), $request->messages());

        $category = new Category();
        $category->category = $request->category;
        $category->save();
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('categories/show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories/edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $validatedData = $request->validate($request->rules(), $request->messages());

        $category->category = $request->category;
        $category->save();
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
