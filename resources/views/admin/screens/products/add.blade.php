@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Products'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">

                            </div>
                            <div class="card-body">
                                <p class="text-uppercase text-sm">Add Product</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-control-label">Product Name</label>
                                            <input class="form-control" type="text" name="name" value="">
                                        </div>
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="model" class="form-control-label">Model</label>
                                            <input class="form-control" type="text" name="model" value="">
                                        </div>
                                        @error('model')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price" class="form-control-label">Price</label>
                                            <input class="form-control" type="number" name="price" value="">
                                        </div>
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="discount" class="form-control-label">Discount Type</label>
                                            <select name="discount_type" id="" class="form-control">
                                                <option value="" disabled selected>Select discount type</option>
                                                <option value="flat">Flat</option>
                                                <option value="%">%</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="discount" class="form-control-label">Discount</label>
                                            <input name="discount_price" id="" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description" class="form-control-label">Description</label>
                                            <input class="form-control" type="text" name="description" value="">

                                        </div>
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size" class="form-control-label">Category</label>
                                            {{-- <input class="form-control" type="text" name="category" value=""> --}}
                                            <select name="category" class="form-control">
                                                <option value="" disabled selected>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-4 " id="field"></div>
                                    @foreach ($attributes as $key => $attribute)
                                    {{-- @dd() --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="size"
                                                    class="form-control-label">{{ $attribute->name }}</label>
                                                {{-- [{{$attribute->id}}][] --}}
                                                <select name="variants[{{$key}}]" class="form-control">
                                                    <option value="" disabled selected> Select attributes</option>
                                                    @foreach ($attribute->variants as $variant)
                                                        <option value="{{ $variant->id }}">{{ $variant->name }}
                                                        </option>
                                                    @endforeach
                                                </select><br>
                                                <div class="col-md-6">
                                                    <input type="number" name="price_add[{{$key}}]" class="form-control" />
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach

                                    <div>
                                        <button class="btn btn-primary" id="duplicate">Add Field
                                        </button>
                                    </div>

                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Image</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{-- <label for="example-text-input" class="form-control-label">About me</label> --}}
                                            <input src="" type="file" name="image" multiple>
                                            {{-- <x-media-library-attachment multiple name="image"/> --}}
                                        </div>
                                        @error('image')
                                           <p> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary " style="float: left">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        $(document).ready(function() {
            console.log("asd");
            $("form").on("submit", function(e) {
                e.preventDefault();
                $("#duplicate").on('click', function() {
                    var ele = $(this).closest("#field");
                    ele.clone(true , true).prependTo(ele);
                    console.log('done');
                });
            })
        });
    </script> --}}
@endsection
