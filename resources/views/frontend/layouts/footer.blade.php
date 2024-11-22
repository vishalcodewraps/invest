<footer class="footer">
    <div class="container">

        <div class="row border-bottom">
            <div class="col-lg-9 col-md-4 mb-4">
                <div class="logo">
                    <a class="navbar-brand" href="{{ url('/') }}">
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
                    <li><a href="{{ url('/contact') }}" class="text-white text-decoration-none">Contact Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Testimonials</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Company Info</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Partners</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Refer a Friend</a></li>
                    <li><a href="{{ url('/blogs') }}" class="text-white text-decoration-none">Blog</a></li>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close float-end pe-2" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="row">
                        <!-- Image Column -->
                        <div class="col-12 col-md-6 p-0 d-none d-md-block">
                            <img src="{{ asset('main-frontend/img/login-image.png')}}" alt="Register" class="img-fluid"
                                style="height: 100%; object-fit: cover; border-radius: 10px 0 0 10px;">
                        </div>

                        <!-- Form Column -->
                        <div class="col-12 col-md-6 pt-4 px-3">
                            <h5>Welcome to</h5>
                            <p class="login-text">INVEST CONNECT Marketplace</p>

                            <!-- Form Fields -->
                            <form action="{{url('user-login')}}" method="post">
                                @csrf
                            <div class="row">

                                <div class="col-12 col-md-12">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Email</span>
                                        <input type="email" placeholder="john.doe@gmail.com" name="email" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Password</span>
                                        <input type="password" placeholder="***********" name="password" class="form-control"
                                            required>
                                    </div>
                                </div>


                                <!-- Checkbox -->
                                <div class="col-12 mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                                data-bs-target="#forgotModal" style="color: #b30000;"> Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-red w-100">Login</button>
                                </div>
                            </form>
                                <!-- Social Login Buttons -->
                                <div class="col-12 mb-1 pb-3">
                                    <button class="btn button-color shadow  py-2 w-100"><i
                                            class="fa-brands fa-facebook-f"></i></button>
                                </div>
                                <div class="col-12 mb-1 pb-3">
                                    <button class="btn button-color shadow py-2 w-100"><i
                                            class="fa-brands fa-google"></i></button>
                                </div>

                                <div class="col-12 text-center mb-3">
                                    Don’t have an account? <span><a href="#" class="text-decoration-none"
                                            style="color: #b30000;"data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">Register</a></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>

    <!-- login modal box end -->

    <!-- forget password start -->

    <!-- Modal -->
    <div class="modal fade" id="forgotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close float-end pe-2" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="row">
                        <!-- Image Column -->
                        <div class="col-12 col-md-6 p-0 d-none d-md-block">
                            <img src="{{ asset('main-frontend/img/register-image.png')}}" alt="Register" class="img-fluid"
                                style="height: 100%; object-fit: cover;">
                        </div>

                        <!-- Form Column -->
                        <div class="col-12 col-md-6 pt-4 px-3">
                            <h5>Forget Password</h5>


                            <!-- Form Fields -->
                            <div class="row ">

                                <div class="col-12 col-md-12 mb-3">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Email</span>
                                        <input type="email" placeholder="john.doe@gmail.com" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mb-3">
                                    <button class="btn btn-red w-100">Reset password</button>
                                </div>
                                <div class="col-12 text-center mb-3">
                                    Already have an account? <span><a href="#" class="text-decoration-none"
                                            style="color: #b30000;">Login</a></span>
                                </div>

                                <!-- Social Login Buttons -->
                                <div class="col-6 mb-3">
                                    <button class="btn btn-outline-danger w-100"><i
                                            class="fa-brands fa-facebook-f"></i></button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn btn-outline-danger w-100"><i
                                            class="fa-brands fa-google"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- forget password start -->
    <!-- register modal box start -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close float-end pe-2" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="row">
                        <!-- Image Column -->
                        <div class="col-12 col-md-6 p-0 d-none d-md-block">
                            <img src="{{ asset('main-frontend/img/register-image.png')}}" alt="Register" class="img-fluid"
                                style="height: 100%; object-fit: cover;">
                        </div>

                        <!-- Form Column -->
                        <div class="col-12 col-md-6 pt-4 px-3">
                            <h5>Register</h5>
                            <p>Let’s get you all set up so you can access your personal account.</p>
                            <form action="{{url('create-user')}}" method="post" onsubmit="return submit_registration()">
                                @csrf
                            <!-- Dropdown -->
                            <div class="d-flex justify-content-start gap-2 align-items-center">
                                I am Registering as
                                <select name="type" id="" class="form-control form-select" required>
                                    <option value="">Please Select</option>
                                    <option value="1">Investor</option>
                                    <option value="2">Business Owner</option>
                                    <option value="3">Service Provider</option>
                                </select>
                                {{-- <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="background-color: #b30000; border: none;">
                                        Please Select
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Investor</a></li>
                                        <li><a class="dropdown-item" href="#">Business Owner</a></li>
                                        <li><a class="dropdown-item" href="#">Service Provider</a></li>
                                    </ul>
                                </div> --}}
                            </div>

                            <!-- Form Fields -->
                          
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">First Name</span>
                                        <input type="text" placeholder="Enter first name" name="name" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Last Name</span>
                                        <input type="text" placeholder="Enter last name" name="last_name" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Email</span>
                                        <input type="email" placeholder="john.doe@gmail.com" name="email" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Phone</span>
                                        <input type="text" placeholder="0235556555" name="phone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Password</span>
                                        <input type="password" placeholder="***********" name="password" id="password" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Confirm Password</span>
                                        <input type="password" placeholder="***********" name="c_password" id="c_password" class="form-control"
                                            required>
                                            <span class="text-danger" id="show_error"></span>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="col-12 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            required>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I certify that I agree to the website's Privacy Policy, Terms and
                                            Conditions, and Refund Policy.
                                        </label>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-red w-100">Create Account</button>
                                </div>
                                <div class="col-12 text-center mb-3">
                                    Already have an account? <span><a href="#" class="text-decoration-none"
                                            style="color: #b30000;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Login</a></span>
                                </div>

                                <!-- Social Login Buttons -->
                                <div class="col-6 mb-3">
                                    <button class="btn btn-outline-danger w-100"><i
                                            class="fa-brands fa-facebook-f"></i></button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn btn-outline-danger w-100"><i
                                            class="fa-brands fa-google"></i></button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
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
    $(document).ready(function() {
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
@if (session('success'))
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
@endif
@if (session('error'))
    <script>
        Swal.fire({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error"
        });
    </script>
@endif

<script>
    function submit_registration(){
        c_password = $("#c_password").val();
        password = $("#password").val();
        if(c_password !== password){
            $("#show_error").html('Please match the password and confirm password');
            return false;
        }
    }
</script>
</body>

</html>
