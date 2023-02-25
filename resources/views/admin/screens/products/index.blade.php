@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Products'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Product List') }}</h5>
                    </div>
                    <div style="padding: 1%">
                        <a href="{{ route('product.create') }}" class="btn btn-ptimary">Add </a>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12 border">
                            <thead>
                                <tr style="font-size:16px">
                                    <th>
                                        S.no
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Model
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Base Price
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Discount Type
                                    </th>
                                    <th>
                                        Discount
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Size
                                    </th>
                                    <th>
                                        Addon Price
                                    </th>
                                    <th>
                                        Color
                                    </th>
                                    <th>
                                        Addon Price
                                    </th>

                                    <th colspan="3">
                                        Operations
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                {{-- @dd($product->discount->type) --}}
                                    <tr>
                                        {{-- @dd($product) --}}
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->model }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }} Rs.</td>
                                        <td>
                                            <img src="{{ $product->getFirstMediaUrl('products') }}" alt="asd" >
                                        </td>
                                        <td>{{ $product->discount->type }}</td>
                                        {{-- @dd($product->discount) --}}
                                        <td>{{ $product->discount->value }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        {{-- @dd($product->variants)
                                        @dd($product->product_variants)
                                        @dd($variant->name) --}}
                                        <td>{{ implode(', ', $product->variant_names['size']) }}</td>
                                        <td>{{ !empty($product->variant_prices['size']) ? ( count($product->variant_prices['size']) > 1 ? min($product->variant_prices['size']). ' - '. max($product->variant_prices['size']) : $product->variant_prices['size'][0]) : '' }}</td>
                                        {{-- <td>{{ $variant->pivot->price }}</td> --}}

                                            {{-- <td>{{ $variant->name }}</td> --}}
                                        <td>
                                            <a href=" /admin/product/show/{{ $product->id }}"
                                                class="btn btn-primary ">Detail
                                            </a>
                                        </td>
                                        <td>
                                            <a href=" /admin/product/edit/{{ $product->id }}"
                                                class="btn btn-primary ">Edit
                                            </a>
                                        </td>
                                        {{--
                                        <td>
                                            <form action="/admin/discount/destroy/{{ $discount->id }}" method="POST"
                                                onsubmit="return confirm('Are you sure to delete this ??')">
                                                @csrf
                                                <input type="submit" value="Delete" id="delete"
                                                    class="btn btn-danger" />
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
