@include('frontend.layouts.header')
    <!-- section start -->

    <section class="">
        <div class="ourteam-banner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center ">
                    <h1 class="team1 text-white">Our Blogs</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nulla dolore
                        fuga,
                        exercitationem non laudantium, optio commodi esse, officiis aliquam repellat obcaecati mollitia
                        incidunt quasi rerum est quibusdam cumque voluptate? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Sapiente nulla dolore fuga,
                        exercitationem non laudantium, optio commodi esse, officiis aliquam repellat obcaecati mollitia
                        incidunt quasi rerum est quibusdam cumque voluptate?</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row my-5">
                <div class="col-md-6">
                    <h2 class="fw-bold">Meet The Professionals Team </h2>
                </div>

                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>

            <div class="row my-5">

                @foreach($blogs as $res)

                  <div class="col-md-4 mb-4">
                    <a href="{{url('blog/'.$res->slug)}}" class="text-decoration-none">
                        <div class="card p-3 blog-card">
                            <img src="{{ asset($res->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $res->translate->title }}</h5>
                            <p class="card-text">{!! $res->translate->short_description !!}</p>
                            <a href="{{url('blog/'.$res->slug)}}" class="text-decoration-none card-a"> <span><img src="{{ asset('main-frontend/img/Man.png')}}" alt=""></span> &nbsp; {{ $res->translate->author }}</a>
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