@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Attributes'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Attribute Details') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Attribute Name
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
                                    <td>{{ $attribute->id }}</td>
                                    <td>{{ $attribute->name }}</td>

                                    <td>{{ $attribute->created_at }}</td>
                                    <td>
                                        {{-- {{ $attribute->id }}/edit --}}
                                        <a href=" /admin/attribute/edit/{{ $attribute->id }}" class="btn btn-primary ">Edit </a>
                                    </td>

                                    <td>
                                        <form action="/admin/attribute/destroy/{{ $attribute->id }}" method="POST"
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
