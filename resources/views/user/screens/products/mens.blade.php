@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Mens"
    </script>
    <main>
        <section class="inner-banner mens">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-12">
                        <div class="banner-overlay"></div>
                        <h1 class="inner-banner-text">Men's</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="womens-sec inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-1g 12 col-12">
                        <h2 class="inner-title mb-90">Our Premium Watches</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="prod-left-box-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Jewlery
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6 class="acc-inner-text">Engagement Rings</h6>
                                            <h6 class="acc-inner-text">Wedding Brands</h6>
                                            <h6 class="acc-inner-text">Engagement Sets</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Watches
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6 class="acc-inner-text">Lorem, ipsum.</h6>
                                            <h6 class="acc-inner-text">Lorem, ipsum.</h6>
                                            <h6 class="acc-inner-text">Lorem, ipsum.</h6>
                                            <h6 class="acc-inner-text">Lorem, ipsum.</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Sort By
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6 class="acc-inner-text">Price High To Low</h6>
                                            <h6 class="acc-inner-text">Price Low To High</h6>
                                            <h6 class="acc-inner-text">Popularity</h6>
                                            <h6 class="acc-inner-text">Most Liked</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                            Price Range
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group form-group2">
                                                <span class="multi-range">
                                                    <input type="range" min="01" max="2500" value="01"
                                                        id="lower">
                                                    <input type="range" min="01" max="2500" value="2500"
                                                        id="upper">
                                                </span>
                                                <div
                                                    class="d-flex align-items-center justify-content-between range-price-box">
                                                    <div>
                                                        <span class='lower-op'>01</span>
                                                    </div>
                                                    <div>
                                                        <span class="middle-op"> To</span>
                                                    </div>
                                                    <div>
                                                        <span class='upper-op'>2500</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed mb-0" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Search By Rating
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="d-flex mb-2">
                                                <div class="rating ratings-button">
                                                    <input type="radio" class="" id="star5" name="rating"
                                                        value="1" />
                                                    <label class="star" for="star5">
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <div class="rating ratings-button">
                                                    <input type="radio" class="" id="star4" name="rating"
                                                        value="1" />
                                                    <label class="star" for="star4">
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <div class="rating ratings-button">
                                                    <input type="radio" class="" id="star3" name="rating"
                                                        value="1" />
                                                    <label class="star" for="star3">
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-regular fa-star" title=""
                                                            aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <div class="rating ratings-button">
                                                    <input type="radio" class="" id="star2" name="rating"
                                                        value="1" />
                                                    <label class="star" for="star2">
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-regular fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-regular fa-star" title=""
                                                            aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="rating ratings-button">
                                                    <input type="radio" class="" id="star1" name="rating"
                                                        value="1" />
                                                    <label class="star" for="star1">
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-solid fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-regular fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-regular fa-star" title=""
                                                            aria-hidden="true"></i>
                                                        <i class="fa-regular fa-star" title=""
                                                            aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="search-bar-wrap">
                                        <input type="text" class="input-field" placeholder="Search Here....">
                                        <div class="search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                        <button class="inner-search-btn" type="submit">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row align-items-center list-items-area">
                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="list-items-wrap">
                                    <div class="list-icon ">
                                        <button class="layout-btn"><i class="fa-solid fa-list"></i></button>
                                    </div>
                                    <span class="sort-by">Sort by</span>
                                    <!--  -->
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            From Z-A
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Order 1</a></li>
                                            <li><a class="dropdown-item" href="#">Order 2</a></li>
                                            <li><a class="dropdown-item" href="#">Orders 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-6">
                                <div class="d-flex justify-content-end">
                                    <h6 class="list-text-sm">Showing 1–09 of 50 results</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            @foreach ($products as $product)
                                    <x-product-list image="{{ asset('assets/images/womens-prod-img-1.png') }}"
                                        href="/product/detail/{{ $product->id }}" desc="{{ $product->description }}" addcart=""
                                        price="{{ $product->price }}" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
