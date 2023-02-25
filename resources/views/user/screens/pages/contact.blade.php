@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Contact"
    </script>
    <main>
        <section class="inner-banner contact ">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <div class="banner-overlay"></div>
                        <h1 class="inner-banner-text">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-sec inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 col-12">
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="contact-title">Get In Touch</h3>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="contact-form-area">
                                        <div class="input-wrap">
                                            <input type="text" class="input-field" placeholder="Enter Name">
                                        </div>
                                        <div class="contact-icon-wrap">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="contact-form-area">
                                        <div class="input-wrap">
                                            <input type="email" class="input-field" placeholder="Enter Email">
                                        </div>
                                        <div class="contact-icon-wrap">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="contact-form-area">
                                        <div class="input-wrap">
                                            <input type="text" class="input-field" placeholder="Enter Subject">
                                        </div>
                                        <div class="contact-icon-wrap">
                                            <i class="fa-solid fa-file"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="contact-form-area">
                                        <div class="input-wrap">
                                            <textarea name="" id="" cols="" rows="" class="text-field input-field"
                                                placeholder="Enter Message!"></textarea>
                                        </div>
                                        <div class="contact-icon-wrap">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mr-b-30 mm-b-30">
                                        <button type="submit" class="submit-btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-12">
                        <img src="{{ asset('assets/images/contact-img-1.png')}}" class="contact-img" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
