@include('frontend.layouts.header')
<!-- section start -->

<section class="">
    <div class="ourteam-banner d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row text-center ">
                <h1 class="team1 text-white">Our Blogs</h1>
                <p class="text-white">The UK boasts a vibrant economy packed with opportunities. Whether you’re an
                    experienced investor or a beginner, there’s something for everyone. From cutting-edge industries to
                    sustainable ventures, the UK offers promising ways to grow your wealth.
                </p>
            </div>
        </div>
    </div>


    <div class="container">
      
    <!-- <div class="row my-5">
            @foreach ($blogs as $res)
                <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                    <a href="{{ url('blog/' . $res->slug) }}" class="text-decoration-none">
                        <div class="card p-3 blog-card">
                            <img src="{{ asset($res->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::words($res->translate->title, 5, '...') }}</h5>
                                <p class="card-text"> {!! Str::words($res->translate->short_description, 20, '...') !!}</p>
                                @if($res->translate->author!='')<a href="{{ url('blog/' . $res->slug) }}" class="text-decoration-none card-a"> <span><img
                                            src="{{ asset('main-frontend/img/Man.png') }}" alt=""></span> &nbsp;
                                    {{ $res->translate->author }}</a> @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div> -->

         <div class="row blog-card-new">
          
            <!-- blog  start-->
            <div class="col-md-8 col-sm-12"> 

            @foreach ($blogs as $res)
                <a href="{{ url('blog/' . $res->slug) }}" class="text-decoration-none text-black">           
                    <div>
                        <!-- Blog Title -->
                        <h2 class="heading2 mt-4">{{ Str::words($res->translate->title, 5, '...') }}</h2>
                        
                        <!-- Blog Image -->
                        <img src="{{ asset($res->image) }}" alt="Blog Image" class="img-fluid my-3">

                        <!-- Blog Content -->
                        <div class="row blog-content">
                            <!-- Admin Section -->
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="admin-blog">
                                    <img src="{{ asset('main-frontend/img/blog-admin.png') }}" alt="Admin" class="blog-admin-img" style="border-radius: 50%;">
                                    <p class="mb-0">admin</p>
                                    <p class="mb-0">Entrepreneurship, Guest Blog</p>
                                </div>
                            </div>

                            <!-- Blog Description -->
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <p>{!! Str::words($res->translate->short_description, 20, '...') !!}</p>                  
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>  
           
            <!-- sidebar  start-->
            <div class="col-md-4">
                <div style="border:5px solid black;margin: 40px 0;"></div>
                    <h3 class="my-4">Recent Posts</h3>
                    <ul class="list-unstyled" style="line-height: 29px; margin-left: 30px;">
                        <li><a href="#" style="text-decoration:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, id!</a></li>
                        <li><a href="#" style="text-decoration:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, id!</a></li>
                        <li><a href="#" style="text-decoration:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, id!</a></li>
                        <li><a href="#" style="text-decoration:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, id!</a></li>
                    </ul>
                    <div style="border:5px solid black;margin: 40px 0;"></div>
                    <h3 class="my-4">Previous Articles</h3>

                    <select class="form-select" aria-label="Default select example">
                            <option selected>select Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                    </select>

            </div>
            <!-- sidebar  end-->
            </div>

          
            <!-- blog  end -->

           
       
    </div>
</section>

<!-- section end -->
@include('frontend.layouts.footer')
