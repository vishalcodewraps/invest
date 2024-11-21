<footer class="footer">
    <div class="container">

        <div class="row border-bottom">
            <div class="col-lg-9 col-md-4 mb-4">
                <div class="logo">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ asset('main-frontend/img/logo.png') }}" alt="logo" class="img-fluid"
                                style="height: 68px;">
                            <div>
                                <span class="logo-font text-white">Invest Connect <br> Marketplace</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 align-items-center">
                <ul class="list-unstyled d-flex gap-2 mt-2">
                    <li><img src="{{ asset('main-frontend/img/instagram.png') }}" alt="" class="img-fluid"></li>
                    <li><img src="{{ asset('main-frontend/img/facebook.png') }}" alt="" class="img-fluid"></li>
                    <li><img src="{{ asset('main-frontend/img/twitter.png') }}" alt="" class="img-fluid"></li>
                    <li><img src="{{ asset('main-frontend/img/blog.png') }}" alt="" class="img-fluid"></li>

                    <li><img src="{{ asset('main-frontend/img/linkden.png') }}" alt="" class="img-fluid"></li>
                </ul>
            </div>


        </div>

        <div class="row py-4">

            <div class="col-lg-4 col-md-6 mb-4">
                <p class="text-white">
                    Partner with us to fuel innovation and drive meaningful impact.
                    Your investment supports groundbreaking solutions, sustainable growth,
                    and a vision for a brighter future.
                </p>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="section-title text-white">Navigation</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Login</a></li>
                    <li><a href="{{url('/contact')}}" class="text-white text-decoration-none">Contact Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Testimonials</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Company Info</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Partners</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Refer a Friend</a></li>
                    <li><a href="{{url('/blogs')}}" class="text-white text-decoration-none">Blog</a></li>
                </ul>
            </div>

            <!-- Entrepreneur Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="section-title text-white">Entrepreneur</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Add a Pitch</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Rates</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Entrepreneur FAQs</a></li>
                </ul>
            </div>

            <!-- Investor Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="section-title text-white">Investor</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Register</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Business Proposal</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Investor FAQs</a></li>
                </ul>
            </div>

            <!-- Service Providers Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="section-title text-white">Service Providers</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Quotes</a></li>
                    <li><a href="#" class="text-white ">Service Providers FAQs</a></li>
                </ul>
            </div>

        </div>


        <!-- Bottom Section with Copyright and Subscribe -->
        <div class="row mt-4 pt-3 border-top border-secondary">
            <div class="col-md-6 text-white bottom-text">
                All rights reserved © 2024 by <strong class="text-white">INVEST CONNECT Marketplace</strong> |
                Designed by Codewraps
            </div>
            <div class="col-md-6 text-end">
                <form class="d-flex justify-content-end">
                    <input type="email" class="subscribe-input text-white" placeholder="Enter your email Address">
                    <button type="submit" class="subscribe-button ms-2 text-white">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</footer>


<script src="{{ asset('main-frontend/js/bootstrap.bundle.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- jQuery (required for Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider-1').slick({
                slidesToShow: 3, // Number of slides to show per row
                rows: 3, // Number of rows
                dots: false, // Enable dots for navigation
                arrows: true, // Enable arrows for navigation
                infinite: true, // Enable infinite scrolling
                autoplay: true, // Enable autoplay
                autoplaySpeed: 1000, // Autoplay speed in milliseconds
            });

            $('.slider-2').slick({
                slidesToShow: 4, // Different settings for the second slider
                rows: 2,
                dots: false,
                arrows: true,
                infinite: true,
                autoplay: true, // Enable autoplay
                autoplaySpeed: 1000, // Autoplay speed in milliseconds
            });
        });
    </script>
            @if(session('success'))
            <script>
               Swal.fire({
               title: "Success!",
               text: "{{session('success')}}",
               icon: "success"
               });
            </script>
       @endif
</body>

</html>
