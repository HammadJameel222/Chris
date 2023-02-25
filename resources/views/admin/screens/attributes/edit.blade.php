@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Attributes'])
    <section class="login-sec sign-up">

        <div class="panel-header panel-header-sm">
        </div>
        <div class="container mycont">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="sec-title mb-15">{{ __(' Edit Attribute') }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="/admin/attribute/update/{{ $attribute->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name"><b>attribute Name</b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="text" id="name"
                                            placeholder="Enter attribute name" name="name" class="form-control"
                                            value="{{ $attribute->name }}">
                                        @error('name')
                                            <p> {{ $message }} </p>
                                        @enderror
                                    </div>

                                </div>

                                <hr>
                                <div class="form-group">
                                    <input type="submit" id="" class="btn btn-primary" value="Edit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
