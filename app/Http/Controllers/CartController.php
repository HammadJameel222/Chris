<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = request()->session()->get('products',[]);
        return view('user.screens.cart.cart',compact('cartItems'));
    }

    public function add(Request $request, Product $product)
    {

        $request->validate([
            'quantity' => 'required',
            'Sizes' => 'required|exists:variants,id',
            'Colors' => 'required|exists:variants,id',

        ]);

        if(!\Session::has('products')){
            $products = [];
        }
        else{
            $products = \Session::get('products');
        }

        array_push($products, ['product' =>  $product , 'Colors' => request()->Colors , 'Sizes' => $request->Sizes ,'Quantity' => $request->quantity  ]);

        \Session::put('products', $products);

        return redirect()->route('cart');
    }

    public function destroy( $itemIndex)
    {

        $cartItems = \Session::get('products');

        unset($cartItems[$itemIndex]);

        \Session::put('products', $cartItems);

        return redirect()->route('cart');
    }

}

