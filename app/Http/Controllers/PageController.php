<?php

namespace App\Http\Controllers;

use App\Models\Attribute as ModelsAttribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Variant;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    public function vr()
    {
        return view("admin.screens.pages.virtual-reality");
    }

    public function rtl()
    {
        return view("admin.screens.pages.rtl");
    }

    public function profile()
    {
        return view("admin.screens.pages.profile-static");
    }

    public function signin()
    {
        return view("admin.screens.pages.sign-in-static");
    }

    public function signup()
    {
        return view("admin.screens.pages.sign-up-static");
    }

    public function women()
    {
        $category = Category::where(['name' => 'jewelry'])->pluck('id')->first();
        // dd($category);
        $products = Product::where('category_id', $category)->get();
        // dd($products);
        return view('user.screens.products.womens', compact('products'));
    }
    public function men()
    {
        $category = Category::where(['name' => 'Watches'])->pluck('id')->first();
        $products = Product::where('category_id', $category)->get();
        // $products = Product::with('category')->get();
        return view('user.screens.products.mens', compact('products'));
    }

    public function signature()
    {
        $category = Category::where(['name' => 'jewelry'])->pluck('id')->first();
        $products = Product::where('category_id', $category)->get();
        return view('user.screens.products.signature-collection', compact('products'));
    }
    public function custom()
    {
        $category = Category::where(['name' => 'jewelry'])->pluck('id')->first();
        $products = Product::where('category_id',$category)->get();
        return view('user.screens.products.custom-jewelry', compact('products'));
    }

    public function engagement()
    {
        $category = Category::where(['name' => 'jewelry'])->pluck('id')->first();
        $products = Product::where('category_id',$category)->get();
        return view('user.screens.products.engagement', compact('products'));
    }

    public function show(Product $product)
    {
        $product->load('variants', 'variants.attribute');
        return view('user.screens.products.products-details', compact('product'));
    }
}
