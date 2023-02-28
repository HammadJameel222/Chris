<?php

namespace App\Http\Controllers;

use App\Casts\Money;
use App\Models\Product;
use Illuminate\Http\Request;
use NumberFormatter;
// use Money\Money;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = request()->session()->get('products', []);
        return view('user.screens.cart.cart', compact('cartItems'));
    }

    public function add(Request $request, Product $product)
    {


        // dd($product->price);
        // dd($product->variants[1]->pivot->price);
        // dd($product->variants[0]->pivot->price);
        // dd($product->discount->value);
        // $var  = (float)$product->price;
        // dd($var);
        $request->validate([
            'quantity' => 'required',
            'Sizes' => 'required|exists:variants,id',
            'Colors' => 'required|exists:variants,id',

        ]);

        if (!\Session::has('products')) {
            $products = [];
        } else {
            $products = \Session::get('products');
        }

        array_push($products, ['product' =>  $product, 'Colors' => $request->Colors, 'Sizes' => $request->Sizes, 'Quantity' => $request->quantity]);
        // dd($products);
        \Session::put('products', $products);

        // $price1 = new Money(['product' => $request->product->price ]);
        $price1 =  str($request->product->price);
        // $price2 = intval($price1);

        dd($price1);
        return redirect()->route('cart');
    }

    public function destroy($itemIndex)
    {

        // dd($itemIndex);
        $cartItems = \Session::get('products');

        unset($cartItems[$itemIndex]);

        \Session::put('products', $cartItems);

        return redirect()->route('cart');
    }

    // public function subTotal()
    // {
    //     $price1 = new Money(['product' => ]);
    // }
}
