<?php

namespace App\Http\Controllers;

use App\Models\Attribute as ModelsAttribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Page;
use App\Models\User;
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

    public function show(Product $product )
    {
        $products = Product::take(4)->get()->shuffle();
        $user = User::all();
        $product->load('variants', 'variants.attribute');
        return view('user.screens.products.products-details', compact('product','user','products'));
    }

    public function create()
    {
        return view('admin.screens.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required',
        ]);

        Page::create([
            'page' => $request->input('page'),
        ]);
        return redirect()->route('page.list');
    }

    public function list()
    {
        $pages = Page::all();
        return view('admin.screens.pages.index',compact('pages'));
    }

    public function edit(Page $page)
    {
        return view('admin.screens.pages.edit',compact('page'));
    }
    public function update(Request $request , Page $page)
    {
        $request->validate([
            'page' => 'required',
        ]);
        $data =  Page::find($page)->first();
        $data->page = $request->input('page');
        $data->save();
        return redirect()->route('page.list');
    }

    public function detail(Page $page)
    {
        return view('admin.screens.pages.detail',compact('page'));
    }

    public function destroy(Page $page)
    {
        $data = Page::find($page)->first();
        $data->delete($page);
        return redirect()->route('page.list');
    }
}
