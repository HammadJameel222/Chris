@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Cart"
    </script>
    <main>
        <section class="cart-sec inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <h2 class="cart-title inner-title mb-60">My Shopping Cart</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive cart-table">

                            <table class="table mb-70 col-md-10">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h3 class="primary-text">PRODUCT Name</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">QUANTITY</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">UNIT PRICE</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">Variant Size id</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">Variant Color id</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">Remove</h3>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $key => $cartItem)
                                        <td>
                                            <h3 class="cart-hd-sm">{{ $cartItem['product']->name }}</h3>
                                        </td>
                                        <td>
                                            <h3>{{ $cartItem['Quantity'] }}</h3>

                                        </td>
                                        <td>
                                            <h5 class="cart-hd-sm">{{ $cartItem['product']->price }}</h5>
                                        </td>
                                        @foreach ($cartItem['Sizes'] as $size)
                                            <td>
                                                <h5 class="cart-hd-sm">{{ $size }}</h5>
                                            </td>
                                        @endforeach
                                        @foreach ($cartItem['Colors'] as $color)
                                            <td>
                                                <h5 class="cart-hd-sm">{{ $color }}</h5>
                                            </td>
                                        @endforeach
                                        <td>
                                            <form action="/cart/destroy/{{ $key }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="submit" value="Remove" class="btn btn-danger">
                                            </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="row justify-content-between">
                                <div class="col-lg-6 col-12 mr-b-30 mr-t-30">
                                    <a href="./custom-jewelry.php" class="redirect-shop ">Continue Shopping</a>

                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="cart-box-wrap">
                                        <div class="cart-box-top">
                                            <h3>SUMMARY</h3>
                                        </div>
                                        <div class="cart-box-bottom">
                                            <div class="d-flex justify-content-between align-items-center mb-40">
                                                <div>
                                                    <h4 class="card-box-hd">Subtotal</h4>
                                                </div>
                                                <div>
                                                    {{-- @foreach ($cartItems as $cartItem)

                                                        @endforeach --}}
                                                        {{-- @dd($cartItem['product']->discount->value) --}}
                                                    {{-- @dd($cartItem['product']->price->subtract($cartItem['product']->discount->value)->getAmount()) --}}
                                                    {{--  , $cartItem['product']->price , $cartItem['product']->variants[0]->pivot->price , $cartItem['product']->variants[1]->pivot->price) --}}
                                                    {{-- {{ $cartItem['product']->discount->value , $cartItem['product']->price}} --}}
                                                    {{-- <h4 class="card-box-hd change">{{ ($cartItem['product']->price , $cartItem['product']->variants[0]->pivot->price , $cartItem['product']->variants[1]->pivot->price)}}</h4> --}}

                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-40">
                                                <div>
                                                    <h4 class="card-box-hd">Tax 0%</h4>
                                                </div>
                                                <div>
                                                    <h4 class="card-box-hd change">£05.00</h4>

                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-30">
                                                <div>
                                                    <h4 class="card-box-hd bold">Grand Total</h4>
                                                </div>
                                                <div>
                                                    <h4 class="card-box-hd medium">£100.00</h4>

                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="submit-btn">Proceed To Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
