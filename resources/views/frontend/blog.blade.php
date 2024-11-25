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
                <div class="col-md-6">
                    <h2 class="fw-bold">Blogs</h2>
                </div>

                <div class="col-md-6">
                    <p>Let’s explore some of the best business and investment opportunities for UK investors.</p>
                </div>
            </div> -->

        <div class="row my-5">

            @foreach ($blogs as $res)
                <div class="col-md-4 mb-4">
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

            {{-- <div class="text-center">
                <button class="btn btn-red">View more</button>
               </div> --}}


        </div>
    </div>
</section>

<!-- section end -->
@include('frontend.layouts.footer')
