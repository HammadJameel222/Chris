@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Discounts'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Discount Details') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">
                                    <th>
                                        Id
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
                                    <th colspan="2">
                                        Operations
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $discount->id }}</td>
                                    <td>{{ $discount->type }}</td>
                                    <td>{{ $discount->value }}</td>

                                    <td>{{ $discount->created_at }}</td>
                                    <td>
                                        {{-- {{ $discount->id }}/edit --}}
                                        <a href=" /admin/discount/edit/{{ $discount->id }}" class="btn btn-primary ">Edit </a>
                                    </td>

                                    <td>
                                        <form action="/admin/discount/destroy/{{ $discount->id }}" method="POST"
                                            onsubmit="return confirm('Are you sure to delete this ??')">
                                            @csrf
                                            <input type="submit" value="Delete" id="delete" class="btn btn-danger" />
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('admin.layouts.footers.auth.footer')
@endsection
