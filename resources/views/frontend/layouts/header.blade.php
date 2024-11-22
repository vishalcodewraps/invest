<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <header>

        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row py-3">

                    <div class="col-md-4">
                        <a class="navbar-brand d-none d-md-block d-lg-block" href="#">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{asset('main-frontend/img/logo.png')}}" alt="logo" class="img-fluid" style="height: 68px;">
                                <div>
                                    <span class="logo-font">Invest Connect <br> Marketplace</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 d-none d-md-block d-lg-block">
                        <div class="m-auto">
                            <form class="d-flex mt-2" role="search">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <span class="input-group-text"><i class="fas fa-search" style="color:#B91C1C;"></i></span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 d-none d-md-block d-lg-block">
                        <ul class="d-flex list-unstyled gap-3 mb-0 align-items-center text-center justify-content-end">
                            <li><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><img src="{{asset('main-frontend/img/login.png')}}"
                                        class="img-fluid" style="height: 24px;"> <br>
                                    Login</a></li>
                            <li><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"><img src="{{asset('main-frontend/img/register.png')}}"
                                        class="img-fluid" style="height: 24px;">
                             <br> Register</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg bg-light border-top">

            <div class="container">

                <a class="navbar-brand d-sm-block d-md-none d-lg-none" href="{{url('/')}}">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{asset('main-frontend/img/logo.png')}}" alt="logo" class="img-fluid" style="height: 40px;">
                        <div>
                            <span class="logo-font">Invest Connect <br> Marketplace</span>
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Investor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Business Owner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('our-team')}}">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('blogs')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>

                    </ul>
                    <div>
                        <button class="btn btn-danger">Join Our Marketplace </button>
                    </div>

                    <div class="d-sm-block d-md-none">
                        <ul class="d-flex list-unstyled gap-3 mb-0 align-items-center text-center justify-content-end">
                            <li><a href="#" class="text-decoration-none text-black"  data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><img src="{{asset('main-frontend/img/login.png')}}"
                                        class="img-fluid" style="height: 24px;" > <br>
                                    Login</a></li>
                            <li><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"  ><img src="{{asset('main-frontend/img/register.png')}}"
                                        class="img-fluid" style="height: 24px;">
                                    <br> Register</a></li>
                        </ul>
                    </div>

                </div>


            </div>
        </nav>

    </header>