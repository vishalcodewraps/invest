
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
                <ul class="list-unstyled d-flex gap-2 my-3">
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
                    <li><a href="{{ url('/news') }}" class="text-white text-decoration-none">News</a></li>
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
                            style="height: 597px; width:100%; border-radius: 21px 0 0 21px">
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
                                            <span class="toggle-password" id="togglePassword">
                                            <i class="fa fa-eye" style="color:#b30000"></i>
                                        </span>
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
                                <div class="col-6 mb-4">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-facebook-f"></i> Facebook</span> </button>
                                </div>
                                <div class="col-6 mb-4">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-google"></i></span> Google </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>

    <!-- otp screen start -->

   
<!-- Modal Structure -->
<div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <button type="button" class="btn-close float-end pe-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row">
                    <!-- Image Column -->
                    <div class="col-12 col-md-6 p-0 d-none d-md-block">
                        <img src="{{ asset('main-frontend/img/register-image.png') }}" alt="Register" class="img-fluid" style="height: 597px; width: 100%; object-fit: cover; border-radius: 21px 0 0 21px">
                    </div>

                    <!-- Form Column -->
                    <div class="col-12 col-md-6 pt-4 px-3">
                        <h5>OTP Verificaiton</h5>
                        @if (session('send_otp'))
                        <div class="alert alert-{{session('error_type')}}">
                            {{session('send_otp')}}
                        </div>
                        @endif
                        
                        <!-- Form Fields -->
                        <form action="{{url('verify-otp')}}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 mb-3">
                                <div class="contact-one__form-input-box input-design rounded">
                                    <div class="otp-input-fields">
                                        <input type="number" name="number1" class="otp__digit otp__field__1">
                                        <input type="number" name="number2" class="otp__digit otp__field__2">
                                        <input type="number" name="number3" class="otp__digit otp__field__3">
                                        <input type="number" name="number4" class="otp__digit otp__field__4">
                                        <input type="number" name="number5" class="otp__digit otp__field__5">
                                        <input type="number" name="number6" class="otp__digit otp__field__6">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mb-3">
                                <button class="btn btn-red w-100">Verify OTP</button>
                            </div>

                            <!-- Login Link -->
                            <div class="col-12 text-center mb-3">
                                Didn't Recleve OTP ?<span><a href="{{url('resend-otp')}}" class="text-decoration-none" style="color: #b30000;">Resend OTP</a></span>
                            </div>

                            <!-- Social Login Buttons -->
                            <div class="col-6 mb-2">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-facebook-f"></i> Facebook</span> </button>
                                </div>
                                <div class="col-6 mb-2">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-google"></i></span> Google </button>
                                </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- otp screen end -->


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
                            style=" height: 597px; width: 100%; object-fit: cover; border-radius: 21px 0 0 21px;">
                        </div>

                        <!-- Form Column -->
                        <div class="col-12 col-md-6 pt-4 px-3">
                            <h5>Forget Password</h5>
                            @if (session('forgot_pass'))
                            <div class="alert alert-{{session('error_type')}}">
                                {{session('forgot_pass')}}
                            </div>
                            @endif

                            <!-- Form Fields -->
                            <div class="row ">
                             <!-- Form Fields -->
                        <form action="{{url('forgot-password')}}" method="post">
                            @csrf
                                <div class="col-12 col-md-12 mb-3">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Email</span>
                                        <input type="email" name="email" placeholder="john.doe@gmail.com" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mb-3">
                                <button class="btn btn-red w-100">Reset password</button>
                                </div>
                                </form>
                                <div class="col-12 text-center mb-3">
                                    Already have an account? <span><a href="#" class="text-decoration-none"
                                            style="color: #b30000;">Login</a></span>
                                </div>

                                <!-- Social Login Buttons -->
                                <div class="col-6 mb-3">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-facebook-f"></i> Facebook</span> </button>
                                </div>
                                <div class="col-6 mb-3">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-google"></i></span> Google </button>
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
                                style="height: 605px; width: 100%; object-fit: cover; border-radius: 21px 0 0 21px;">
                        </div>

                        <!-- Form Column -->
                        <div class="col-12 col-md-6 pt-4 px-3">
                            <h5>Register</h5>
                            <p style="margin-bottom:0.5rem;">Let’s get you all set up so you can access your personal account.</p>
                            <form action="{{url('create-user')}}" method="post" onsubmit="return submit_registration()">
                                @csrf
                            <!-- Dropdown -->
                            <div class="d-flex justify-content-start gap-2 align-items-center mb-2">
                                I am Registering as
                                <select name="type" id="" class="form-control form-select dropdown"  required style="width:60%; background:#b30000; color:white;">
                                    <option value="">Please Select</option>
                                    <option value="1">Investor</option>
                                    <option value="2">Business Owner</option>
                                    <option value="3">Service Provider</option>
                                </select>
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
                                    <div class="password-container">
                                        <input type="password" placeholder="***********" name="password" id="password" class="form-control" required>
                                        <span class="toggle-password" id="togglePassword">
                                            <i class="fa fa-eye" style="color:#b30000"></i>
                                        </span>
                                    </div>
                                </div>

                                </div>
                                <div class="col-12">
                                    <div class="contact-one__form-input-box input-design rounded">
                                        <span class="name-span">Confirm Password</span>
                                        <input type="password" placeholder="***********" name="c_password" id="c_password" class="form-control"
                                            required>
                                            <span class="toggle-password" id="togglePassword">
                                            <i class="fa fa-eye" style="color:#b30000"></i>
                                        </span>
                                            <span class="text-danger" id="show_error"></span>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="col-12 mb-3">
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
                                <div class="col-12 mb-2">
                                    <button type="submit" class="btn btn-red w-100">Create Account</button>
                                </div>
                                <div class="col-12 text-center mb-3">
                                    Already have an account? <span><a href="#" class="text-decoration-none"
                                            style="color: #b30000;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Login</a></span>
                                </div>

                                <!-- Social Login Buttons -->
                                <div class="col-6 mb-2">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-facebook-f"></i> Facebook</span> </button>
                                </div>
                                <div class="col-6 mb-2">
                                    <button class="btn btn-outline w-100" style="border:1px solid #dee2e6;"> <span><i
                                    class="fa-brands fa-google"></i></span> Google </button>
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
   $(document).ready(function () {
    $('.slider-1').slick({
        slidesToShow: 3, // Number of slides to show per row
        rows: 3, // Number of rows
        dots: false, // Disable dots
        arrows: true, // Enable arrows for navigation
        infinite: true, // Enable infinite scrolling
        autoplay: true, // Enable autoplay
        autoplaySpeed: 1000, // Autoplay speed in milliseconds
        responsive: [
            {
                breakpoint: 1024, // Screen width <= 1024px
                settings: {
                    slidesToShow: 2, // Adjust slides to show
                    rows: 2,
                }
            },
            {
                breakpoint: 768, // Screen width <= 768px
                settings: {
                    slidesToShow: 1, // Show 1 slide
                    rows: 1,
                }
            }
        ]
    });

    $('.slider-2').slick({
        slidesToShow: 4, // Different settings for the second slider
        rows: 2, // Number of rows
        dots: false, // Disable dots
        arrows: true, // Enable arrows for navigation
        infinite: true, // Enable infinite scrolling
        autoplay: true, // Enable autoplay
        autoplaySpeed: 1000, // Autoplay speed in milliseconds
        responsive: [
            {
                breakpoint: 1024, // Screen width <= 1024px
                settings: {
                    slidesToShow: 3, // Adjust slides to show
                    rows: 2,
                }
            },
            {
                breakpoint: 768, // Screen width <= 768px
                settings: {
                    slidesToShow: 2, // Show fewer slides
                    rows: 1,
                }
            },
            {
                breakpoint: 480, // Screen width <= 480px
                settings: {
                    slidesToShow: 1, // Show 1 slide
                    rows: 1,
                }
            }
        ]
    });
});

</script>
@if (session('send_otp'))
    <script>
        $(document).ready(function(){
            $("#otpModal").modal('show');
        })
    </script>
@endif
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

    // Select all OTP input fields
  const otpInputs = document.querySelectorAll('.otp__digit');

otpInputs.forEach((input, index) => {
  input.addEventListener('input', (e) => {
    const value = e.target.value;
    if (value.length > 1) {
      e.target.value = value.slice(0, 1); // Allow only one digit
    }
    if (value && index < otpInputs.length - 1) {
      otpInputs[index + 1].focus(); // Move to the next input
    }
  });

  input.addEventListener('keydown', (e) => {
    if (e.key === 'Backspace' && !e.target.value && index > 0) {
      otpInputs[index - 1].focus(); // Move to the previous input
    }
  });

  input.addEventListener('paste', (e) => {
    e.preventDefault(); // Prevent direct pasting
    const pasteData = e.clipboardData.getData('text').split('');
    pasteData.forEach((digit, i) => {
      if (i < otpInputs.length) {
        otpInputs[i].value = digit.match(/\d/) ? digit : ''; // Only paste numeric values
        otpInputs[i].dispatchEvent(new Event('input')); // Trigger input event
      }
    });
  });
});

</script>


</body>

</html>
