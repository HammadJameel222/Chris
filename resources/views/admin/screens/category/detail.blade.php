@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Categories'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Catagory Details') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Category Name
                                    </th>
                                    {{-- <th>
                                        Parent Category
                                    </th>
                                    <th>
                                        Products
                                    </th> --}}
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
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>

                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        {{-- {{ $category->id }}/edit --}}
                                        <a href=" /admin/category/edit/{{ $category->id }}" class="btn btn-primary ">Edit </a>
                                    </td>

                                    <td>
                                        <form action="/admin/category/destroy/{{ $category->id }}" method="POST"
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


{{--
<section class="login-sec sign-up">


    <div class="panel-header panel-header-sm">
    </div>
    <div class="container mycont">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Catagory Details') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Category Name
                                    </th>
                                    {{-- <th>
                                        Parent Category
                                    </th>
                                    <th>
                                        Products
                                    </th> --}}
{{-- <th>
                                        Create Date
                                    </th>
                                    <th colspan="2">
                                        Operations
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td> --}}
{{-- <td>
                                        @if ($category->category_id)
                                            {{ $category->parent->name }}
                                        @else
                                            No Parent ID
                                        @endif
                                    </td> --}}
{{-- <td>
                                        @if ($category->category_id)
                                            @foreach ($category->child as $cat)
                                                {{ $cat->name }}<br>
                                            @endforeach
                                        @else
                                            No Product
                                        @endif
                                    </td> --}}
{{-- <td>{{ $category->created_at }}</td>
                                    <td> --}}
{{-- {{ $category->id }}/edit --}}
{{-- <a href=" /category/edit/{{ $category->id }}" class="btn btn-primary ">Edit </a>
                                    </td>

                                    <td>
                                        <form action="/category/destroy/{{$category->id}}" method="POST" onsubmit="return confirm('Are you sure to delete this ??')">
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
</section> --}}
