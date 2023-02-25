@props([])

<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-12 prod-det-let-img-area  mm-b-30">
            <div class="prod-det-let-img-wrap mb-20 thumbnail">
                <img src="{{ $image }}" class="img-fluid prod-det-let-img" alt="">
            </div>
            <div class="prod-det-let-img-wrap mb-20 thumbnail">
                <img src="{{ $image }}" class="img-fluid prod-det-let-img" alt="">
            </div>
            <div class="prod-det-let-img-wrap thumbnail">
                <img src="{{ $image }}" class="img-fluid prod-det-let-img" alt="">
            </div>
        </div>
        <div class="col-lg-5 col-md-8 col-12 prod-det-center-img">
            <figure class="zoom" onmousemove="zoom(event)"
                style="background-image: url('assets/images/prod-lg-image.png')  background-repeat: no-repeat; background-size: cover;
                        background-image: url('assets/images/prod-lg-image.png');">
                <img src="{{ $image }}" id="grote_image" />
            </figure>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mr-t-30">
            <h3 class="prod-det-text-lg mb-13">{{ $product->name }}</h3>
            <div class="d-flex align-items-center  ratings mb-10">
                <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div>
                    <h5 class="prod-det-sm para-sm">4.5 RATINGS & 2 REVIEWS</h5>
                </div>
            </div>
            <h2 class="prod-det-text-md mb-30">{{ $product->price }} <span>{{ $product->discount->value }}</span></h2>
            <div class="row justify-content-between align-items-center mb-30">
                <div class="col-md-6 col-6">
                    @foreach ($product->variants->groupBy('attribute_id') as $variant_group)
                        @if ($variant_group[0]->attribute->name == 'Color')
                            @foreach ($variant_group as $variant)
                                <h5 class="prod-det-hd-sm text-16 mb-13">Available {{ $variant[0]->attribute->name }}</h5>
                                <div class="d-flex">
                                    <button class="background-1">$variant->name</button>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div class="col-md-5 col-6">
                    <h5 class="prod-det-hd-sm text-16 mb-13">Quantity</h5>
                    <div class="counter">
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="0" class="input-qty">
                            <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($product->variants->groupBy('attribute_id') as $key => $variant_group)
                @if ($variant_group[0]->attribute->name == 'Size')
                    <h5 class="prod-det-hd-sm text-16 mb-13">Select {{ $variant_group[0]->attribute->name }}</h5>
                    <div class="d-flex mb-40">
                        @foreach ($variant_group as $variantkey => $variant)
                            <div>
                                <label
                                    for="variant-{{ $key }}-{{ $variantkey }}">{{ $variant->name }}</label>
                                <div class="d-none">
                                    <input type="checkbox"
                                        name="{{ \Str::plural($variant_group[0]->attribute->name, 2)[] }}"
                                        id="variant-{{ $key }}-{{ $variantKey }}">
                                </div>
                            </div>
                        @endforeach
                @endif
            @endforeach
        </div>
        <button type="button" class="submit-btn add-cart">Add To Cart</button>
    </div>
    <div class="col-md-12">
        <h3 class="prod-det-text-lg medium mt-60 mb-10">Product Specification</h3>
        <p class="prod-para mb-20">
            {{ $product->description }}
        </p>
    </div>
</div>
</div>
