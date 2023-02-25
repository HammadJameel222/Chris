<?php

namespace App\Repositories\User;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Interfaces\ProductInterface;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use App\Models\Variant;
// use Attribute;
use Illuminate\View\View;

class ProductRepository implements ProductInterface
{
    // public function index(): View
    // {

    //     $products = Product::with('discount')->get();
    //     $view1 = view('user.screens.products.womens',compact('products'));
    //     $view2 = view('user.screens.products.mens',compact('products'));

    //     return view('main', compact('view1','view2'));
    // }

    // public function create(): View
    // {
    //     $categories = Category::all();
    //     $attributes = Attribute::with('variants')->get();
    //     $discounts = Discount::all();
    //     return view('admin.screens.products.add', compact('categories', 'attributes', 'discounts'));
    // }

    // public function store(StoreProductRequest $request)
    // {

    //     $product =  Product::create([
    //         'category_id'  => $request->input('category'),
    //         'name' => $request->input('name'),
    //         'model' => $request->input('model'),
    //         'price' => $request->input('price'),
    //         'description' => $request->input('description')
    //     ]);

    //     $product->discount()->create([
    //         'type' => $request->input('discount_type'),
    //         'value' => $request->input('discount_price')
    //     ]);
    //     foreach ($request->variants as $key => $variant) {
    //         $v = Variant::find($variant);
    //         $product->variants()->attach($v, ['price' => $request->price_add[$key]]);
    //     }
    //     $product->addMedia($request->file('image'))->toMediaCollection('products');
    //     // dd($request->all());

    //     return redirect()->route('product.create');
    // }

    // public function show(Product $product)
    // {
    //     return view('admin.screens.products.detail', compact('product'));
    // }

    // public function edit(Product $product)
    // {
    //     $categories = Category::all();
    //     $attributes = Attribute::with('variants')->get();
    //     $discounts = Discount::all();
    //     return view('admin.screens.products.edit', compact('product', 'categories', 'discounts', 'attributes'));
    // }

    // public function update(UpdateProductRequest $request, Product $product)
    // {
    //     // dd($request);

    //     $product = Product::find($product)->first();

    //     $product->create([
    //         'category_id' => $request->input('category'),
    //         'name' => $request->input('name'),
    //         'model' => $request->input('model'),
    //         'price' => $request->input('price'),
    //         'description' => $request->input('description'),

    //     ]);

    //     $product->discount()->create([
    //         'type' => $request->input('discount_type'),
    //         'value' => $request->input('discount_price'),
    //     ]);
    //     $product->addMedia($request->file('image'))->toMediaCollection('products');

    //     foreach ($request->variants as $key => $variant) {
    //         // dd($key);
    //         $v = Variant::find($variant);
    //         $product->variants()->attach($v, ['price' => $request->price_add[$key]]);
    //     };
    //     return redirect()->route('product.index');
    // }
}
