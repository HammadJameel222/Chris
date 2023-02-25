@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Discounts'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Discount List') }}</h5>
                    </div>
                    <div style="padding: 1%">
                        <a href="{{ route('discount.create') }}" class="btn btn-ptimary">Add </a>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">
                                    <th>
                                        S.no
                                    </th>
                                    <th>
                                        Discount Type
                                    </th>
                                    <th>
                                        Discount Value
                                    </th>
                                    <th>
                                        Create Date
                                    </th>
                                    <th colspan="3">
                                        Operations
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($discounts as $discount)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $discount->type }}</td>
                                        <td>{{ $discount->value }}</td>
                                        <td>{{ $discount->created_at }}</td>
                                        <td>
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
                                        </td>
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
