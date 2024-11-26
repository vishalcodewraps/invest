@include('frontend.layouts.header')
<!-- section start -->
 <section class="">
        <div class="ourteam-banner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center ">
                    <h1 class="team1 text-white">News</h1>
                    <p class="text-white">Stay informed with our curated collection of the latest news articles. Covering a range of topics, our updates are designed to keep you in the loop on industry trends, market insights, and breaking stories that matter most to you</p>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="row my-5">

                  <div class="col-md-4 mb-4">
                    <a href="https://ffnews.com/newsarticle/funding/first-mover-invest-connect-marketplace-unites-investors-with-visionary-entrepreneurs/" class="text-decoration-none">
                        <div class="card p-3 blog-card">
                            <img src="{{ asset('main-frontend/img/news.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">First Mover, Invest Connect Marketplace, Unites Investors With Visionary Entrepreneurs</h5>
                            </div>
                        </div>
                    </a>
                 </div>
            

                <div class="col-md-4 mb-4">
                    <a href="https://www.investopedia.com/terms/f/fintech.asp" class="text-decoration-none">
                        <div class="card p-3 blog-card">
                            <img src="{{ asset('main-frontend/img/news2.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Financial Technology (Fintech): Its Uses and Impact on Our Lives</h5>
                            </div>
                        </div>
                    </a>
                </div>
               <div class="text-center">
                <button class="btn btn-red">View more</button>
               </div>
                
               
            </div>
        </div>
    </section>

    <!-- section end -->
    @include('frontend.layouts.footer')