@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Discounts'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Discount List') }}</h5>
                    </div>
                    <div style="padding: 1%">
                        <a href="{{ route('product.create') }}" class="btn btn-ptimary">Add </a>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12 border">
                            <thead>
                                <tr style="font-size:16px">
                                    <th>
                                        Product Id
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
                                        Variant Price
                                    </th>
                                    <th>
                                        Color
                                    </th>
                                    <th>
                                        Variant Price
                                    </th>

                                    <th colspan="3">
                                        Operations
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->model }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->discount->type }}</td>
                                        <td>{{ $product->discount->value }}</td>
                                        <td>{{ $product->category->name }}</td>

                                        @foreach ($product->variants as $variant)
                                            {{-- @dd($variant->name) --}}
                                            <td>{{ $variant->name }}</td>
                                            <td>{{ $variant->pivot->price }}</td>
                                            {{-- <td>{{ $variant->name }}</td> --}}

                                        @endforeach
                                        {{-- <td>
                                            <a href=" /admin/discount/edit/{{ $discount->id }}"
                                                class="btn btn-primary ">Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href=" /admin/discount/show/{{ $discount->id }}"
                                                class="btn btn-primary ">Detail
                                            </a>
                                        </td>
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
