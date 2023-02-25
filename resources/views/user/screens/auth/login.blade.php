@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Login"
    </script>
    <main>
        <section class="login-sec">
            <div class="container-fluid p-0">
                <div class="row  justify-content-center">
                    <div class="offset-2 col-lg-4 col-md-10 col-10">
                        <div class="inner-pad">
                            <h3 class="login-text-hd">Welcome to<span>CHRIS AIRE</span></h3>
                            <p class="login-text-md mb-60">Enter your details to proceed further.</p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="email" name="email" class="input-field"
                                            placeholder="Enter Email Address">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                    </div>
                                    <div class="col-lg-9 co-12">
                                        <div class="input-wrap input-area">
                                            <input type="password" name="password" class="input-field"
                                                placeholder="Enter Password">
                                            <div class="eye-icon">
                                                <i class="fa-solid fa-eye-slash show-pass"></i>
                                            </div>
                                            @error('password')
                                            {{ $message }}
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-9 co-12">
                                        <div class="d-flex align-items-center justify-content-between mt-25 mb-30">
                                            <div class="form-check login-check">
                                                <input class="form-check-input " type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label " for="flexCheckDefault">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <div>
                                                <a href="#" class="login-text-sm">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 co-12 mb-30">
                                        <button type="submit" class="submit-btn">Sign In</button>
                                    </div>
                                    <div class="col-lg-12 co-12">
                                        <h5 class="login-bottom-text">Don't Have Account? <a href="{{ route('register') }}">Sign
                                                Up</a></h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="{{ asset('assets/images/login-img.png') }}" class="img-fluid sign-up-img" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
