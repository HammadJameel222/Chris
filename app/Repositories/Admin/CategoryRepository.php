<?php

namespace App\Repositories\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Interfaces\CategoryInterface;
use App\Models\Category;
use App\Http\Requests\UpdateCategoryRequest;


class CategoryRepository implements CategoryInterface
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.screens.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.screens.category.add');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->sanitized());
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('admin.screens.category.detail',compact('category'));
    }

    public function edit(Category $category)
    {
        // dd($category);
        return view('admin.screens.category.edit',compact('category'));
    }

    public function update(UpdateCategoryRequest $request ,Category $category)
    {
        // dd($request);
        $data = Category::find($category)->first();
        $data->name = $request->input('name');
        $data->save();
        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $data = Category::find($category)->first();
        $data->delete($category);
        return redirect()->route('category.index');
    }
}
