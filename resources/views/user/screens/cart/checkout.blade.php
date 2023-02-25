@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Checkout"
    </script>
    <script type="text/javascript">
        document.title = "Checkout"
    </script>
    <main>
        <section class="checkout inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <h2 class="cart-title inner-title mb-60">Check Out</h2>
                    </div>
                </div>
                <div class="form-wrap1">
                    <form action="">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9">
                                    <ul class="list-view d-flex justify-content-center mb-60">
                                        <li class="">
                                            <div class="addres-area active form-btn mb-20">
                                                <i class="fa-solid fa-address-card"></i>
                                            </div>
                                            <h4 class="address-hd2">Address</h4>
                                        </li>
                                        <div class="separator"></div>
                                        <li>
                                            <div class="addres-area form-btn mb-20">
                                                <i class="fa-regular fa-credit-card"></i>
                                            </div>
                                            <h4 class="address-hd2">Payment</h4>
                                        </li>
                                        <div class="separator"></div>
                                        <li>
                                            <div class="addres-area form-btn mb-20">
                                                <!-- <i class="fa-solid fa-circle-check"></i> -->
                                                <i class="fa-solid fa-check check-icon"></i>
                                            </div>
                                            <h4 class="address-hd2">Confirm</h4>
                                        </li>

                                    </ul>
                                    <div class="">
                                        <div class="card card-wrap">
                                            <div id="form-container" class="multi-steps-form faded">
                                                <div class="step fade active show step-form" id="step1">
                                                    <!--  -->
                                                    <div class='row'>
                                                        <div class='col-md-6'>
                                                            <div class='form-group'>
                                                                <label class='login-text-md'> Address: </label>
                                                                <input class='field' placeholder='Address' />
                                                            </div>
                                                        </div>
                                                        <div class='col-md-6'>
                                                            <div class='form-group'>
                                                                <label class='login-text-md'> State: </label>
                                                                <input class='field' placeholder='State' />
                                                            </div>
                                                        </div>
                                                        <div class='col-md-6'>
                                                            <div class='form-group'>
                                                                <label class='login-text-md'> Zip: </label>
                                                                <input class='field' placeholder='Zip' />
                                                            </div>
                                                        </div>
                                                        <div class='col-md-6'>
                                                            <div class='form-group'>
                                                                <label class='login-text-md'> Country: </label>
                                                                <input class='field' placeholder='Country' />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="mt-50">
                                                        <!--<button class="secondary-btn step-link me-3" type="button" data-bs-target="#step1">Back</button>-->
                                                        <button class="primary-btn step-link" type="button" data-bs-target="#step2">Continue</button>
                                                    </div>
                                                </div>
                                                <div class="step fade" id="step2">
                                                    <!--  -->
                                                    <div class="container preload">
                                                        <div class="creditcard">
                                                            <div class="front">
                                                                <div id="ccsingle"></div>
                                                                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                                                    <g id="Front">
                                                                        <g id="CardBackground">
                                                                            <g id="Page-1_1_">
                                                                                <g id="amex_1_">
                                                                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                                                        C0,17.9,17.9,0,40,0z" />
                                                                                </g>
                                                                            </g>
                                                                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                                                        </g>
                                                                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                                                                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOHN DOE</text>
                                                                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                                                                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                                                                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                                                                        <g>
                                                                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01</text>
                                                                            <text transform="matrix(1 0 0 1 617.4219 433.8095)" class="st2 st5 st9">/</text>
                                                                            <text transform="matrix(1 0 0 1 636.4219 433.8095)" id="svgexpire-year" class="st2 st5 st9">23</text>
                                                                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                                                                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                                                                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9      " />
                                                                        </g>
                                                                        <g id="cchip">
                                                                            <g>
                                                                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                                                                                    c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                                                            </g>
                                                                            <g>
                                                                                <g>
                                                                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                                                                </g>
                                                                                <g>
                                                                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                                                                </g>
                                                                                <g>
                                                                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                                                                        c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                                                                        C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                                                                        c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                                                                        c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                                                                </g>
                                                                                <g>
                                                                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                                                                </g>
                                                                                <g>
                                                                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                                                                </g>
                                                                                <g>
                                                                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                                                                </g>
                                                                                <g>
                                                                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Back">
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="back">
                                                                    <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                                                        <g id="Front">
                                                                            <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                                                                        </g>
                                                                        <g id="Back">
                                                                            <g id="Page-1_2_">
                                                                                <g id="amex_2_">
                                                                                    <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                                                        C0,17.9,17.9,0,40,0z" />
                                                                                </g>
                                                                            </g>
                                                                            <rect y="61.6" class="st2" width="750" height="78" />
                                                                            <g>
                                                                                <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                                                                                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                                                                <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                                                                <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                                                                <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                                                            </g>
                                                                            <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                                                                            <g class="st8">
                                                                                <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                                                                            </g>
                                                                            <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                                                            <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                                                            <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                                                                        </g>
                                                                    </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <form action="./payment-methods.php">
                                                            <div class="row">
                                                                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                                                                    <div class="row mt-5">
                                                                        <div class="col-12">
                                                                            <p id="payment-errors"></p>
                                                                        </div>
                                                                        <div class="field-container  col-12">
                                                                            <div class="form-group">
                                                                                <div class="field-wrap field-wrap2">
                                                                                    <input name="card_name" class='field' id="name" maxlength="20" type="text" placeholder="Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field-container col-12">
                                                                            <div class="form-group">
                                                                                <span id="generatecard">generate random</span>
                                                                                <div class="field-wrap field-wrap2">
                                                                                    <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
                                                                                    <input name="cardnumber" id="cardnumber" class='field' autocomplete='off' inputmode="numeric" placeholder="Card Number" class='form-control card-number' size='20' type='text'>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field-container payment-input-col  col-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <div class="field-wrap field-wrap2">
                                                                                    <input name="card_expiry_month" id="expirationmonth" class='card-expiry-month field' pattern="[0-9]*" inputmode="numeric" placeholder="Expiration MM" size='2' type='text'>
                                                                                    <input type="hidden" class="finalPrice" name="finalPrice">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field-container payment-input-col col-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <div class="field-wrap field-wrap2">
                                                                                    <input name="card_expiry_year" id="expirationyear" class='card-expiry-year field' pattern="[0-9]*" inputmode="numeric" placeholder="Expiration YY" size='2' type='text'>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field-container payment-input-col col-12">
                                                                            <div class="form-group">
                                                                            <div class="field-wrap field-wrap2">
                                                                                <input name="card_security_number" id="securitycode" autocomplete='off' pattern="[0-9]*" inputmode="numeric" placeholder="Security Code" class='card-cvc field' size='4' type='text'>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!--  -->
                                                    <div class="mt-50">
                                                        <button class="secondary-btn step-link me-3" type="button" data-bs-target="#step1">Back</button>
                                                        <button class="primary-btn step-link" type="button" data-bs-target="#step3">Continue</button>
                                                    </div>
                                                </div>

                                                <div class="step fade " id="step3">
                                                    <!--  -->
                                                    <div>
                                                        <h3 class='md-hd'>Order confirm</h3>
                                                        <h2 class='lg-hd'>Thankyou</h2>
                                                    </div>
                                                    <!--  -->
                                                    <!--<div class="mt-50">-->
                                                    <!--    <button class="secondary-btn step-link me-3" type="button" data-bs-target="#step2">Back</button>-->
                                                    <!--    <button class="primary-btn step-link" type="button" data-bs-target="#step1">Continue</button>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button id="jsbtn" class="btn btn-primary" type="button">Go to Step 3 via JS</button> -->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="cart-box-wrap">
                                        <div class="cart-box-top">
                                            <h3>SUMMARY</h3>
                                        </div>
                                        <div class="cart-box-bottom mb-30">
                                            <div class="d-flex justify-content-between align-items-center  mb-40">
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
                                                    <h4 class="card-box-hd">Shipping Rates</h4>
                                                </div>
                                                <div>
                                                    <h4 class="card-box-hd change">£10.00</h4>

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
                                                <button type="submit" class="submit-btn">Place Order</button>
                                            </div>
                                        </div>
                                        <div class="form-check login-check">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label " for="flexCheckDefault">
                                                I Agree To The Terms And Conditions
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('assets/vendor/card.js')}}"></script>
@endsection
