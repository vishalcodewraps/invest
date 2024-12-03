<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    <link rel="stylesheet" href="{{asset('main-frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main-frontend/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    
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
    // Initialize Carousel 1
    $('.carousel-one').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        responsive: {
            0: { items: 1 },
            600: { items: 3 },
            1000: { items: 5 }
        }
    });

    // Initialize Carousel 2
    $('.carousel-two').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });

    // Initialize Carousel 3
    $('.carousel-third').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsive: {
            0: { items: 1 },
            600: { items: 3 },
            1000: { items: 5 }
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
<script>
      $(document).ready(function() {
      $(".toggle-password").click(function() {
        var inputField = $(this).prev("input"); // Get the input field before the icon
        var icon = $(this).children("i"); // Get the icon inside the span

        // Toggle the type attribute of the password field
        if (inputField.attr("type") === "password") {
          inputField.attr("type", "text");
          icon.removeClass("fa-eye").addClass("fa-eye-slash"); // Change to "eye-slash"
        } else {
          inputField.attr("type", "password");
          icon.removeClass("fa-eye-slash").addClass("fa-eye"); // Change to "eye"
        }
      });
    });


$(document).ready(function () {
    let modalClosed = false; // Flag to track modal state

    setInterval(function () {
        if (!modalClosed) { // Only show the modal if it hasn't been closed
            $("#staticBackdrop").modal('show');
        }
    }, 12000);

    // Update the flag when the modal is closed
    $("#staticBackdrop").on('hidden.bs.modal', function () {
        modalClosed = true;
    });
});

</script>


</body>

</html>

</body>
</html>