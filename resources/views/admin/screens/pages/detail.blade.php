@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Pages'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="sec-title mb-15">{{ __('Pages Detail') }}</h5>
                    </div>
                    <div style="padding: 1%">
                        <a href="{{ route('page.create') }}" class="btn btn-ptimary">Add </a>
                    </div>
                    <div class="card-body">
                        <table class="table col-sm-12">
                            <thead>
                                <tr style="font-size:18px">

                                    <th>
                                        Pages Name
                                    </th>
                                    <th>
                                        Created-at
                                    </th>
                                    <th colspan="3">
                                        Operations
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{ $page->page }}</td>
                                        <td>{{$page->created_at->format('D,M,Y') }}</td>
                                        <td>
                                            <a href=" /admin/page/edit/{{ $page->id }}"
                                                class="btn btn-primary ">Edit
                                            </a>
                                        </td>

                                        <td>
                                            <form action="/admin/page/destroy/{{ $page->id }}" method="POST"
                                                onsubmit="return confirm('Are you sure to delete this ??')">
                                                @csrf
                                                <input type="submit" value="Delete" id="delete"
                                                    class="btn btn-danger" />
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

    </div>
    @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
