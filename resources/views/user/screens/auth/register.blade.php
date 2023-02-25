@extends('user.layouts.app')
@section('content')
    <script type="text/javascript">
        document.title = "Sign up"
    </script>
    <main>
        <section class="login-sec sign-up">
            <div class="container-fluid p-0">
                <div class="row  justify-content-center">
                    <div class="offset-2 col-lg-4 col-md-10 col-10">
                        <div class="inner-pad">
                            <h3 class="login-text-hd">Create An Account</h3>
                            <p class="login-text-md mb-60">Enter your details to proceed further.</p>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="text" class="input-field" name="name"
                                            placeholder="Enter Full Name">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="email" class="input-field" name="email"
                                            placeholder="Enter Email Address">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    {{-- <div class="col-lg-9 co-12 mb-30">
                                        <input type="text" class="input-field" name="name" placeholder="Enter Email Address">
                                    </div> --}}
                                    <div class="col-lg-9 co-12 mb-30">
                                        <input type="tel" class="input-field" name="phone"
                                            placeholder="Enter Phone Number" pattern="{0-9}[4]-{0-9}[7]">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <div class="input-wrap input-area">
                                            <input type="password" class="input-field" name="password"
                                                placeholder="Enter New Password">
                                            <div class="eye-icon">
                                                <i class="fa-solid fa-eye-slash show-pass"></i>
                                            </div>
                                        </div>
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-lg-9 co-12 mb-30">
                                        <div class="input-wrap input-area">
                                            <input type="password" class="input-field" name="confirmpassword"
                                                placeholder="Confirm Password">
                                            <div class="eye-icon">
                                                <i class="fa-solid fa-eye-slash show-pass"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 co-12 mb-30">
                                        <!-- <button type="submit" class="">Sign Up</button> -->
                                        {{-- <button type="submit" class="submit-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">Sign Up</button> --}}
                                        <input type="submit" value="Signup" class="submit-btn">
                                    </div>
                                    <div class="col-lg-12 co-12">
                                        <h5 class="login-bottom-text">Already Have An Account? <a
                                                href="{{ route('login') }}">Sign
                                                In</a></h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <img src="./assets/images/sign-up-image.png" class="img-fluid sign-up-img" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- modal -->
        <div class="modal fade signup-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="moda-check mb-30">
                            <img src="./assets/images/icons/checkmark.svg" alt="">
                        </div>
                        <div class="mb-20">
                            <h4 class="modal-text-hd text-sm mb-13">Successful</h4>
                            <p class="modal-para">Account Created Successfully</p>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center sign-up-btn">
                                <button type="submit" class="submit-btn">Sign In</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal end -->
    </main>
@endsection
