<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateDiscountRequest;
use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Models\Product;
use App\Models\Attribute ;
use App\Models\Discount;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return view('admin.screens.discounts.index', compact('discounts'));
    }

    public function create():View
    {
        return view('admin.screens.discounts.add');
    }

    public function store(StoreDiscountRequest $request) : RedirectResponse
    {
        $product_id = '2';
        $dis = new Discount();
        $dis->product_id = $product_id;
        $dis->type = $request->input('type');
        $dis->value = $request->input('value');
        $dis->save();
        return redirect()->route('discount.index');
    }

    public function edit(Discount $discount)
    {
        return view('admin.screens.discounts.edit',compact('discount'));
    }

    public function update(UpdateDiscountRequest $request ,Discount $discount) : RedirectResponse
    {
        $dis = Discount::find($discount)->first();
        $dis->type = $request->input('type');
        $dis->value = $request->input('value');
        $dis->save();
        return redirect()->route('discount.index');
    }

    public function show(Discount $discount)
    {
        return view('admin.screens.discounts.detail',compact('discount'));
    }

    public function destroy(Discount $discount)
    {
        $data = Discount::find($discount)->first();
        $data->delete($discount);
        return redirect()->route('discount.index');
    }
}
