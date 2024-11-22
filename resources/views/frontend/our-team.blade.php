@include('frontend.layouts.header')
    <!-- section start -->

    <section class="">
        <div class="ourteam-banner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center ">
                    <h1 class="team1 text-white">Our Team</h1>
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
                @foreach ($team as $res)
                @php
                    $teams = Modules\Blog\App\Models\TeamTranslation::where(['blog_id' => $res->id])->first();
                @endphp
                <div class="col-md-4 mb-4">
                    <div class="card p-3 text-center card-team">
                        <img src="{{ asset($res->image) }}" alt="" class="img-fluid">
                        <div class="card-body">
                            <h1>{{$teams->title}}</h1>
                            <h3>{!!clean($teams->description)!!}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="red-section">

        <div class="container">
            <div class="row my-5">
                <div class="col-md-6">
                    <h2 class="fw-bold text-white">Meet The Professionals Team </h2>
                </div>
    
                <div class="col-md-6">
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>

            <div class="row">
               
                <div class="col-md-4 mb-2">
                    <div class="bg-white p-4" style="border-radius: 20px;">
                        <h2>What is Lorem Ipsum?</h2>
                        <p>I will let my mum know about this, she could really make use of software! Very easy
                            to use. Since I invested in software </p>
                        <div class="d-flex gap-2">
                            <h5>Ronald Richards <span><img src="{{ asset('main-frontend/img/stars.png')}}" alt="" class="img-fluid"></span> <br><span>Gillette</span> </h5>
                            <p></p>
                        </div>
                    </div>
                </div>

               
                <div class="col-md-4 mb-2">
                    <div class="bg-white p-4" style="border-radius: 20px;">
                        <h2>What is Lorem Ipsum?</h2>
                        <p>I will let my mum know about this, she could really make use of software! Very easy
                            to use. Since I invested in software </p>
                        <div class="d-flex gap-2">
                            <h5>Ronald Richards <span><img src="{{ asset('main-frontend/img/stars.png')}}" alt="" class="img-fluid"></span> <br><span>Gillette</span> </h5>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <div class="bg-white p-4" style="border-radius: 20px;">
                        <h2>What is Lorem Ipsum?</h2>
                        <p>I will let my mum know about this, she could really make use of software! Very easy
                            to use. Since I invested in software </p>
                        <div class="d-flex gap-2">
                            <h5>Ronald Richards <span><img src="{{ asset('main-frontend/img/stars.png')}}" alt="" class="img-fluid"></span> <br><span>Gillette</span> </h5>
                            <p></p>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </section>

    <!-- section end -->
    @include('frontend.layouts.footer')