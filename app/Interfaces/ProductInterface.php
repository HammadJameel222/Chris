<?php

namespace App\Interfaces;
use App\Http\Controllers\ProductController;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

interface ProductInterface
{
    public function index();
    public function create();
    public function store(StoreProductRequest $request);
    public function show(Product $product);
    public function edit(Product $product);
    public function update(UpdateProductRequest $request , Product $product );

}
