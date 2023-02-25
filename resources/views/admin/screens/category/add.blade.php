@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Categories'])
    <section class="login-sec sign-up">

        <div class="panel-header panel-header-sm">
        </div>
        <div class="container mycont">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="sec-title mb-22">{{ __(' Add Catagory') }}</h5>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('category.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name" ><b>Category Name</b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="text" id="name"
                                            placeholder="Enter category name" name="name" class="form-control"
                                            value="">
                                        @error('name')
                                           <p> {{ $message }} </p>
                                        @enderror
                                    </div>

                                </div>
                                {{-- <div class="form-group">
                                    <label for="subcat"><b>Sub Category Of : </b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <select name="category" id="" class="input-field" class="form-control">
                                            <option value="">No Subcategories </option> --}}
                                            {{-- @foreach ($categories as $category)
                                        <option value="{{ $category->id}}">{{$category->name}}</option>
                                        @endforeach --}}
                                        {{-- </select>
                                    </div>
                                </div><br> --}}
                                <hr>
                                <div class="form-group">
                                    <input type="submit" id="" class="btn btn-primary" value="Add" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="{{ asset('assets/img/bg5.jpg') }}" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="">
                                <a href="#">
                                    <img class="avatar border-gray" src="{{ asset('assets/img/default-avatar.png') }}"
                                        alt="...">
                                    <h5 class="title">{{ auth()->user()->name }}</h5>
                                </a>
                                <p class="description">
                                    {{ auth()->user()->email }}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="button-container">
                            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                <i class="fab fa-facebook-square"></i>
                            </button>
                            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                <i class="fab fa-google-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </section>
@endsection
