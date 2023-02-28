@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Page'])
    <section class="login-sec sign-up">

        <div class="panel-header panel-header-sm">
        </div>
        <div class="container mycont">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="sec-title mb-22">{{ __(' Edit Page') }}</h5>
                        </div>
                        <div class="card-body">
                            {{--  --}}
                            <form action="/admin/page/update/{{ $page->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="page"><b>Page Name</b></label>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="text" id="discounttype"
                                            placeholder="Enter Page Name" name="page" class="form-control"
                                            value="{{ $page->page }}">
                                        @error('page')
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
