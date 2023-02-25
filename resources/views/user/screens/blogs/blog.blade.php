@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Blog"
    </script>
    <main>
        <section class="inner-banner blog">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <div class="banner-overlay"></div>
                        <h1 class="inner-banner-text">Blogs</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-sec inner-sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="prod-left-box-wrap mb-30">
                            <h4 class="blog-hd-md">Recent Posts</h4>
                            <div class="d-flex mb-30">
                                <div class="">
                                    <img src="./assets/images/blog-side-img-1.png" class="img-fluid blog-side-img me-3"
                                        alt="">
                                </div>
                                <div class="">
                                    <h6 class="blog-hd-sm mb-2">What are the advantages of being a freelancer?</h6>
                                    <h4 class="blog-hd-mini">April 23, 2022</h4>
                                </div>
                            </div>

                            <div class="d-flex mb-30">
                                <div>
                                    <img src="./assets/images/blog-side-img-2.png" class="img-fluid blog-side-img me-3"
                                        alt="">
                                </div>
                                <div class="">
                                    <h6 class="blog-hd-sm mb-2">Tips for Answering the Top 5 Freelance Job Interview...</h6>
                                    <h4 class="blog-hd-mini">April 23, 2022</h4>
                                </div>
                            </div>
                            <div class="d-flex mb-30">
                                <div>
                                    <img src="./assets/images/blog-side-img-3.png" class="img-fluid blog-side-img me-3"
                                        alt="">
                                </div>
                                <div class="">
                                    <h6 class="blog-hd-sm mb-2">Hire The Best Freelancers From Around The World</h6>
                                    <h4 class="blog-hd-mini">April 23, 2022</h4>
                                </div>
                            </div>
                            <div class="d-flex mb-30">
                                <img src="./assets/images/blog-side-img-4.png" class="img-fluid blog-side-img me-3"
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
                                <li>Jewelry</li>
                                <li>Watches</li>
                                <li>Men's</li>
                                <li>Women's</li>
                                <li>Custom Jewelry</li>
                                <li>Engagement</li>
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
                            <div class="col-lg-6 col-md-6 col-6 mb-30">
                                <img src="./assets/images/blog-pg-img-1.png" class="img-fluid blog-center-img"
                                    alt="">
                                <div class="blog-box-wrap-content">
                                    <div class="blog-box-inner-pad">
                                        <h6 class="blog-b-sm">PSD Web Template</h6>
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
                            <div class="col-lg-6 col-md-6 col-6 mb-30">
                                <img src="./assets/images/blog-pg-img-2.png" class="img-fluid blog-center-img"
                                    alt="">
                                <div class="blog-box-wrap-content">
                                    <div class="blog-box-inner-pad">
                                        <h6 class="blog-b-sm">PSD Web Template</h6>
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
                            <div class="col-lg-6 col-md-6 col-6 mb-30">
                                <img src="./assets/images/blog-pg-img-3.png" class="img-fluid blog-center-img"
                                    alt="">
                                <div class="blog-box-wrap-content">
                                    <div class="blog-box-inner-pad">
                                        <h6 class="blog-b-sm">PSD Web Template</h6>
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
                            <div class="col-lg-6 col-md-6 col-6 mb-30">
                                <img src="./assets/images/blog-pg-img-4.png" class="img-fluid blog-center-img"
                                    alt="">
                                <div class="blog-box-wrap-content">
                                    <div class="blog-box-inner-pad">
                                        <h6 class="blog-b-sm">PSD Web Template</h6>
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
                            <div class="col-lg-6 col-md-6 col-6 mb-30">
                                <img src="./assets/images/blog-pg-img-5.png" class="img-fluid blog-center-img"
                                    alt="">
                                <div class="blog-box-wrap-content">
                                    <div class="blog-box-inner-pad">
                                        <h6 class="blog-b-sm">PSD Web Template</h6>
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
                            <div class="col-lg-6 col-md-6 col-6 mb-30">
                                <img src="./assets/images/blog-pg-img-6.png" class="img-fluid blog-center-img"
                                    alt="">
                                <div class="blog-box-wrap-content">
                                    <div class="blog-box-inner-pad">
                                        <h6 class="blog-b-sm">PSD Web Template</h6>
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
                            <div class="col-lg-4 col-md-6 col-12">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination mt-0">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link page-link1 last-c" href="#"><i
                                                    class="fa-solid fa-chevron-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
