@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Order logs details"
    </script>
    <main>
        <section class="order-log-det-sec inner-sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="cart-title inner-title text-center mb-60">Order Logs</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="order-log-det-hd mb-30">Order Details</h3>
                            </div>
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow">
                                        <span class="order-log-sm me-3">Status</span>
                                    </div>
                                    <button type="button" class="order-tab-btn">Pending</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <ul class="order-log-det-list">
                            <li>Name</li>
                            <li>Email Address</li>
                            <li>Date</li>
                            <li>Phone Number</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <ul class="order-log-det-list change">
                            <li>Abc</li>
                            <li>abc@xyz.com</li>
                            <li>mm/dd/yyyy</li>
                            <li>+012 345 6789</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <ul class="order-log-det-list change">
                            <li class="mm-t-30">ORDER ID</li>
                            <li>Payment Method</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <ul class="order-log-det-list change">
                            <li class="mm-t-30">Abt 001</li>
                            <li>ads</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-6 col-6">
                        <h3 class="order-log-det-hd mt-70 mb-30">Billing Address</h3>
                        <ul class="order-log-det-list">
                            <li>Abc Street Here</li>
                            <li>City</li>
                            <li>Country</li>
                            <li>State</li>
                            <li>Zipcode</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <h3 class="order-log-det-hd mt-70 mb-30">Shipping Address</h3>
                        <ul class="order-log-det-list">
                            <li>Abc Street Here</li>
                            <li>City</li>
                            <li>Country</li>
                            <li>State</li>
                            <li>Zipcode</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive cart-table">
                            <table class="table mb-70 mt-60">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h3 class="primary-text image-2">IMAGE</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">PRODUCT</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">QUANTITY</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">UNIT PRICE</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">TOTAL PRICE</h3>
                                        </th>
                                        <th scope="col">
                                            <h3 class="primary-text">TAX</h3>
                                        </th>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <th scope="">
                                            <div class="cart-cont">
                                                <div class="d-flex justify-content-between align-items-center gap-15">
                                                    <div class="cross-btn">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </div>
                                                    <div>
                                                        <img src="./assets/images/prod-image-001.png"
                                                            class="img-fluid cart-img" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <h3 class="cart-hd-sm">Abc Product</h3>
                                        </td>
                                        <td>
                                            <div class="counter">
                                                <div class="qty-container">
                                                    <button class="qty-btn-minus btn-light" type="button"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="text" name="qty" value="0" class="input-qty">
                                                    <button class="qty-btn-plus btn-light" type="button"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="cart-hd-sm">£100.00</h5>
                                        </td>
                                        <td>
                                            <h5 class="cart-hd-sm">£100.00</h5>
                                        </td>
                                        <td>
                                            <h5 class="cart-hd-sm">£05.00</h5>
                                        </td>
                                        <td>
                                            <button type="button" class="action-btn"><i
                                                    class="fa-solid fa-rotate-left"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="">
                                            <div class="cart-cont">
                                                <div class="d-flex justify-content-between align-items-center gap-15">
                                                    <div class="cross-btn">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </div>
                                                    <div>
                                                        <img src="./assets/images/prod-image-001.png"
                                                            class="img-fluid cart-img" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <h3 class="cart-hd-sm">Abc Product</h3>
                                        </td>
                                        <td>
                                            <div class="counter">
                                                <div class="qty-container">
                                                    <button class="qty-btn-minus btn-light" type="button"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="text" name="qty" value="0" class="input-qty">
                                                    <button class="qty-btn-plus btn-light" type="button"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="cart-hd-sm">£100.00</h5>
                                        </td>
                                        <td>
                                            <h5 class="cart-hd-sm">£100.00</h5>
                                        </td>
                                        <td>
                                            <h5 class="cart-hd-sm">£05.00</h5>
                                        </td>
                                        <td>
                                            <button type="button" class="action-btn"><i
                                                    class="fa-solid fa-rotate-left"></i></button>
                                        </td>
                                    </tr>
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
                                <div class="col-lg-4 col-6">
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
                                                    <h4 class="card-box-hd change">£400.00</h4>

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
