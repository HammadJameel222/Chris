@props([
    'image' => $image ?? '',
    'desc' => $desc ?? '',
    'href' => $href ?? '',
    'addcart' => $addcart ?? '',
    'price' => $price ?? '',
])

<div class="col-lg-4 col-md-6 col-6 mb-30">
    <div class="bg-box-wrap text-center height-100">
        <div class="content-overlay"></div>
        <img src="{{ $image }}" class="prods-imgs img-fluid"
            alt="">
        <div class="inner-box-pad">
            <h4 class="text-16 text-w mb-2">{{$desc}}</h4>
            <div class="d-flex justify-content-center ratings mb-13">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h6 class="cate-text text-w">{{$price}}</h6>
        </div>
        <div class="overlay-btns-wrap inner-pages-btn-wrap">
            <div class="mb-50">
                <a href="{{ $href }}" class="inner-btn ">VIEW DETAILS</a>
            </div>
            <div>
                <a href=" {{ $addcart }} " class="inner-btn-2">ADD TO CART</a>
            </div>
        </div>
    </div>
</div>
