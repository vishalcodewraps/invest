@include('frontend.layouts.header')
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
                <div class="blog-details bg-light p-4 rounded">
                    <img src="{{ asset($blog->image) }}" alt="" class="img-fluid rounded">
                    <h2 class="fw-bold my-3">{{ $blog->translate->title }}</h2>
                    <p class="text-white">{!! $blog->translate->short_description !!}</p>
                    <p>
                        {!! $blog->translate->description !!}
                    </p>
                </div>
            </div>

            <div class="col-md-4 text-center">
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
            </div>

        </div>
    </div>
</section>
<!-- section end -->
@include('frontend.layouts.footer')
