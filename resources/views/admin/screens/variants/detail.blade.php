@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Variants'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Variant Details') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Variant Name
                                    </th>
                                    <th>
                                        Attribute
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
                                    <td>{{ $variant->id }}</td>
                                    <td>{{ $attribute->name }}</td>
                                    <td>{{ $variant->name }}</td>

                                    <td>{{ $variant->created_at }}</td>
                                    <td>
                                        {{-- {{ $variant->id }}/edit --}}
                                        <a href=" /admin/variant/edit/{{ $variant->id }}" class="btn btn-primary ">Edit </a>
                                    </td>

                                    <td>
                                        <form action="/admin/variant/destroy/{{ $variant->id }}" method="POST"
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
