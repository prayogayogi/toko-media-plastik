<footer class="footer bg-primary">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo-footer">
                            {{-- <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">MEDIA PLASTIK</span> --}}
                            <img src="{{ asset("assets-frontEnd/img/icon.png") }}" alt="" class="mb-2"> <span class="logo">MEDIA PLASTIK</span>
                        </div>
                        <p class="text">Media plastik adalah layana yang menyediakan berbagai jenis plastik dan merupakan toko plastik yang lengakap satau-satunya yang ada di makasar, dan satu-satunya yang mengunkan pembayaran online payment.</p>
                        <p class="call">Ada pertanyaan? Hubungi kami<span><a href="tel:123456789">+62 228173 7453</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Info Contact</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>NO. 342 - Makasar.</li>
                                <li>Sulawesi, Indonesia.</li>
                                <li>info@mediaplastik.com</li>
                                <li>+032 3456 7890</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-inner border-top">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © <span id="year"></span> <a href="{{ route("home") }}" target="_blank">Media Plastik</a> -
                                All Rights Reserved.</p>
                        </div>
                        <script>
                            let d = new Date();
                            let year = d.getFullYear();
                            document.getElementById("year").innerHTML = year;
                        </script>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right pull-right">
                            <ul class="payment-cards">
                                <li><i class="fa fa-cc-paypal"></i></li>
                                <li><i class="fa fa-cc-amex"></i></li>
                                <li><i class="fa fa-cc-mastercard"></i></li>
                                <li><i class="fa fa-cc-stripe"></i></li>
                                <li><i class="fa fa-cc-visa"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
