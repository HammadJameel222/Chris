<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Interfaces\CategoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;


class CategoryController extends Controller
{
    protected $service ;

    public function __construct(CategoryInterface $service)
    {
        return $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return $this->service->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return $this->service->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
        // dd($category);
        return $this->service->show($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        // dd($category);
        return $this->service->edit($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        return $this->service->update($request , $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        return $this->service->destroy($category);
    }
}
