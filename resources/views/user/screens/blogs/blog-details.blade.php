@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "blog details"
    </script>
    <main>
        <!-- <section class="inner-banner blog">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <div class="banner-overlay"></div>
                        <h1 class="inner-banner-text">Blogs</h1>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="blog-details-sec inner-sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 order-1">
                        <div class="prod-left-box-wrap change mb-30">
                            <h4 class="blog-hd-md">Recent Posts</h4>
                            <div class="d-flex mb-30">
                                <div class="">
                                    <img src="./assets/images/blog-det-left-img-1.png" class="img-fluid blog-side-img me-3"
                                        alt="">
                                </div>
                                <div class="">
                                    <h6 class="blog-hd-sm mb-2">What are the advantages of being a freelancer?</h6>
                                    <h4 class="blog-hd-mini">April 23, 2022</h4>
                                </div>
                            </div>

                            <div class="d-flex mb-30">
                                <div>
                                    <img src="./assets/images/blog-det-left-img-2.png" class="img-fluid blog-side-img me-3"
                                        alt="">
                                </div>
                                <div class="">
                                    <h6 class="blog-hd-sm mb-2">Tips for Answering the Top 5 Freelance Job Interview...</h6>
                                    <h4 class="blog-hd-mini">April 23, 2022</h4>
                                </div>
                            </div>
                            <div class="d-flex mb-30">
                                <div>
                                    <img src="./assets/images/blog-det-left-img-3.png" class="img-fluid blog-side-img me-3"
                                        alt="">
                                </div>
                                <div class="">
                                    <h6 class="blog-hd-sm mb-2">Hire The Best Freelancers From Around The World</h6>
                                    <h4 class="blog-hd-mini">April 23, 2022</h4>
                                </div>
                            </div>
                            <div class="d-flex mb-30">
                                <img src="./assets/images/blog-det-left-img-4.png" class="img-fluid blog-side-img me-3"
                                    alt="">
                                <div class="">
                                    <h6 class="blog-hd-sm mb-2">Can I make a career out of freelancing?</h6>
                                    <h4 class="blog-hd-mini">April 23, 2022</h4>
                                </div>
                            </div>
                        </div>
                        <div class="prod-left-box-wrap mb-30">
                            <h4 class="blog-hd-md">Categories</h4>
                            <ul class="blog-list">
                                <li>Education</li>
                                <li>Freelancer</li>
                                <li>Information</li>
                                <li>Interview</li>
                                <li>Job Seeking</li>
                                <li>Freelancer</li>
                            </ul>
                        </div>
                        <div class="prod-left-box-wrap mm-b-30">
                            <h4 class="blog-hd-md">Tags</h4>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6 ">
                                    <div class="tags">App</div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ">
                                    <div class="tags">Design</div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 mm-t-10 ">
                                    <div class="tags">Digital</div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 mt-10">
                                    <div class="tags">App</div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 mt-10">
                                    <div class="tags">Design</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="cart-title inner-title medium mb-20">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt</h2>
                            </div>
                            <div class="col-md-7">
                                <div class="d-flex justify-content-between align-items-center blog-det-top">
                                    <img src="./assets/images/profile-avatar=img.png" class="profile-avatar-img"
                                        alt="">
                                    <span class="blog-det-text">by Bayley Robertson</span>
                                    <span class="pe-3"><i class="fa-solid fa-message pe-3"></i>0 Comments</span>
                                    <span class="pe-3"><i class="fa-solid fa-tag pe-3"></i>Interview</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="blog-det-img-wrap">
                                    <img src="./assets/images/blog-det-img-1.png" class="img-fluid blog-det-img-1"
                                        alt="">
                                    <div class="blog-det-img-cont">APRIL 23, 2021</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="mt-30">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.
                                </p>
                                <p class="mt-30 mb-30">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.
                                </p>
                                <h2 class="blog-det-text-md mb-20">Lorem ipsum dolor sit amet.</h2>
                                <p class="mb-30">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                    pain was born and I will give you a complete account of the system, and expound the
                                    actual teachings of the great explorer of the truth, the master-builder of human
                                    happiness. annoying consequences, or one who avoids a pain that produces .
                                </p>
                            </div>
                            <div class="col-md-6">
                                <img src="./assets/images/blog-det-img-2.png" class="img-fluid mr-b-30" alt="">
                            </div>
                            <div class="col-md-6">
                                <img src="./assets/images/blog-det-img-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-12">
                                <p class="mb-40 mt-30">
                                    Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                                    because it is pain, but because occasionally circumstances occur in which toil and pain
                                    can procure him some great pleasure. To take a trivial example, which of us ever
                                    undertakes laborious physical exercise, except to obtain some advantage from it? But who
                                    has any right to find fault with a man who chooses to enjoy a pleasure that has no
                                    annoying consequences, or one who avoids a pain that produces no resultant pleasure
                                </p>
                            </div>

                        </div>
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 col-6">
                                <div class="d-flex blog-det-tags">
                                    <div>
                                        <div class="tags">Freelance</div>
                                    </div>
                                    <div>
                                        <div class="tags blog-tags">App</div>
                                    </div>
                                    <div>
                                        <div class="tags">Job</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="d-flex justify-content-between blog-det-s-links">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-50">
                                    <button class="blog-det-btn submit-btn">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-det-sec-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2 class="cart-title inner-title medium mb-40">Recent Posts</h2>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <img src="./assets/images/blog-det-img-4.png" class="img-fluid blog-center-img" alt="">
                        <div class="blog-box-wrap-content">
                            <div class="blog-box-inner-pad">
                                <h6 class="blog-b-sm">Dummy Text Here</h6>
                                <h5 class="blog-b-md">Who Else Wants To Be Successful With Business</h5>
                                <span><i class="fa-regular fa-calendar"></i>April 18, 2021</span>
                            </div>
                            <div class="blog-border-bottom"></div>
                            <div class="blog-box-inner-pad d-flex justify-content-end">
                                <span class="pe-3"><i class="fa-solid fa-comment"></i>3 Comments</span>
                                <span><i class="fa-sharp fa-solid fa-eye"></i>1072 Views</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <img src="./assets/images/blog-det-img-5.png" class="img-fluid blog-center-img" alt="">
                        <div class="blog-box-wrap-content">
                            <div class="blog-box-inner-pad">
                                <h6 class="blog-b-sm">Dummy Text Here</h6>
                                <h5 class="blog-b-md">Who Else Wants To Be Successful With Business</h5>
                                <span><i class="fa-regular fa-calendar"></i>April 18, 2021</span>
                            </div>
                            <div class="blog-border-bottom"></div>
                            <div class="blog-box-inner-pad d-flex justify-content-end">
                                <span class="pe-3"><i class="fa-solid fa-comment"></i>3 Comments</span>
                                <span><i class="fa-sharp fa-solid fa-eye"></i>1072 Views</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 mr-t-30">
                        <img src="./assets/images/blog-det-img-6.png" class="img-fluid blog-center-img" alt="">
                        <div class="blog-box-wrap-content">
                            <div class="blog-box-inner-pad">
                                <h6 class="blog-b-sm">Dummy Text Here</h6>
                                <h5 class="blog-b-md">Who Else Wants To Be Successful With Business</h5>
                                <span><i class="fa-regular fa-calendar"></i>April 18, 2021</span>
                            </div>
                            <div class="blog-border-bottom"></div>
                            <div class="blog-box-inner-pad d-flex justify-content-end">
                                <span class="pe-3"><i class="fa-solid fa-comment"></i>3 Comments</span>
                                <span><i class="fa-sharp fa-solid fa-eye"></i>1072 Views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
