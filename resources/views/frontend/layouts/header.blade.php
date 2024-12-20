    <header>

        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row top-padding">

                    <div class="col-md-4">
                        <a class="navbar-brand d-none d-md-none d-lg-block" href="{{url('/')}}">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{asset('main-frontend/img/logo.png')}}" alt="logo" class="img-fluid" style="height: 68px;">
                                <div>
                                    <span class="logo-font">Invest Connect <br> Marketplace</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 d-none d-md-none d-lg-block">
                        <div class="m-auto">
                            <form class="d-flex mt-2" role="search">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="border:2px solid #dee2e6; box-shadow: 0px 0px 4px #dee2e6 #dee2e6;">
                                    <span class="input-group-text" style="border:2px solid #dee2e6; box-shadow: 4px 4px 10px #dee2e6;"><i class="fas fa-search" style="color:#B91C1C;"></i></span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 d-none d-md-none d-lg-block">
                        <ul class="d-flex list-unstyled gap-3 mb-0 align-items-center text-center justify-content-end">
                            @if(Auth::check())
                            <li><a href="{{url('invester/dashboard')}}" class="text-decoration-none text-black"><img src="{{asset('main-frontend/img/login.png')}}"
                                        class="img-fluid" style="height: 24px;" > <br>
                                   <strong>Dashboard</strong></a></li>
                            @else
                            <li><a href="#" class="text-decoration-none text-black"  data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><img src="{{asset('main-frontend/img/login.png')}}"
                                        class="img-fluid" style="height: 24px;" > <br>
                                   <strong>Login</strong></a></li>
                            <li><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"  ><img src="{{asset('main-frontend/img/register.png')}}"
                                        class="img-fluid" style="height: 24px;">
                                    <br> <strong>Register</strong></a></li>
                            @endif
                        </ul>
                    </div>


                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg bg-light">

            <div class="container">

                <a class="navbar-brand d-sm-block d-md-block d-lg-none" href="{{url('/')}}">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{asset('main-frontend/img/logo.png')}}" alt="logo" class="img-fluid" style="height: 70px;">
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
                            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('maintenance-mode')}}">Investor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('maintenance-mode')}}">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('maintenance-mode')}}">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('maintenance-mode')}}">Price</a>
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
                        <button class="btn btn-danger d-sm-block d-md-none d-lg-block d-xl-block">Join Our Marketplace</button>
                    </div>


                    <div class="d-sm-block d-md-block d-lg-none">
                        <ul class="d-flex list-unstyled gap-3 mb-0 align-items-center text-center justify-content-start my-2">
                            @if(Auth::check())
                            <li><a href="{{url('invester/dashboard')}}" class="text-decoration-none text-black"><img src="{{asset('main-frontend/img/login.png')}}"
                                        class="img-fluid" style="height: 24px;" > <br>
                                   <strong>Dashboard</strong></a></li>
                            @else
                            <li><a href="#" class="text-decoration-none text-black"  data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><img src="{{asset('main-frontend/img/login.png')}}"
                                        class="img-fluid" style="height: 24px;" > <br>
                                   <strong>Login</strong></a></li>
                            <li><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"><img src="{{asset('main-frontend/img/register.png')}}"
                                        class="img-fluid" style="height: 24px;">
                                    <br> <strong>Register</strong></a></li>
                            @endif
                        </ul>
                    </div>

                </div>


            </div>
        </nav>

    </header>