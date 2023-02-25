@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Variants'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Variants List') }}</h5>
                    </div>
                    <div style="padding: 1%">
                        <a href="{{ route('variant.create') }}" class="btn btn-ptimary">Add </a>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">
                                    <th>
                                        S.no
                                    </th>
                                    <th>
                                        Variant Name
                                    </th>
                                    <th>
                                        Attribute Name
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
                                @foreach ($variants as $group)
                                    @foreach ($group as $variant)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $variant->name }}</td>
                                        <td>{{ $variant->attribute->name }}</td>
                                        <td>{{ $variant->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href=" /admin/variant/edit/{{ $variant->id }}"
                                                class="btn btn-primary ">Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href=" /admin/variant/show/{{ $variant->id }}/{{ $variant->attribute_id }}"
                                                class="btn btn-primary ">Detail
                                            </a>
                                        </td>
                                        <td>
                                            <form action="/admin/variant/destroy/{{ $variant->id }}" method="POST"
                                                onsubmit="return confirm('Are you sure to delete this ??')">
                                                @csrf
                                                <input type="submit" value="Delete" id="delete"
                                                    class="btn btn-danger" />
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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
