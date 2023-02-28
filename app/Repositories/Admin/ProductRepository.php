<?php

namespace App\Repositories\Admin;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Interfaces\ProductInterface;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use App\Models\User;
use App\Models\Variant;
// use Attribute;
use Illuminate\View\View;

class ProductRepository implements ProductInterface
{
    public function index(): View
    {
        $products = Product::with('discount', 'variants')->get();
        $variants = $products->map(function ($product){
            $variants_group = $product->variants->groupBy('attribute_id');
            $variant_names = ["size" => [], "color" => []];
            $variant_prices = ["size" => [], "color" => []];
            foreach($variants_group as $vs){
                foreach($vs as $v){
                    $variant_names[\Str::lower($v->attribute->name)][] = $v->name;
                    $variant_prices[\Str::lower($v->attribute->name)][] = $v->pivot->price;
                }
                // dd($v);
                // $variants[] = $v->name;
            }
            $product->variant_names = $variant_names;
            $product->variant_prices = $variant_prices;
            // dd($variant_names, $variant_prices);
            // assign kri modified property
            return $product; // pura product ka object. agr mai sir variants krwata tou
        });

        // dd($products);
        return view('admin.screens.products.index', compact('products'));
    }

    public function create(): View
    {

        $categories = Category::all();
        $attributes = Attribute::with('variants')->get();
        $discounts = Discount::all();
        return view('admin.screens.products.add', compact('categories', 'attributes', 'discounts'));
    }

    public function store(StoreProductRequest $request)
    {

        $product =  Product::create([
            'category_id'  => $request->input('category'),
            'name' => $request->input('name'),
            'model' => $request->input('model'),
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ]);

        $product->discount()->create([
            'type' => $request->input('discount_type'),
            'value' => $request->input('discount_price')
        ]);
        foreach ($request->variants as $key => $variant) {
            $v = Variant::find($variant);
            $product->variants()->attach($v, ['price' => $request->price_add[$key]]);
        }
        $product->addMedia($request->file('image'))->toMediaCollection('images');
        // dd($request->all());

        return redirect()->route('product.create');
    }

    public function show(Product $product)
    {

        return view('admin.screens.products.detail', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $attributes = Attribute::with('variants')->get();
        $discounts = Discount::all();
        return view('admin.screens.products.edit', compact('product', 'categories', 'discounts', 'attributes'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        // dd($request);

        $product = Product::find($product)->first();

        $product->create([
            'category_id' => $request->input('category'),
            'name' => $request->input('name'),
            'model' => $request->input('model'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),

        ]);

        $product->discount()->create([
            'type' => $request->input('discount_type'),
            'value' => $request->input('discount_price'),
        ]);
        $product->addMedia($request->file('image'))->toMediaCollection('images');

        foreach ($request->variants as $key => $variant) {
            // dd($key);
            $v = Variant::find($variant);
            $product->variants()->attach($v, ['price' => $request->price_add[$key]]);
        };
        return redirect()->route('product.index');
    }
}
