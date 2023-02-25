@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Home"
    </script>
    <main>
        <section class="banner sec-pad">
            <div class="container-fluid p-0">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <div class="">
                            <div class="bg-video-wrap">
                                <video src="{{ asset('assets/images/Chris-Aire-Project-(Video).mp4') }}" loop muted autoplay>
                                </video>
                                <h1 class="banner-lg-text">CHRIS AIRE <span>&#174;</span></h1>
                                <h2 class="banner-md-text">Fine Jewelry & Timepieces</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="slider-wrapper">
            <video src="./assets/images/Chris-Aire-Project-(Video).mp4" loop muted autoplay>
            </video>
            <div class="banner-slider">
                <div class="items item-1">
                    <h1 class="banner-lg-text">Versatile & Exquisite Fine Jewelry </h1>
                    <h2 class="banner-md-text">Finely crafted luxury jewelry and highly coveted timepieces are ideal for
                        commemorating life's most memorable events.</h2>
                </div>
                <div class="items item-2">
                    <h1 class="banner-lg-text">Preserve Fleeting Moments & Lifelong Treasures</h1>
                    <h2 class="banner-md-text">Finely crafted luxury jewelry and highly coveted timepieces are ideal for
                        commemorating life's most memorable events.</h2>
                </div>
                <div class="items item-3">
                    <h1 class="banner-lg-text">Blings, Jewelry, Watches, & Beyond</h1>
                    <h2 class="banner-md-text">Finely crafted luxury jewelry and highly coveted timepieces are ideal for
                        commemorating life's most memorable events.</h2>
                </div>
                <div class="items item-4">
                    <h1 class="banner-lg-text">Yours to Wear, Yours to Cherish </h1>
                    <h2 class="banner-md-text">Finely crafted luxury jewelry and highly coveted timepieces are ideal for
                        commemorating life's most memorable events.</h2>
                </div>
                <div class="items item-5">
                    <h1 class="banner-lg-text">Bespoke Designs to Reflect Your Vibe</h1>
                    <h2 class="banner-md-text">Finely crafted luxury jewelry and highly coveted timepieces are ideal for
                        commemorating life's most memorable events.</h2>
                </div>
            </div>
        </section> --}}
        <section class="our-categories sec-pad sec-pad-top">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-6" data-aos="flip-left">
                        <h2 class="sec-title mb-22">Our Categories</h2>
                        <p class="para para-width">
                            Our Collection of men's watches is unmatched in beauty and capability.
                            Chris Aire's innovative and dramatic watches have been coveted for over 30 years.
                        </p>
                    </div>
                </div>
                <div class="height-100">
                    <div class="row justify-content-center mt-40">
                        <div class="col-lg-6 col-md-6 col-12 mm-b-30">
                            <div class="cate-box-wrap height-100 h-box-cont" data-aos="fade-right" data-aos-duration="1000">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img src="{{ asset('assets/images/cat-img-1.png') }}"
                                            class="cate-box-img-1 img-fluid " alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <h6 class="text-sm text-upper">Custom</h6>
                                        <h2 class="sec-title">Watches</h2>
                                        <h3 class="text-md ">For Men & Women</h3>
                                        <div class="mt-30">
                                            <a href="./mens.php" class="primary-btn cate-btn text-upper ">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="cate-box-wrap height-100 h-box-cont" data-aos="fade-left" data-aos-duration="1000">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img src="{{ asset('assets/images/cat-img-2.png') }}"
                                            class="cate-box-img-1 img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <h6 class="text-sm text-upper">Custom</h6>
                                        <h2 class="sec-title">Jewlery</h2>
                                        <h3 class="text-md ">For Men & Women</h3>
                                        <div class="mt-30">
                                            <a href="./womens.php" class="primary-btn cate-btn text-upper ">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="back-img-sec">
            <div class="container ">
                <div class="row justify-content-center text-center align-items-center ">
                    <div class="col-lg-7 col-md-7 col-12" data-aos="flip-up" data-aos-duration="1000">
                        <div class="overlay-box-border">
                            <div class="overlay-box-wrap">
                                <h2 class="sec-title-bold mb-20 text-white">Celebrities favorite Watch & Jewelry Brand</h2>
                                <h5 class="pdf-sec-text mb-30">Check out our Celebrity Look Book</h5>
                                <div class="d-flex justify-content-center">
                                    <a class="secondary-btn pdf-btn" href="./pdf/content.pdf" download="file.pdf">DOWNLOAD
                                        PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="swiss-essence sec-pad">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up-right" data-aos-duration="1000">
                        <h5 class="text-mini text-upper">Watches for men & women</h5>
                        <h2 class="sec-title mb-22">Swiss Essence</h2>
                        <p class="para mb-40">
                            Whether you’re about to invest in your first serious watch or looking to add
                            to an already impressive collection, the right luxury watch acts as a milestone in
                            life: a marker of time well spent. If you’re struggling to choose the perfect
                            timepiece then allow us to help. Here are the classics we suggest investing in.
                        </p>
                        <a href="./mens.php" class="secondary-btn text-upper">Shop Watches</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mm-t-30" data-aos="fade-up-left" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/blog-img-1.png') }}" class="swiss-sec-img img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="designed-for-those sec-pad ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 mm-b-30" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/designed-img-1.png') }}" class="designed-img img-fluid"
                            alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                        <h5 class="text-mini">Jewelry</h5>
                        <h2 class="sec-title mb-22">Designed for Those Who Evade Limits</h2>
                        <p class="para mb-40">
                            Whether you’re about to invest in your first serious watch or looking to add
                            to an already impressive collection, the right luxury watch acts as a milestone in
                            life: a marker of time well spent. If you’re struggling to choose the perfect
                            timepiece then allow us to help. Here are the classics we suggest investing in.
                        </p>
                        <a href="./custom-jewelry.php" class="secondary-btn shop-jew text-upper">Shop Jewelry</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="Our-Bestseller sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-12 col-12" data-aos="flip-left" data-aos-duration="1000">
                                <h5 class="text-mini text-upper ">Watches & Jewelry</h5>
                                <h2 class="sec-title mb-50">Our Bestseller</h2>
                            </div>
                        </div>
                        <div class="height-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6 col-12 mm-b-30 mr-b-30" data-aos="flip-left"
                                    data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                    <div class="bg-box-wrap text-center height-100">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('assets/images/bestseller-img-1.png') }}"
                                            class="bestseller-img-1 img-fluid" alt="">
                                        <div class="inner-box-pad">
                                            <h4 class="text-16 text-w mb-2 overlay-text">Aire Parlay Swiss Made Chronograph
                                                Over-Sized Men Watch</h4>
                                            <div class="d-flex justify-content-center ratings mb-13 overlay-text">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <h6 class="cate-text text-w overlay-text">$ 3,650.00</h6>
                                        </div>
                                        <div class="overlay-btns-wrap">
                                            <div class="mb-70">
                                                <a href="" class="inner-btn ">VIEW DETAILS</a>
                                            </div>
                                            <div>
                                                <a href="" class="inner-btn-2">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mm-b-30 mr-b-30" data-aos="flip-left"
                                    data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                    <div class="bg-box-wrap text-center height-100">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('assets/images/bestseller-img-2.png') }}"
                                            class="bestseller-img-1 img-fluid" alt="">
                                        <div class="inner-box-pad">
                                            <h4 class="text-16 text-w mb-2 overlay-text">Crown Jewel Earrings -18 Karat
                                                Amber Hue Gold Diamond And White Topaz Earrings</h4>
                                            <div class="d-flex justify-content-center ratings mb-13 overlay-text">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <h6 class="cate-text text-w overlay-text">$ 19,900.00</h6>
                                        </div>
                                        <div class="overlay-btns-wrap">
                                            <div class="mb-70">
                                                <a href="" class="inner-btn ">VIEW DETAILS</a>
                                            </div>
                                            <div>
                                                <a href="" class="inner-btn-2">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mm-b-30 height-100" data-aos="flip-left"
                                    data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                    <div class="bg-box-wrap text-center ">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('assets/images/bestseller-img-3.png') }}"
                                            class="bestseller-img-1 img-fluid" alt="">
                                        <div class="inner-box-pad">
                                            <h4 class="text-16 text-w mb-2 overlay-text">Aire Conqueror Swiss Made
                                                Chronometric Revolutionary Luxury Limited Edition Watch</h4>
                                            <div class="d-flex justify-content-center ratings mb-13 overlay-text">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <h6 class="cate-text text-w overlay-text">$ 15,000.00</h6>
                                        </div>
                                        <div class="overlay-btns-wrap">
                                            <div class="mb-70">
                                                <a href="" class="inner-btn ">VIEW DETAILS</a>
                                            </div>
                                            <div>
                                                <a href="" class="inner-btn-2">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mm-b-30 mr-b-30 height-100" data-aos="flip-left"
                                    data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                    <div class="bg-box-wrap text-center">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('assets/images/bestseller-img-4.png') }}"
                                            class="bestseller-img-1 img-fluid" alt="">
                                        <div class="inner-box-pad">
                                            <h4 class="text-16 text-w mb-2 overlay-text">Aire Parlay Swiss Made Chronograph
                                                Over-Sized Men Watch</h4>
                                            <div class="d-flex justify-content-center ratings mb-13 overlay-text">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <h6 class="cate-text text-w overlay-text">$ 3,650.00</h6>
                                        </div>
                                        <div class="overlay-btns-wrap">
                                            <div class="mb-70">
                                                <a href="" class="inner-btn ">VIEW DETAILS</a>
                                            </div>
                                            <div>
                                                <a href="" class="inner-btn-2">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                    data-aos-duration="1000">
                                    <div class="mt-40 d-flex justify-content-center">
                                        <a href="./mens.php" class="secondary-btn show-btn">SHOW ALL</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials sec-pad">
            <div class="testimonial-outer-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-3 col-md-12 col-12" data-aos="fade-right" data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <h2 class="sec-title mb-13">What Our <br> Clients Say</h2>
                            <p class="para-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                        <div class="col-lg-9 col-md-12 col-12">
                            <div class="testimonials-slider">
                                <div class="tes-pad">
                                    <div class="testimonials-wrap" data-aos="fade-down-right" data-aos-duration="1000">
                                        <img src="{{ asset('assets/images/client-say-img-1.png') }}"
                                            class="testimonial-img" alt="">
                                        <div class="testimonials-content">
                                            <h3 class="inner-sec-text mb-40">Zabrina John</h3>
                                            <h3 class="inner-sec-text mb-13">I am happy with my shopping</h3>
                                            <p class="para mb-20">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s,when an unknown printer took a galley of type and scrambled it to make
                                                a type specimen book.
                                            </p>
                                            <div class="d-flex justify-content-end ratings ">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tes-pad">
                                    <div class="testimonials-wrap" data-aos="fade-down-right" data-aos-duration="1000">
                                        <img src="{{ asset('assets/images/client-say-img-2.png') }}"
                                            class="testimonial-img" alt="">
                                        <div class="testimonials-content">
                                            <h3 class="inner-sec-text mb-40">Ceris Joseph</h3>
                                            <h3 class="inner-sec-text mb-13">I am happy with my shopping</h3>
                                            <p class="para mb-20">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s,when an unknown printer took a galley of type and scrambled it to make
                                                a type specimen book.
                                            </p>
                                            <div class="d-flex justify-content-end ratings ">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tes-pad">
                                    <div class="testimonials-wrap" data-aos="fade-down-right" data-aos-duration="1000">
                                        <img src="{{ asset('assets/images/client-say-img-1.png') }}"
                                            class="testimonial-img" alt="">
                                        <div class="testimonials-content">
                                            <h3 class="inner-sec-text mb-40">Zabrina John</h3>
                                            <h3 class="inner-sec-text mb-13">I am happy with my shopping</h3>
                                            <p class="para mb-20">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s,when an unknown printer took a galley of type and scrambled it to make
                                                a type specimen book.
                                            </p>
                                            <div class="d-flex justify-content-end ratings ">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
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
