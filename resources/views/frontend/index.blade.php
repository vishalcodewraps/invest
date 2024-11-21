@include('frontend.layouts.header')
    <main class="banner bg-img" style="background-image: url('{{asset('main-frontend/img/banner.png')}}'); height: 567px; width: 100%; background-repeat: no-repeat; background-size: contain; background-position: center right;">
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
    </main>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <h2 class="heading2 mt-4">Our Unique Selling Proposition (USP)</h2>
                    <p class="mt-4 section2p">Invest Connect Marketplace is the first angel investment platform
                        designed
                        with a three-pillar
                        user model to serve investors, entrepreneurs, and professional service providers. By bringing
                        these essential players together on a single, streamlined platform, we offer a comprehensive
                        ecosystem that fuels growth, collaboration, and investment success. Our vision is to establish
                        Invest Connect Marketplace as the leading destination for angel investors and business owners
                        looking to connect and innovate. We’re here to drive unmatched opportunities and transform the
                        investment landscape for everyone involved.</p>

                    <p class="sub-heading"><strong>Join Invest Connect Marketplace Today—Where Opportunity and Growth
                            Converge. Discover the Future of Angel Investing</strong></p>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{asset('main-frontend/img/1.png')}}" alt="" class="img-fluid section2-img">
                </div>
            </div>
        </div>
    </section>

    <section class="red-section">

        <div class="container">
            <div class="row">
                <h2 class="heading3 mt-5 text-white text-center">Exploring Investment Opportunities in the UK?</h2>
                <p class="para3 text-center mt-3 mb-5 text-white">Explore curated UK pitch decks from promising
                    entrepreneurs, poised to make a lasting impact</p>

                <div class="col-md-4">

                    <div class="card p-4 ">
                        <img src="{{asset('main-frontend/img/i1.jpg')}}" class="card-img-top border border-1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-3">The Flying Pigeon</h5>
                            <p><span><i class="fa-solid fa-location-dot"></i></span> North East, United Kingdom</p>
                            <p class="card-text" style="text-align:justify">A retail-tech solution for the off-trade wine industry. Our tool optimises retailer’s marketing & sales efforts, increasing market share, basket value, customer visit frequency & satisfaction. Raised £290,000</p>

                            <p class="key"><strong>Key Metrics</strong></p>

                            <ul class="list-unstyled">
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Established trading business with working platform and reader base</span>
                                    
                                </li>
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Key partnerships in process for mutual referrals and revenue</span>
                                    
                                </li>
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Test marketing under way and first sign ups of new offer achieved</span>
                                    
                                </li>
                            </ul>

                            <div class="text-center">
                                <a href="#" class="btn btn-white text-red mt-3">View Full Pitch Deck</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-4">

                    <div class="card p-4 ">
                        <img src="{{asset('main-frontend/img/i2.jpg')}}" class="card-img-top border border-1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-3">Corkable</h5>
                            <p><span><i class="fa-solid fa-location-dot"></i></span> Iceland, Iceland</p>
                            <p class="card-text" style="text-align:justify">We are publishing a white-label APP that co-opts rental agencies, tour operators and travel agencies with AI-driven tour operators and travel itineraries for AI-driven tour operators and travel their users.</p>

                            <p class="key"><strong>Key Metrics</strong></p>

                            <ul class="list-unstyled">
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Our software is 98% complete -- this round of equity drives positive cash</span>
                                    
                                </li>
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">We have already booked 20 clients with signed agreements</span>
                                    
                                </li>
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">As an early investor, the leverage and returns are exceptional (ROI 100%+)</span>
                                    
                                </li>
                            </ul>

                            <div class="text-center ">
                                <a href="#" class="btn btn-white text-red mt-3">View Full Pitch Deck</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-4">

                    <div class="card p-4 ">
                        <img src="{{asset('main-frontend/img/i3.jpg')}}" class="card-img-top border border-1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-3">Financial Markets Trading</h5>
                            <p><span><i class="fa-solid fa-location-dot"></i></span> North East, United Kingdom</p>
                            <p class="card-text" style="text-align:justify">Having successfully navigated the World's Financial Markets for over 8 years. I'm now looking to expand my current investment Delivering returns of up to 3% per month to both existing and new clients.</p>

                            <p class="key"><strong>Key Metrics</strong></p>

                            <ul class="list-unstyled">
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Established trading business with working platform and reader base</span> 
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Key partnerships in process for mutual referrals and revenue</span> 
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Test marketing under way and first sign ups of new offer achieved</span>  
                                </li>

                            </ul>

                            <div class="text-center ">
                                <a href="#" class="btn btn-white text-red mt-3">View Full Pitch Deck</a>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="my-5 text-center">
                    <button class="btn btn-light py-3 px-4 text-red Investment-btn">View more Investment
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
          
                        <div class="slider-container">
                            <div class="three-row-slider slider-2">
                                <div><img src="{{asset('main-frontend/img/bbc.svg')}}" alt="Slide 1"></div>
                                <div><img src="{{asset('main-frontend/img/bloomberg.svg')}}" alt="Slide 2"></div>
                                <div><img src="{{asset('main-frontend/img/business-insider.svg')}}" alt="Slide 3"></div>
                                <div><img src="{{asset('main-frontend/img/entrepreneur.svg')}}" alt="Slide 4"></div>
                                <div><img src="{{asset('main-frontend/img/financial-times.svg')}}" alt="Slide 5"></div>
                                <div><img src="{{asset('main-frontend/img/forbes.svg')}}" alt="Slide 6"></div>
                                <div><img src="{{asset('main-frontend/img/startups.svg')}}" alt="Slide 7"></div>
                                <div><img src="{{asset('main-frontend/img/techcrunch.svg')}}" alt="Slide 8"></div>
                                <div><img src="{{asset('main-frontend/img/the-guardian.svg')}}" alt="Slide 9"></div>
                                <div><img src="{{asset('main-frontend/img/the-times.svg')}}" alt="Slide 10"></div>
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
                <p class="mt-4 section2p text-center">We are proud to collaborate with some of the most prestigious organizations worldwide. Our trusted partners span industries including media, technology, finance, and entrepreneurship, showcasing our commitment to quality and innovation. By working together, we aim to provide our audience with the latest insights, opportunities, and services that drive success.</p>

                <div class="col-md-4">
                    <div class="bg-light shadow border border-2 my-3 text-center p-4 Partner-box">

                        <h3>Why Partner with Invest Connect</h3>


                          <ul class="list-unstyled">
                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Access to a Thriving Community</span>                                    
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Collaborate and Grow</span>                                    
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Lead in Innovation</span>                                    
                                </li>

                                <li class="mb-3 item-text">
                                <span class="bg-icon"><i class="fa-solid fa-check text-white"></i></span>
                                <span class="text">Scalable Opportunities</span>                                    
                                </li>

                            </ul>



                    </div>
                </div>

                <div class="col-md-7">

                        <div class="slider-container">
                            <div class="three-row-slider slider-1">
                            <div><img src="{{asset('main-frontend/img/bloomberg.svg')}}" alt="Slide 2"></div>
                                <div><img src="{{asset('main-frontend/img/business-insider.svg')}}" alt="Slide 3"></div>
                                <div><img src="{{asset('main-frontend/img/entrepreneur.svg')}}" alt="Slide 4"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 1"></div>
                                <div><img src="{{asset('main-frontend/img/financial-times.svg')}}" alt="Slide 5"></div>
                                <div><img src="{{asset('main-frontend/img/forbes.svg')}}" alt="Slide 6"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 1"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 1"></div>
                                <div><img src="{{asset('main-frontend/img/em1.png')}}" alt="Slide 1"></div>
                                <div><img src="{{asset('main-frontend/img/startups.svg')}}" alt="Slide 7"></div>
                                <div><img src="{{asset('main-frontend/img/techcrunch.svg')}}" alt="Slide 8"></div>
                                <div><img src="{{asset('main-frontend/img/the-guardian.svg')}}" alt="Slide 9"></div>
                                <div><img src="{{asset('main-frontend/img/the-times.svg')}}" alt="Slide 10"></div>
                              
                              
                            </div>
                        </div>

                    <div class="text-center">
                        <button class="btn btn-danger">Become Part of Our Marketplace</button>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <section class="red-section">

        <div class="container">
            <div class="row text-center " style="border-radius: 30px;">
                <h2 class="heading3 mt-5 text-white text-center">Meet Our Investors</h2>
                <p class="para3 text-center mt-3 mb-5 text-white">
                    Our investors represent diverse industries, 
                    including technology, finance, healthcare, and sustainability, 
                    reflecting a shared commitment to driving meaningful change. 
                    Beyond financial backing, they offer mentorship, guidance, and connections, 
                    helping us navigate challenges and seize opportunities in a rapidly evolving marketplace.</p>

                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="profile-card">
                        <div class="d-flex gap-3">
                            <div><img src="{{asset('main-frontend/img/i22.jpg')}}" alt="Profile Picture"></div>


                            <div class="location flex-column justify-content-start">
                                <h2>Tim R.</h2>
                                <i class="fa-solid fa-location-dot"></i> London, United Kingdom

                            </div>
                        </div>

                        <div class="salary"> <span><img src="{{asset('main-frontend/img/ic.png')}}" class="img-fluid" alt="ic"
                                    style="height: 30px; width: 30px;"></span> &nbsp; £0-£100K</div>
                        <div class="description">
                        I worked in software for over 20 years, helping grow a startup from 2010-2023 and now exited.
                        </div>
                        <div class="expertise-title">Areas of Expertise</div>
                        <div class="expertise-tags">
                            <div class="tag">Pre-Startup/R&D</div>
                            <div class="tag">MVP/Finished Product</div>
                            <div class="tag">Achieving Sales</div>
                            <div class="tag">Breaking Even</div>
                            <div class="tag">Profitable</div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="profile-card">
                        <div class="d-flex gap-3">

                            <div>
                                <img src="{{asset('main-frontend/img/i11.jpg')}}" alt="Profile Picture">
                            </div>
                            <div class="location flex-column justify-content-start">
                                <h2>James</h2>
                                <i class="fa-solid fa-location-dot"></i> Norwich, United Kingdom
                            </div>

                        </div>

                        <div class="salary"> <span><img src="{{asset('main-frontend/img/ic.png')}}" class="img-fluid" alt="ic"
                                    style="height: 30px; width: 30px;"></span> &nbsp; £500K-£10m</div>
                        <div class="description">
                        Business Growth Manager, Business Owner, Startup Owner
                        </div>
                        <div class="expertise-title">Areas of Expertise</div>
                        <div class="expertise-tags">
                            <div class="tag">Pre-Startup/R&D</div>
                            <div class="tag">MVP/Finished Product</div>
                            <div class="tag">Achieving Sales</div>
                            <div class="tag">Breaking Even</div>
                            <div class="tag">Profitable</div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="profile-card">
                        <div class="d-flex gap-3">
                            <div><img src="{{asset('main-frontend/img/admin.png')}}" alt="Profile Picture"></div>
                            <div class="location flex-column justify-content-start">
                                <h2>Mohamed A.</h2>
                                <i class="fa-solid fa-location-dot"></i> High Wycombe, United Kingdom
                            </div>
                        </div>

                        <div class="salary"><span><img src="{{asset('main-frontend/img/ic.png')}}" class="img-fluid" alt="ic"
                                    style="height: 30px; width: 30px;"></span> &nbsp; £200K-£500K</div>
                        <div class="description">
                        23 years in management positions across 4 industries and 4 continents with the last 12 years in the CEO position.
                        </div>
                        <div class="expertise-title">Areas of Expertise</div>
                        <div class="expertise-tags">
                            <div class="tag">Pre-Startup/R&D</div>
                            <div class="tag">MVP/Finished Product</div>
                            <div class="tag">Achieving Sales</div>
                            <div class="tag">Breaking Even</div>
                            <div class="tag">Profitable</div>
                        </div>
                    </div>

                </div>
                <p class="heading4 mt-5 text-white text-center">“Connect with thousands of investors ready to shape
                    your
                    idea and fuel your growth.”</p>

                <div class="my-2">
                    <button class="btn btn-light py-3 px-4 text-red Investment-btn">View Investor Profiles</button>
                </div>
            </div>


            <div class="row bg-white my-4 rounded">

                <div class="col-lg-12 p-4">
                    <h2 class="heading3   text-center">Get Our Professional Services</h2>
                    <p class="mt-3 text-center">Assemble a Team for Your Project: It's Good; Organize Flawlessly: It's
                        Better. Why? To Boost Productivity, Save Time, and Ignite Ideas.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item border border-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button p-1" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    <span><img src="{{asset('main-frontend/img/11.png')}}" alt=""
                                            style="height: 50px; width: 50px;"></span>
                                    &nbsp; Investment & Funding Services
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="expertise-tags">
                                        <div class="tag">Branded Consumer Businesses</div>
                                        <div class="tag">Strategy</div>
                                        <div class="tag">Growth</div>
                                        <div class="tag">Corporate Finance</div>
                                        <div class="tag">Governance</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-3 border border-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed p-1" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <span><img src="{{asset('main-frontend/img/22.png')}}" alt=""
                                            style="height: 50px; width: 50px;"></span>
                                    &nbsp; Business Strategy & Management Consulting
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">

                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="expertise-tags">
                                            <div class="tag">Branded Consumer Businesses</div>
                                            <div class="tag">Strategy</div>
                                            <div class="tag">Growth</div>
                                            <div class="tag">Corporate Finance</div>
                                            <div class="tag">Governance</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border border-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed p-1" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    <span><img src="{{asset('main-frontend/img/33.png')}}" alt=""
                                            style="height: 50px; width: 50px;"></span>
                                    &nbsp; Financial Services
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="expertise-tags">
                                            <div class="tag">Branded Consumer Businesses</div>
                                            <div class="tag">Strategy</div>
                                            <div class="tag">Growth</div>
                                            <div class="tag">Corporate Finance</div>
                                            <div class="tag">Governance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item border border-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button p-1" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapse1">
                                    <span><img src="{{asset('main-frontend/img/44.png')}}" alt=""
                                            style="height: 50px; width: 50px;"></span>
                                    &nbsp; Legal Services
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="expertise-tags">
                                        <div class="tag">Branded Consumer Businesses</div>
                                        <div class="tag">Strategy</div>
                                        <div class="tag">Growth</div>
                                        <div class="tag">Corporate Finance</div>
                                        <div class="tag">Governance</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-3 border border-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed p-1" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                    <span><img src="{{asset('main-frontend/img/55.png')}}" alt=""
                                            style="height: 50px; width: 50px;"></span>
                                    &nbsp; Marketing & Branding
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse">

                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="expertise-tags">
                                            <div class="tag">Branded Consumer Businesses</div>
                                            <div class="tag">Strategy</div>
                                            <div class="tag">Growth</div>
                                            <div class="tag">Corporate Finance</div>
                                            <div class="tag">Governance</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border border-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed p-1" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                    <span><img src="{{asset('main-frontend/img/66.png')}}" alt=""
                                            style="height: 50px; width: 50px;"></span>
                                    &nbsp; Risk Management & Insurance
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="expertise-tags">
                                            <div class="tag">Branded Consumer Businesses</div>
                                            <div class="tag">Strategy</div>
                                            <div class="tag">Growth</div>
                                            <div class="tag">Corporate Finance</div>
                                            <div class="tag">Governance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 p-4 text-center">
                    <button class="btn btn-danger">Find more Services Providers</button>
                </div>


            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row my-4">
                <!-- HTML Structure for Owl Carousel -->
                <div class="col-md-12 red-section p-4" style="border-radius: 10px;">
                <h2 class="heading3 text-white my-4  text-center">Testimonials</h2>
                    <div class="owl-carousel owl-theme">

                        <div class="item">
                            <div class="bg-white p-3" style="border-radius: 20px;">
                                <h3>Great investor to work</h3>
                                <p>Great investor to work with. Great energy. Thoughtful & considerate and asked great questions. Highly recommended!</p>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="{{asset('main-frontend/img/a22.jpg')}}" alt="" class="img-fluid rounded"
                                        style="height: 60px !important; width: 60px !important; border-radius: 50% !important;">
                                    <p>Indiana Gregg<br><span>wedo.ai</span></>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="bg-white p-3" style="border-radius: 20px;">
                                <h3>Igning up to AIN led</h3>
                                <p>Signing up to AIN led to us connecting with one of our biggest investors that was instrumental to helping us close the round.</p>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="{{asset('main-frontend/img/a1.jpg')}}" alt="" class="img-fluid rounded"
                                        style="height: 60px !important; width: 60px !important; border-radius: 50% !important;">
                                    <p>Katie McCourt @ Pantee<br><span>pantee.co.uk</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="bg-white p-3" style="border-radius: 20px;">

                                <h3>AIN is an excellent</h3>
                                <p>AIN is an excellent place to make contact with potential investors for different stages of financing. From small investors to large VC funds.</p>

                                <div class="d-flex gap-2 align-items-center">
                                    <img src="{{asset('main-frontend/img/a33.jpg')}}" alt="" class="img-fluid rounded"
                                        style="height: 60px !important; width: 60px !important; border-radius: 50% !important;">
                                    <p>Alexandros Christodoulakis <br><span>Wealthyhood</span></p>
                                </div>
                            </div>
                        </div>

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
                    <button class="btn btn-danger ">Explore more Industries</button>
                </div>
                
            </div>
        </div>
    </section>
    <section class="red-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2 class="heading3 mt-5 text-white">Join our growing network of UK-based entrepreneurs and angel investors</h2>
                    <p class="para3  mt-3 mb-5 text-white">Angel Investment Network helps investors and entrepreneurs in the United Kingdom facilitate lasting and profitable relationships that build better businesses and brighter futures</p>
                </div>

                <div class="col-md-6 col-sm-12 text-center">
                    <img src="{{asset('main-frontend/img/invest-img.png')}}" alt="" class="img-fluid" style="height:450px;">
                </div>
            </div>
        </div>
    </section>
   @include('frontend.layouts.footer')