@extends('frontend.layouts.main-layout')

@section('seo')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
    <meta name="keywords" content="{{ $seo_setting->seo_keyword }}">
@endsection

@section('content')
    

    <!-- <main class="banner bg-img" style="background-image: url('{{asset('main-frontend/img/banner.png')}}'); height: 567px; width: 100%; background-repeat: no-repeat; background-size: contain; background-position: center right;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 col-sm-12">
                    <h1 class="h1-heading">
                        We Connect UK Entrepreneurs, Angel Investors, & Professional Service Providers
                    </h1>

                    <div class="d-flex gap-2 mt-5 " style="align-items: center;">
                        <h4 class="text-white">I am looking to</h4>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Investor
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Investor</a></li>
                                <li><a class="dropdown-item" href="#">Business Owner</a></li>
                                <li><a class="dropdown-item" href="#">Our Marketplace</a></li>
                            </ul>
                        </div>
                        <img src="{{asset('main-frontend/img/arrow.png')}}" alt="" class="img-fluid" style="height: 50px;">
                    </div>
                </div>


            </div>
        </div>
    </main> -->

    <main class="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('main-frontend/img/Homepage2020.png')}}" class="d-block w-100 banner-img" alt="..." >
            <div class="carousel-caption container">
              
                <div class="banner-heading">
                <h1 class="h1-heading">
                    We Connect UK Entrepreneurs, Angel Investors, & Professional Service Providers
                </h1>
               </div>
                <div class="d-flex gap-2 Investor-button" style="align-items: center;">
                        <div class="p-2" style="background:white;">
                        <h4  class="m-0 text-white looking-h4" style="color:#B91C1C !important;">I am looking to connect with</h4>
                        </div>
                        
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-btn " data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Investor
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Investor</a></li>
                                <li><a class="dropdown-item" href="#">Business Owner</a></li>
                                <li><a class="dropdown-item" href="#">Marketplace Support</a></li>
                            </ul>
                        </div>

                        <img src="{{asset('main-frontend/img/arrow.png')}}" alt="" class="img-fluid d-none d-md-none d-lg-block" style="height: 60px;">
                    </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('main-frontend/img/Frame%20403.png')}}" class="d-block w-100 banner-img" alt="...">
            <div class="carousel-caption container">
               <div class="banner-heading">
               <h1 class="h1-heading">
                Bridging UK Entrepreneurs, Investors & Industry Experts <Br>
                Spark Innovation, Expedite Growth, and Achieve Unmatched Success!</Br>
                </h1>
               </div>

                <div class="d-flex gap-2 Investor-button" style="align-items: center;">
                        
                <div class="p-2" style="background:white;">
                        <h4  class="m-0 text-white looking-h4" style="color:#B91C1C !important;">I am looking to connect with</h4>
                        </div>
                        
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-btn " data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Investor
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Investor</a></li>
                                <li><a class="dropdown-item" href="#">Business Owner</a></li>
                                <li><a class="dropdown-item" href="#">Marketplace Support</a></li>
                            </ul>
                        </div>

                        <img src="{{asset('main-frontend/img/arrow.png')}}" alt="" class="img-fluid d-none d-md-none d-lg-block" style="height: 50px;">
                    </div>
                
            </div>
        </div>
        
             <div class="carousel-item">
            <img src="{{asset('main-frontend/img/Frame%20405.png')}}" class="d-block w-100 banner-img" alt="...">
            <div class="carousel-caption container">
               

                <div class="banner-heading">
                <h1 class="h1-heading">
                We bring together people fostering meaningful connections and collaboration.
                </h1>
               </div>

                <div class="d-flex gap-2 Investor-button" style="align-items: center;">
                        
                <div class="p-2" style="background:white;">
                        <h4  class="m-0 text-white looking-h4" style="color:#B91C1C !important;">I am looking to connect with</h4>
                        </div>

                        
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-btn " data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Investor
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Investor</a></li>
                                <li><a class="dropdown-item" href="#">Business Owner</a></li>
                                <li><a class="dropdown-item" href="#">Marketplace Support</a></li>
                            </ul>
                        </div>

                        <img src="{{asset('main-frontend/img/arrow.png')}}" alt="" class="img-fluid d-none d-md-none d-lg-block" style="height: 50px;">
                    </div>

            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('main-frontend/img/Homepage-new.png')}}" class="d-block w-100 banner-img" alt="...">
            <div class="carousel-caption container">
               

                <div class="banner-heading">
                <h1 class="h1-heading">
                Unlock Opportunities, <br> Fuel Growth, and Achieve Success!
                </h1>
               </div>

                <div class="d-flex gap-2 Investor-button" style="align-items: center;">
                        
                <div class="p-2" style="background:white;">
                        <h4  class="m-0 text-white looking-h4" style="color:#B91C1C !important;">I am looking to connect with</h4>
                        </div>

                        
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-btn " data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Investor
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Investor</a></li>
                                <li><a class="dropdown-item" href="#">Business Owner</a></li>
                                <li><a class="dropdown-item" href="#">Marketplace Support</a></li>
                            </ul>
                        </div>

                        <img src="{{asset('main-frontend/img/arrow.png')}}" alt="" class="img-fluid d-none d-md-none d-lg-block" style="height: 50px;">
                    </div>

            </div>
        </div>

        
   
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</main>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <h2 class="heading2 mt-4"> Our Unique Selling Proposition (USP)</h2>
                    <p class="mt-4 section2p">Invest Connect Marketplace is an AI-driven, sustainable investment  ecosystem built to empower entrepreneurs, investors, and service professionals through strategic partnerships and comprehensive support. By combining tools, resources, and expert guidance within a 360-degree ecosystem, we offer seamless connections between investors and business owners. Through innovative technology, Invest Connect Marketplace delivers accurate matches, strategic insights, and tailored solutions, all geared toward nurturing sustainable growth. Our mission is to foster a thriving, collaborative environment where partnerships, innovation, and funding converge to unlock new opportunities for success.</p>

                    <p class="sub-heading"><strong>Join Invest Connect Marketplace Today—Where Opportunity and Growth
                            Converge. Discover the Future of Angel Investing</strong></p>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{asset('main-frontend/img/new-usp.jpg')}}" alt="" class="img-fluid section2-img" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>

    <section class="red-section" style="background-color:#ecf0f1;">

        <div class="container">
            <div class="row">
                <h2 class="heading3 mt-5 text-dark text-center">Explore Investment Opportunities</h2>
                <p class="para3 text-center mt-3 mb-5 text-dark">At the heart of Invest Connect lies a clear vision: to create a world where access to capital and innovation knows no boundaries. By connecting ambitious entrepreneurs with investors seeking to make a difference, we build an ecosystem that transforms ideas into reality. Whether you’re a startup founder with a revolutionary vision or an investor passionate about driving change, our platform connects dreams with possibilities.</p>

                <div class="col-md-6 col-sm-12 col-lg-4 mb-3">

                    <div class="card p-1 home-card">
                        <img src="{{asset('main-frontend/img/i1.jpg')}}" class="card-img-top border border-1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title "> &nbsp; Start Strong with Invest Connect Marketplace</h5>
                            <p style="margin-bottom:0.8rem;"><span><i class="fa-solid fa-location-dot"></i></span> North East, United Kingdom</p>
                            <p class="card-text" style="text-align:justify">Take the first steps toward success with streamlined solutions tailored for entrepreneurs and investors</p>

                            <p class="key"><strong>Key Metrics</strong></p>

                            <ul class="list-unstyled" style="margin-top: 12px;">
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Incorporate Your Business with Ease</span>
                                    
                                </li>
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Craft Your Vision</span>
                                    
                                </li>
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Plan for Growth</span>
                                    
                                </li>
                            </ul>

                            <div class="text-center Pitch-footer">
                                <a href="#" class="btn btn-white text-red mt-3">View Full Pitch Deck</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-6 col-sm-12 col-lg-4 mb-3">

                <div class="card p-1 home-card">
                        <img src="{{asset('main-frontend/img/i2.jpg')}}" class="card-img-top border border-1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Unlock Your Growth Potential</h5>
                            <p style="margin-bottom:0.8rem;"><span><i class="fa-solid fa-location-dot"></i></span> &nbsp; Iceland, Iceland</p>
                            <p class="card-text" style="text-align:justify;">Take your journey to the next level with tools and resources tailored to optimise every step of your growth</p>

                            <p class="key"><strong>Key Metrics</strong></p>

                            <ul class="list-unstyled" style="margin-top: 12px;">
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Build a Professional Profile</span>
                                    
                                </li>
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Extend Your Reach</span>
                                    
                                </li>
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Connect with Accelerators and Programs</span>
                                    
                                </li>
                            </ul>

                            <div class="text-center Pitch-footer">
                                <a href="#" class="btn btn-white text-red mt-3">View Full Pitch Deck</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-6 col-sm-12 col-lg-4">

                <div class="card p-1 home-card">
                        <img src="{{asset('main-frontend/img/i3.jpg')}}" class="card-img-top border border-1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Financial Markets Trading</h5>
                            <p style="margin-bottom:0.5rem;"><span><i class="fa-solid fa-location-dot"></i></span> &nbsp; North East, United Kingdom</p>
                            <p class="card-text" style="text-align:justify;">Having successfully navigated the World's Financial Markets for over 8 years.</p>

                            <p class="key"><strong>Key Metrics</strong></p>

                            <ul class="list-unstyled" style="margin-top: 12px;">
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Established trading platform readership.</span>
                                    
                                </li>
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Key partnerships in process for mutual</span>
                                    
                                </li>
                                <li class="mb-1 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text1">Test marketing under way</span>
                                    
                                </li>
                            </ul>

                            <div class="text-center Pitch-footer">
                                <a href="#" class="btn btn-white text-red mt-3">View Full Pitch Deck</a>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="my-5 text-center">
                    
                     <button class="btn btn-light py-3 px-4  Investment-btn" style="background: #b91c1c; color:white;">View more Investment
                        Oppourtunities</button>
               
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h2 class="heading2 mt-4 text-center">Featured In</h2>
                <hr>
                        <div class="slider-container">
                            <div class="three-row-slider slider-2">
                                <div><img src="{{asset('main-frontend/img/bbc.svg')}}" alt="Slide 1"></div>
                                <div><img src="{{asset('main-frontend/img/bloomberg.png')}}" alt="Slide 2"></div>
                                <div><img src="{{asset('main-frontend/img/business-insider.webp')}}" alt="Slide 3"></div>
                                <div><img src="{{asset('main-frontend/img/entrepreneur.png')}}" alt="Slide 4"></div>
                                <div><img src="{{asset('main-frontend/img/financial-times.png')}}" alt="Slide 5"></div>
                                <div><img src="{{asset('main-frontend/img/forbes.png')}}" alt="Slide 6"></div>
                                <div><img src="{{asset('main-frontend/img/techcrunch.png')}}" alt="Slide 8"></div>
                                <div><img src="{{asset('main-frontend/img/the-guardian.png')}}" alt="Slide 9"></div>
                                <div><img src="{{asset('main-frontend/img/startup.jpg')}}" alt="Slide 8"></div>
                                <div><img src="{{asset('main-frontend/img/business-insider.webp')}}" alt="Slide 3"></div>
                           
                                

                                

                          
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="heading2 mt-4 text-center">Our Trusted Partners</h2>
                <p class="mt-4 section2p text-center">Our investors represent diverse industries, including technology, finance, healthcare, and sustainability, reflecting a shared commitment to driving meaningful change. Beyond financial backing, they offer mentorship, guidance, and connections, helping us navigate challenges and seize opportunities in a rapidly evolving marketplace.</p>

                <div class="col-md-4">
                    <div class="bg-light shadow border border-2 my-3 text-center p-4 Partner-box">

                        <h3 style="font-size: 20px; font-weight:bold;">Why Invest Connect Marketplace Stands Out</h3>


                          <ul class="list-unstyled mt-4">
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text" style="font-size: 19px;">A Marketplace of Possibilities</span>                                    
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text" style="font-size: 19px;">Transparent Processes</span>                                    
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text" style="font-size: 19px;">A Global Network of Innovators</span>                                    
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text" style="font-size: 19px;">Tailored Support Services</span>                                    
                                </li>

                            </ul>



                    </div>
                </div>

                <div class="col-md-7">

                        <div class="slider-container">
                            <div class="three-row-slider slider-1">
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 1"></div>
                                <div><img src="{{asset('main-frontend/img/bbc.svg')}}" alt="Slide 2"></div>
                                <div><img src="{{asset('main-frontend/img/bloomberg.png')}}" alt="Slide 3"></div>
                                <div><img src="{{asset('main-frontend/img/business-insider.webp')}}" alt="Slide 4"></div>
                                <div><img src="{{asset('main-frontend/img/entrepreneur.png')}}" alt="Slide 5"></div>
                                <div><img src="{{asset('main-frontend/img/financial-times.png')}}" alt="Slide 6"></div>
                                <div><img src="{{asset('main-frontend/img/forbes.png')}}" alt="Slide 7"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 8"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 9"></div>
                                <div><img src="{{asset('main-frontend/img/techcrunch.png')}}" alt="Slide 10"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 11"></div>
                                <div><img src="{{asset('main-frontend/img/the-guardian.png')}}" alt="Slide 12"></div>
                                <div><img src="{{asset('main-frontend/img/the-times.png')}}" alt="Slide 13"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 8"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 9"></div>
                              
                              
                            </div>
                        </div>
                </div>
                
                <div class="col-md-12 text-center">
                    
                    <p class="heading4 mt-5 text-dark text-center">Build the perfect team and organize seamlessly to boost productivity, save time, and spark innovation—explore more to unlock your potential</p>
                    
                    <button class="btn btn-light py-3 px-4  Investment-btn" style="background: #b91c1c; color:white;">Become Part of Our Marketplace</button>
                </div>

            </div>
        </div>
    </section>

    <section style="background-color:#ecf0f1; margin:50px 0;">

    <div class="container">
        
<div class="row text-center py-5">
<div class="row">
    <div class="col mb-2">
        <div class="counter">
            <h2 class="timer count-title count-number" data-to="200" data-speed="1500" style="color:#8e44ad;">0</h2>
            <p class="count-text m-0" style="color:#8e44ad;">Users</p>
        </div>
    </div>
    <div class="col mb-2">
        <div class="counter">
            <h2 class="timer count-title count-number" data-to="25" data-speed="1500" style="color:#e67e22;">0</h2>
            <p class="count-text m-0" style="color:#e67e22;">Investors</p>
        </div>
    </div>
    <div class="col mb-2">
        <div class="counter">
            <h2 class="timer count-title count-number" data-to="50" data-speed="1500" style="color:#2ecc71;">0</h2>
            <p class="count-text m-0" style="color:#2ecc71;">Partners</p>
        </div>
    </div>
    <div class="col mb-2">
        <div class="counter">
            <h2 class="timer count-title count-number" data-to="45" data-speed="1500" style="color:#c0392b;">0</h2>
            <p class="count-text m-0" style="color:#c0392b;">Pitches</p>
        </div>
    </div>
    <div class="col mb-2">
        <div class="counter">
            <h2 class="timer count-title count-number" data-to="30" data-speed="1500" style="color:#3498db;">0</h2>
            <p class="count-text m-0" style="color:#3498db;">Service Providers</p>
        </div>
    </div>
</div>


    </div>

    </section>

    <section class="red-section" style="background-color:#ecf0f1;">

        <div class="container">
            <div class="row text-center " style="border-radius: 30px;">
                <h2 class="heading3 mt-5 text-dark text-center">Meet Our Investors</h2>
                <p class="para3 text-center mt-3 mb-5 text-dark">
                    Our investors represent diverse industries, 
                    including technology, finance, healthcare, and sustainability, 
                    reflecting a shared commitment to driving meaningful change. 
                    Beyond financial backing, they offer mentorship, guidance, and connections, 
                    helping us navigate challenges and seize opportunities in a rapidly evolving marketplace.</p>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="profile-card ">
                        <div class="profile-card-content">
                                <div class="d-flex gap-3">
                                    <div><img src="{{asset('main-frontend/img/i22.jpg')}}" alt="Profile Picture"></div>


                                    <div class="location flex-column justify-content-start">
                                        <h2>Inv0001</h2>
                                        <i class="fa-solid fa-location-dot"></i> London, United Kingdom

                                    </div>
                                </div>

                                <div class="salary"> <span><img src="{{asset('main-frontend/img/ic.png')}}" class="img-fluid" alt="ic"
                                            style="height: 30px; width: 30px;"></span> &nbsp; £0 - £100K</div>
                                <div class="description">
                                 I helped scale the business successful.
                                </div>
                                <div class="expertise-div">
                                    <div class="expertise-title">Areas of Interests </div>
                                    <div class="expertise-tags">
                                        <div class="tag">Pre-Startup/R&D</div>
                                        <div class="tag">MVP/Finished Product</div>
                                        <div class="tag">Achieving Sales</div>
                                        <div class="tag">Breaking Even</div>
                                        <div class="tag">Profitable</div>
                                    </div>
                                </div>

                                <div class="p-2 text-end">
                                    <button class="btn btn-danger">Find out more</button>
                                </div>
                        </div>                   
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="profile-card">
                        <div class="d-flex gap-3">

                            <div>
                                <img src="{{asset('main-frontend/img/i11.jpg')}}" alt="Profile Picture">
                            </div>
                            <div class="location flex-column justify-content-start">
                                <h2>Inv0002</h2>
                                <i class="fa-solid fa-location-dot"></i> Norwich, United Kingdom
                            </div>

                        </div>

                        <div class="salary"> <span><img src="{{asset('main-frontend/img/ic.png')}}" class="img-fluid" alt="ic"
                                    style="height: 30px; width: 30px;"></span> &nbsp; £500K - £10m</div>
                        <div class="description">
                        I’ve recently exited and am  ventures.
                        </div>
                        <div class="expertise-div">
                            <div class="expertise-title">Areas of Interests </div>
                            <div class="expertise-tags">
                                <div class="tag">Pre-Startup/R&D</div>
                                <div class="tag">MVP/Finished Product</div>
                                <div class="tag">Achieving Sales</div>
                                <div class="tag">Breaking Even</div>
                                <div class="tag">Profitable</div>
                            </div>
                        </div>

                        <div class="p-2 text-end">
                                    <button class="btn btn-danger">Find out more</button>
                                </div>
                      
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="profile-card">
                        <div class="d-flex gap-3">
                            <div><img src="{{asset('main-frontend/img/admin.png')}}" alt="Profile Picture"></div>
                            <div class="location flex-column justify-content-start">
                                <h2>Inv0003</h2>
                                <i class="fa-solid fa-location-dot"></i>Wycombe,United Kingdom
                            </div>
                        </div>

                        <div class="salary"><span><img src="{{asset('main-frontend/img/ic.png')}}" class="img-fluid" alt="ic"
                                    style="height: 30px; width: 30px;"></span> &nbsp; £200K - £500K</div>
                        <div class="description">
                        I have over two decades of experience.
                        </div>
                        <div class="expertise-div">
                            <div class="expertise-title">Areas of Interests </div>
                            <div class="expertise-tags">
                                <div class="tag">Pre-Startup/R&D</div>
                                <div class="tag">MVP/Finished Product</div>
                                <div class="tag">Achieving Sales</div>
                                <div class="tag">Breaking Even</div>
                                <div class="tag">Profitable</div>
                            </div>
                        </div>

                        <div class="p-2 text-end">
                                    <button class="btn btn-danger">Find out more</button>
                                </div>

                    </div>

                </div>
                
                   <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="profile-card">
                        <div class="d-flex gap-3">
                            <div><img src="{{asset('main-frontend/img/inv004.jpg')}}" alt="Profile Picture"></div>
                            <div class="location flex-column justify-content-start">
                                <h2>Inv0004</h2>
                                <i class="fa-solid fa-location-dot"></i>Wycombe, United Kingdom
                            </div>
                        </div>

                        <div class="salary"><span><img src="{{asset('main-frontend/img/ic.png')}}" class="img-fluid" alt="ic"
                                    style="height: 30px; width: 30px;"></span> &nbsp; £200K - £500K</div>
                        <div class="description">
                        There are many variations of passages.
                        </div>
                        <div class="expertise-div">
                            <div class="expertise-title">Areas of Interests </div>
                            <div class="expertise-tags">
                                <div class="tag">Pre-Startup/R&D</div>
                                <div class="tag">MVP/Finished Product</div>
                                <div class="tag">Achieving Sales</div>
                                <div class="tag">Breaking Even</div>
                                <div class="tag">Profitable</div>
                            </div>
                        </div>

                        <div class="p-2 text-end">
                                    <button class="btn btn-danger">Find out more</button>
                                </div>

                    </div>

                </div>
                
                
                <p class="heading4 mt-5 text-dark text-center">Connect with thousands of investors ready to shape
                    your
                    idea and fuel your growth.</p>

                <div class="my-2">
                    
                    <button class="btn btn-light py-3 px-4  Investment-btn" style="background: #b91c1c; color:white;">View Investor Profiles</button>
                    
                </div>
            </div>
        </div>
    </section>


    <section>
    <div class="container">
    <div class="row bg-white my-4 rounded">
            <!-- Get Our Professional Services start -->
                <div class="col-lg-12 p-4">
                    <h2 class="heading3   text-center">Get Our Professional Services</h2>
                    <p class="mt-3 text-center">Assemble a Team for Your Project: It's Good; Organize Flawlessly: It's
                        Better. Why? To Boost Productivity, Save Time, and Ignite Ideas.</p>
                </div>

                <div class="col-lg-12">
                <!-- Carousel 1 -->
                <div class="owl-carousel carousel-one">
                    <div class="item">

                    <div class="service-card-item" style="background: #74b9ff;">
                        <div class="service-item-heading">
                            <h5 style="margin: 0; padding: 10px 0;">Investment & Funding Services</h5>
                        </div>
                        <div class="service-card-item-inner">
                            <img src="{{asset('main-frontend/img/Investment-Funding-Services.png')}}" alt="The Guardian" class="img-fluid">
                        </div>
                    </div>                   

                    </div>

                                      
                    <div class="item">
                      
                          <div class="service-card-item" style="background: #f39c12;">
                                <div class="service-item-heading">
                                    <h5 style="margin: 0; padding: 10px 0;">Legal Services</h5>
                                </div>
                                <div class="service-card-item-inner">
                                    <img src="{{asset('main-frontend/img/Legal-Services.jpg')}}" alt="The Guardian" class="img-fluid">
                                </div>
                            </div>                

                    </div>

                    <div class="item">
                      
                    <div class="service-card-item" style="background: #1abc9c;">
                        <div class="service-item-heading">
                            <h5 style="margin: 0; padding: 10px 0;">Business Strategy & Management Consulting</h5>
                        </div>
                        <div class="service-card-item-inner">
                            <img src="{{asset('main-frontend/img/Business-Strategy.png')}}" alt="The Guardian" class="img-fluid">
                        </div>
                    </div>                 

                  </div>

                  <div class="item">
                      
                  <div class="service-card-item" style="background: #2980b9;">
                        <div class="service-item-heading">
                            <h5 style="margin: 0; padding: 10px 0;">Marketing & Branding</h5>
                        </div>
                        <div class="service-card-item-inner">
                            <img src="{{asset('main-frontend/img/Marketing-Branding.png')}}" alt="The Guardian" class="img-fluid">
                        </div>
                    </div>                 

                  </div>

                  <div class="item">
                      
                  <div class="service-card-item" style="background: #8e44ad;">
                        <div class="service-item-heading">
                            <h5 style="margin: 0; padding: 10px 0; ">Financial Services</h5>
                        </div>
                        <div class="service-card-item-inner">
                            <img src="{{asset('main-frontend/img/Financial-Services.jpg')}}" alt="The Guardian" class="img-fluid">
                        </div>
                    </div>                 

                  </div>

                  <div class="item">
                      
                  <div class="service-card-item" style="background: #d35400;">
                        <div class="service-item-heading">
                            <h5 style="margin: 0; padding: 10px 0; ">Risk Management & Insurance</h5>
                        </div>
                        <div class="service-card-item-inner">
                            <img src="{{asset('main-frontend/img/Risk-Management-Insurance.jpg')}}" alt="The Guardian" class="img-fluid">
                        </div>
                    </div>               

                  </div>
      
                </div>
                </div>
              
                <div class="col-lg-12 p-4 text-center">

                
                       <button class="btn btn-light py-3 px-4  Investment-btn" style="background: #f39c12;; color:white;">Find more Service Providers</button>
                </div>


            </div>
    </div>
              <!-- Get Our Professional Services end -->
    </section>


    <section style="background-color:#ecf0f1;">
        <div class="container">
            <div class="row my-4">
                <!-- HTML Structure for Owl Carousel -->
                <div class="col-md-12 p-4" style="border-radius: 10px;">
                <h2 class="heading3 text-dark my-4  text-center">Testimonials</h2>
                <div class="owl-carousel carousel-two">
                    @foreach($testimonials as $res)
                    <div class="item">
                    <div class="review-card">
                    <p class="review-content">{{$res->translate->comment}}</p>
                    <div class="review-footer">
                        <img src="{{ asset($res->image) }}" alt="User Image" class="review-image">
                        <div class="review-user-info">
                            <h3>{{$res->translate->name}}</h3>
                            <p>{{$res->translate->designation}}</p>
                        </div>
                    </div>
                </div>
                    </div>
                    @endforeach
                </div>


                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row " style="border:2px solid #B91C1C; border-radius: 10px;">
                <h2 class="heading3 mt-5  text-center">Our Industries</h2>
                <p class="para3 text-center mt-3 mb-5 ">We connect investors with startups and businesses from all
                    sectors to ensure the relationship is valuable to both parties.</p>

                    <div class="row">
                 
                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/444.png')}}" alt="Technology Icon">
                            <strong>Technology</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/555.png')}}" alt="Real Estate Icon">
                            <strong>Real Estate & Property Management</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/111.png')}}" alt="Education Icon">
                            <strong>Education & Edtech</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/222.png')}}" alt="Media Icon">
                            <strong>Media & Entertainment</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Fashion & Beauty</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Media</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Business Services</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Products & Inventions</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Manufacturing & Engineering</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Energy & Natural Resources</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Sales & Marketing</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Transportation</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Food & Beverage</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Retail</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Medical & Sciences</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Hospitality, Restaurants & Bars</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Software</strong>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Technology</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Property</strong>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="industry-item">
                            <img src="{{asset('main-frontend/img/333.png')}}" alt="Agriculture Icon">
                            <strong>Agriculture & Agtech</strong>
                        </div>
                    </div>
                  
                </div>


                <div class="col-md-12 text-center py-3">
                <button class="btn btn-light py-3 px-4  Investment-btn" style="background: #b91c1c; color:white;">Explore more Industries</button>
                             </div>
                
            </div>
        </div>
    </section>
    <section class="red-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2 class="heading3 mt-5 text-white">Ready to launch your dream venture or invest in the next big idea?</h2>
                    <p class="para3  mt-3 mb-5 text-white">Join Invest Connect Marketplace today and take the first step toward achieving your entrepreneurial or investment goals. Whether you're here to launch your dream project, discover high-potential opportunities, or connect with a global network of changemakers, we’re here to support you. <a href="#" class="text-decoration-none "> <strong class="text-white"> Sign up </strong></a> now and be part of a community that fuels innovation and drives meaningful change. </p>
                </div>

                <div class="col-md-6 col-sm-12 text-center">
                    <img src="{{asset('main-frontend/img/invest-img.png')}}" alt="" class="img-fluid" style="height:450px;">
                </div>
            </div>
        </div>
    </section>

    @endsection