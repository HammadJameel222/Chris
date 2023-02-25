<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Models\Product;
use App\Models\Attribute ;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AttributeController extends Controller
{
    public function index()
    {
        // $attributes = Attribute::orderBy('created_at', 'desc')->get();
        $attributes = Attribute::latest()->get();
        return view('admin.screens.attributes.index', compact('attributes'));
    }

    public function create():View
    {
        return view('admin.screens.attributes.add');
    }

    public function store(StoreAttributeRequest $request) : RedirectResponse
    {
        Attribute::create($request->sanitized());
        return redirect()->route('attribute.index');
    }

    public function edit(Attribute $attribute)
    {
        // dd($attribute);
        return view('admin.screens.attributes.edit',compact('attribute'));
    }

    public function update(UpdateAttributeRequest $request ,Attribute $attribute)
    {
        $attr = Attribute::find($attribute)->first();
        $attr->name = $request->input('name');
        $attr->save();
        return redirect()->route('attribute.index');
    }

    public function show(Attribute $attribute)
    {
        return view('admin.screens.attributes.detail',compact('attribute'));
    }

    public function destroy(Attribute $attribute)
    {
        $data = Attribute::find($attribute)->first();
        $data->delete($attribute);
        return redirect()->route('attribute.index');
    }
}
