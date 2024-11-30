@extends('frontend.layouts.main-layout')

@section('seo')
    <title>{{ $blog->translate->seo_title }}</title>
    <meta name="description" content="{!! strip_tags(clean($blog->translate->seo_description)) !!}">
    <meta name="keywords" content="{{ $blog->translate->seo_keyword }}">
@endsection

@section('content')
<!-- section start -->

<section class="">
    <div class="ourteam-banner d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row text-center ">
                <h1 class="team1 text-white">{{ $blog->translate->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 ">
                <div class="blog-details rounded">
                <h2 class="fw-bold my-3">{{ $blog->translate->title }}</h2>
                    <img src="{{ asset($blog->image) }}" alt="" class="img-fluid rounded">                  
                    <p class="text-white">{!! $blog->translate->short_description !!}</p>
                  
                    
            

                 <!-- Blog Content -->
                 <div class="row blog-content">
                            <!-- Admin Section -->
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="admin-blog">
                                    <img src="{{ asset('main-frontend/img/blog-admin.png') }}" alt="Admin" class="blog-admin-img" style="border-radius: 50%;">
                                    <p class="mb-0">{{ $blog->translate->author }}</p>
                                </div>
                            </div>

                            <!-- Blog Description -->
                            <div class="col-lg-9 col-md-9 col-sm-12">
                            <p> {!! $blog->translate->description !!} </p>                  
                            </div>
                        </div>

                        </div>
            </div>

            <!-- <div class="col-md-4 text-center">
                <div class="blog-details-left  bg-light p-3 rounded">
                    @foreach ($blogs as $res)
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset($res->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="{{ url('blog/' . $res->slug) }}" style="text-decoration: none;">
                                    <h5 class="card-title">{{ Str::words($res->translate->title, 5, '...') }}</h5>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> -->

            <!-- sidebar  start-->
            <div class="col-md-4">
                <div style="border:5px solid black;margin: 40px 0;"></div>
                    <h3 class="my-4">Recent Posts</h3>
                    <ul class="list-unstyled" style="line-height: 29px; margin-left: 30px;">
                        @foreach ($blogs as $res)
                        <li><a href="{{ url('blog/' . $res->slug) }}" style="text-decoration:none;">{{ $res->translate->title}}</a></li>
                        @endforeach
                    </ul>
                  

            </div>
            <!-- sidebar  end-->
            </div>

        </div>
    </div>
</section>
<!-- section end -->
@endsection
