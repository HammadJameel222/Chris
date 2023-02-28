@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Products details"
    </script>
    <main>
        <section class="prod-det-sec inner-sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-12 prod-det-let-img-area  mm-b-30">
                        <div class="prod-det-let-img-wrap mb-20 thumbnail">
                            <img src="{{ asset('assets/images/prod-sm-image.png') }}" class="img-fluid prod-det-let-img"
                                alt="">
                        </div>
                        <div class="prod-det-let-img-wrap mb-20 thumbnail">
                            <img src="{{ asset('assets/images/prod-sm-image.png') }}" class="img-fluid prod-det-let-img"
                                alt="">
                        </div>
                        <div class="prod-det-let-img-wrap thumbnail">
                            <img src="{{ asset('assets/images/prod-sm-image.png') }}" class="img-fluid prod-det-let-img"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-12 prod-det-center-img">
                        <figure class="zoom" onmousemove="zoom(event)"
                            style="background-image: url('assets/images/prod-lg-image.png') ; background-repeat: no-repeat; background-size: cover;
                                    background-image: url('assets/images/prod-sm-image.png')">
                            <img src="{{ asset('assets/images/prod-lg-image.png') }}" id="grote_image" />
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mr-t-30">
                        <h3 class="prod-det-text-lg mb-13">{{ $product->name }}</h3>
                        <div class="d-flex align-items-center  ratings mb-10">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                {{-- <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i> --}}
                            </div>
                            {{-- @dd($product->getRating()) --}}
                            <div>
                                <h5 class="prod-det-sm para-sm">{{ $product->getRating() }} RATINGS &
                                    {{ $product->getReviewCount() }} REVIEWS</h5>
                            </div>
                        </div>
                        <h2 class="prod-det-text-md mb-30">{{ $product->price }}
                            <span>{{ $product->discount->value }}</span>
                        </h2>
                        <form action="/cart/add/{{ $product->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-between align-items-center mb-30">
                                <div class="col-md-6 col-6">
                                    @foreach ($product->variants->groupBy('attribute_id') as $key => $variants_group)
                                        @if ($variants_group[0]->attribute->name == 'Color')
                                            <h4 class="prod-det-hd-sm text-16 mb-13">Available
                                                {{ $variants_group[0]->attribute->name }}
                                            </h4>
                                            @foreach ($variants_group as $variantKey => $variant)
                                                <div>
                                                    <label for="variant-{{ $key }}-{{ $variantKey }}"
                                                        class="select-s-1">{{ $variant->name }}</label>
                                                    <div class="d-none">
                                                        <input type="checkbox" value="{{ $variant->id }}"
                                                            name="{{ \Str::plural($variants_group[0]->attribute->name, 2) }}[]"
                                                            id="variant-{{ $key }}-{{ $variantKey }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            @foreach ($product->variants->groupBy('attribute_id') as $key => $variants_group)
                                @if ($variants_group[0]->attribute->name == 'Size')
                                    <h5 class="prod-det-hd-sm text-16 mb-13">Select
                                        {{ $variants_group[0]->attribute->name }}
                                    </h5>
                                    <div class="d-flex mb-40">
                                        @foreach ($variants_group as $variantKey => $variant)
                                            <div>
                                                <label for="variant-{{ $key }}-{{ $variantKey }}"
                                                    class="select-s-1">{{ $variant->name }}</label>
                                                <div class="d-none">
                                                    <input type="checkbox" value="{{ $variant->id }}"
                                                        name="{{ \Str::plural($variants_group[0]->attribute->name, 2) }}[]"
                                                        id="variant-{{ $key }}-{{ $variantKey }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                            {{-- @dd($variant->name ) --}}

                            <div class="col-md-5 col-6" style="padding: 5px">
                                <h5 class="prod-det-hd-sm text-16 mb-13">Quantity</h5>
                                <input type="number" name="quantity" id="quantity" placeholder="add Quantity"
                                    class="form-control" style="font-size: 18px"><br>
                                @error('quantity')
                                    <span class="text-danger" style="font-family: Arial, Helvetica, sans-serif;font-size:15px">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">

                            <input type="submit" class="submit-btn add-cart" value="Add To Cart" />
                        </form>
                    </div>
                    <div class="col-md-12">
                        <h3 class="prod-det-text-lg medium mt-60 mb-10">Product Specification</h3>
                        <p class="prod-para mb-20">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="prod-det-sec-2 about-inner-sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-5">
                        {{-- @dd($product->canRate()) --}}
                        @if ($product->canRate())
                            {{-- @dd($product->ratings[0]->user_id == 0) --}}
                            <form action="/rating/store/{{ $product->id }}" method="post"
                                enctype="multipart/   form-data">
                                @csrf
                                <input type="hidden" value="{{ $user[0]->id }}" name="user_id">
                                <h3 class="prod-det-text-lg medium mb-20"> {{ $product->getReviewCount() }} Reviews</h3>
                                <h6 class="prod-text mb-10">{{ $product->getRating() }} STAR</h6>
                                {{-- @dd($product->getRating()) --}}
                                <h5 class="prod-det-sm para-sm light mb-20">{{ $product->getRating() }} RATINGS &amp;
                                    {{ $product->getReviewCount() }} REVIEWS</h5>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="rating" checked
                                                            id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="rating"
                                                            id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="rating"
                                                            id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="rating"
                                                            id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="rating"
                                                            id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                                @error('rating')
                                                    <span class="text-danger"
                                                        style="font-family: Arial, Helvetica, sans-serif;font-size:15px">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <h3 for="Review"> Give Your Review</h3>
                                            <input class="form-control" type="text" name="review">

                                            <div class="modal-footer">
                                                <button type="button" class="review-btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                {{-- <input type="submit" class="review-btn" value="Send Review"> --}}
                                                <input type="submit" class="review-btn" value="Send Review" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <hr>
                            <button type="button" class="review-btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Write Your Own Review
                            </button>
                        @endif
                        <hr>
                        <a href="/rating/index/{{ $product->id }}" class="review-btn">
                            View Reviews
                        </a>

                    </div>
                    <div class="col-lg-4 col-md-4 col-7">
                        <h3 class="prod-det-text-lg medium light mm-t-10">MORE FROM SELLER</h3>
                    </div>
                    <div class="col-lg-4 col-xl-5 col-md-5 col-12">
                        <div class="progress-area mb-15 mt-60">
                            <div class=" d-flex align-items-center pro-m">
                                <div>
                                    <label class="progress-lable" for="file">1 STAR</label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                        style="width: 40%" aria-valuenow="25" aria-valuemin="" aria-valuemax="100">
                                        <span>25%</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="progress-lable" for="file">10%</label>
                                </div>
                            </div>
                        </div>
                        <div class="progress-area mb-15">
                            <div class=" d-flex align-items-center  pro-m">
                                <div>
                                    <label class="progress-lable" for="file">2 STAR</label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                        style="width: 50%" aria-valuenow="25" aria-valuemin="" aria-valuemax="100">
                                        <span>25%</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="progress-lable" for="file">20%</label>
                                </div>
                            </div>
                        </div>
                        <div class="progress-area mb-15">
                            <div class=" d-flex align-items-center  pro-m">
                                <div>
                                    <label class="progress-lable" for="file">3 STAR</label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                        style="width: 60%" aria-valuenow="25" aria-valuemin="" aria-valuemax="100">
                                        <span>25%</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="progress-lable" for="file">10%</label>
                                </div>
                            </div>
                        </div>
                        <div class="progress-area mb-15">
                            <div class=" d-flex align-items-center  pro-m">
                                <div>
                                    <label class="progress-lable" for="file">4 STAR</label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                        style="width: 70%" aria-valuenow="25" aria-valuemin="" aria-valuemax="100">
                                        <span>25%</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="progress-lable" for="file">50%</label>
                                </div>
                            </div>
                        </div>
                        <div class="progress-area mb-15">
                            <div class=" d-flex align-items-center  pro-m">
                                <div>
                                    <label class="progress-lable" for="file">1 STAR</label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                        style="width: 40%" aria-valuenow="25" aria-valuemin="" aria-valuemax="100">
                                        <span>25%</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="progress-lable" for="file">10%</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!---->
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="testimonials-product">
                            <div class="test-pad">
                                <div class="prod-det-wrap">
                                    <div class="d-flex align-items-center  ratings mb-10">
                                        <div>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="mb-10">Lorum Ipsum Dummy</h4>
                                    <p class="para-md mb-40">
                                        Contrary to popular belief, lorem ipsum is not simply random text
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="{{ asset('assets/images/client-say-img-1.png') }}"
                                                class="prod-det-img" alt="">
                                        </div>
                                        <div>
                                            <h6 class="text-mini mb-2">Ben Döring</h6>
                                            <p class="para">Oct 27 - 8 Minutes read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="test-pad">
                                <div class="prod-det-wrap">
                                    <div class="d-flex align-items-center  ratings mb-10">
                                        <div>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="mb-10">Lorum Ipsum Dummy</h4>
                                    <p class="para-md mb-40">
                                        Contrary to popular belief, lorem ipsum is not simply random text
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="{{ asset('assets/images/client-say-img-1.png') }}"
                                                class="prod-det-img" alt="">
                                        </div>
                                        <div>
                                            <h6 class="text-mini mb-2">Ben Döring</h6>
                                            <p class="para">Oct 27 - 8 Minutes read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="test-pad">
                                <div class="prod-det-wrap">
                                    <div class="d-flex align-items-center  ratings mb-10">
                                        <div>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="mb-10">Lorum Ipsum Dummy</h4>
                                    <p class="para-md mb-40">
                                        Contrary to popular belief, lorem ipsum is not simply random text
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="{{ asset('assets/images/client-say-img-1.png') }}"
                                                class="prod-det-img" alt="">
                                        </div>
                                        <div>
                                            <h6 class="text-mini mb-2">Ben Döring</h6>
                                            <p class="para">Oct 27 - 8 Minutes read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    {{-- <div class="col-md-12">
                        <div class="d-flex justify-content-center mt-40">
                            <button type="submit" class="submit-btn">Add Review</button>
                        </div>
                    </div> --}}
                </div>
        </section>
        <section class="prod-det-sec-3 about-inner-sec-pad">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <h3 class="prod-det-text-lg medium">Recommended Products</h3>
                        <p class="para-sm mb-40">We support small producers by selling handcrafted, sustainable products.
                        </p>
                    </div>
                </div>
                <div class="height-100">
                    {{-- @dd($product) --}}
                    <div class="row justify-content-center">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-6 col-12 mm-b-30 mr-b-30 ">
                                <div class="bg-box-wrap text-center height-100">
                                    <div class="content-overlay"></div>
                                    <img src="{{ asset('assets/images/bestseller-img-1.png') }}"
                                        class="bestseller-img-1 img-fluid" alt="">
                                    <div class="inner-box-pad">
                                        <h4 class="text-16 text-w mb-2 overlay-text">{{ $product->description }}</h4>
                                        <div class="d-flex justify-content-center ratings mb-13 overlay-text">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <h6 class="cate-text text-w overlay-text">
                                            {{ $product->price }}</h6>
                                    </div>
                                    <div class="overlay-btns-wrap">
                                        <div class="mb-70">
                                            <a href="/product/detail/{{ $product->id }}" class="inner-btn ">VIEW
                                                DETAILS</a>
                                        </div>
                                        {{-- <div>
                                            <a href="" class="inner-btn-2">ADD TO CART</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        let colorButtons = document.querySelectorAll('.select-s-1')
        colorButtons.forEach(el => {
            el.addEventListener('click', function(e) {
                if (!e.target.classList.contains('ac')) {
                    e.target.classList.add('ac')
                } else {
                    e.target.classList.remove('ac')
                }
            })
        });
    </script>
@endsection
