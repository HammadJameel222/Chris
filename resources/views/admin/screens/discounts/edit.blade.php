@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Discounts'])
    <section class="login-sec sign-up">

        <div class="panel-header panel-header-sm">
        </div>
        <div class="container mycont">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="sec-title mb-15">{{ __(' Edit Discount') }}</h5>
                        </div>
                        <div class="card-body">

                            <form action="/admin/discount/update/{{ $discount->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name"><b>Discount Name</b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="text" id="type" class="input-field"
                                            placeholder="Enter discount type" name="type" class="form-control"
                                            value="{{ $discount->type }}">
                                        @error('type')
                                            <p> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name"><b>Discount Value</b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="number" id="discountValue" class="input-field" name="value" class="form-control"
                                            value="{{ $discount->value }}">
                                        @error('value')
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
