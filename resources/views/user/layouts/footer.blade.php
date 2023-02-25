<footer class="footer">
    <div class="main-footer position-relative">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-3 col-10">
                    <a href="#">
                        <img src="{{ asset('assets/images/footer-logo.png') }}" alt="" class="mb-4">
                    </a>
                    <p class="text-16 text-white mb-25">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's</p>
                    <div class="social-links d-flex mm-b-30">
                        <a href="#"><i class="fa-brands fa-facebook-f me-3"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-3 col-12">
                    <h4 class="text-md-2 mb-13">Quick Links</h4>
                    <ul class="footer-list mm-b-30">
                        <li><a href="{{ route('home') }}" class="nav-btn-2">Home</a></li>
                        <li><a href="{{ route('about') }}" class="nav-btn-2">About Us</a></li>
                        <li><a href="{{ route('women') }}" class="nav-btn-2">Women</a></li>
                        <li><a href="{{ route('men') }}" class="nav-btn-2">Men</a></li>
                        <li><a href="{{ route('engagement') }}" class="nav-btn-2">Engagement</a></li>
                        <li><a href="{{ route('custom.jewelry') }}" class="nav-btn-2">Custom Jewelry</a></li>
                        <li><a href="{{ route('signature') }}" class="nav-btn-2">Signature Red Gold Collection</a></li>
                        <li><a href="{{ route('blog') }}" class="nav-btn-2">Blogs</a></li>
                        <li><a href="{{ route('contact') }}" class="nav-btn-2">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <h4 class="text-md-2 mb-13">Information</h4>
                    <ul class="footer-list mm-b-30">
                        <li><a href="{{ route('social') }}" class="nav-btn-2">Social Responsibility</a></li>
                        <li><a href="#" class="nav-btn-2">Press/Media</a></li>
                        <li><a href="{{ route('privacy.policy') }}" class="nav-btn-2">Privacy Policy</a></li>
                        <li><a href="{{ route('terms.conditions') }}" class="nav-btn-2">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class=" col-lg-3 col-md-3 col-12">
                    <h4 class="text-md-2 mb-13">Join Our Mailing List</h4>
                    <h5 class="text-16 text-white mb-30">Sign up to get the latest on all things Chris Aire.</h5>
                    <div class="footer-field">
                        <div class="row">
                            <div class="col-lg-12 col-12 col-6">
                                <form action="{{ route('newsletter.add') }}" method="post">
                                    @csrf
                                    <div class="input-wrap">
                                        <input type="email" class="input-field" placeholder="Enter Email Address"
                                            name="email">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                        <div class="paper-plane">
                                            <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-md-6 col-12">
                    <p class="footer-bottom-text">© 2022 <span> Chris Aire Fine Jewelry & Timepieces </span> | Red Gold®
                        is a Registered Trademark of Solid 21 Incorporated.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="d-flex justify-content-end footer-bottom-cont">
                        <img src="{{ asset('assets/images/paypal.png') }}" alt="">
                    </div>
                </div>
                <div class="back-to-top-wrap">
                    <a href="#top" class="back-to-top"><i class="fa-solid fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
    integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/vendor/vendor.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
</body>

</html>
