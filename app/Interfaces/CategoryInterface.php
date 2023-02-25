<?php

namespace App\Interfaces;
use App\Http\Controllers\CategoryController;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

interface CategoryInterface
{
    public function index();
    public function create();
    public function store(StoreCategoryRequest $request);
    public function show(Category $category);
    public function edit(Category $category);
    public function update(UpdateCategoryRequest $request ,Category $category);
    public function destroy(Category $category);
}
