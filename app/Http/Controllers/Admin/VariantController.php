<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVariantRequest;
use App\Http\Requests\UpdateVariantRequest;
use App\Models\Attribute ;
use Illuminate\Http\RedirectResponse;
use App\Models\Variant;
// use Attribute;
use Illuminate\View\View;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::with('attribute')->latest()->get()->groupBy('attribute_id');
        return view('admin.screens.variants.index', compact('variants'));
    }

    public function create():View
    {
        $attributes = Attribute::all();
        return view('admin.screens.variants.add',compact('attributes'));
    }

    public function store(StoreVariantRequest $request) : RedirectResponse
    {
        // dd($request);
        Variant::create($request->sanitized());
        return redirect()->route('variant.index');
    }

    public function edit(Variant $variant)
    {
        $attributes = Attribute::all();
        return view('admin.screens.variants.edit',compact('variant','attributes'));
    }

    public function update(UpdateVariantRequest $request ,Variant $variant) : RedirectResponse
    {
        $var = Variant::find($variant)->first();
        $var->attribute_id = $request->input('attribute_id');
        $var->name = $request->input('name');
        $var->save();
        return redirect()->route('variant.index');
    }

    public function show(Variant $variant,$id)
    {
        // dd($id);
        $attribute = Attribute::find($id);
        return view('admin.screens.variants.detail',compact('variant','attribute'));
    }

    public function destroy(Variant $variant)
    {
        $data = Variant::find($variant)->first();
        $data->delete($variant);
        return redirect()->route('variant.index');
    }

}
