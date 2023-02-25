@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Variants'])
    <section class="login-sec sign-up">

        <div class="panel-header panel-header-sm">
        </div>
        <div class="container mycont">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="sec-title mb-22">{{ __(' Edit Variant') }}</h5>
                        </div>
                        <div class="card-body">
                            {{--  --}}
                            <form action="/admin/variant/update/{{ $variant->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name"><b>Select Attribute </b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <select name="attribute_id" id="" class="form-control">
                                            @foreach ($attributes as $attribute)
                                            <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input type="number" id="discountValue" class="input-field" name="price" class="form-control"
                                            value="">
                                        @error('price')
                                           <p> {{ $message }} </p>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name"><b>Variant Name</b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="text" id="discounttype"
                                            placeholder="Enter Variant Name" name="name" class="form-control"
                                            value="{{ $variant->name }}">
                                        @error('name')
                                           <p> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <input type="submit" id="" class="submit-btn" value="Edit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
