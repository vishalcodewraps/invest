@include('frontend.layouts.header')
    <!-- section start -->

    <section class="">
        <div class="ourteam-banner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center ">
                    <h1 class="team1 text-white">Our Team</h1>
                    <p class="text-white">We are a team of experienced professionals devoted to helping investors, business owners, and marketplaces to achieve suitable shoot-ups in their journey. With proficiency in investment strategies, business development, and market insights. We provide customized solutions to reach beyond heights and to deal with complex challenges. Look forward to partnering with us for expert assistance and effectual outcomes. </p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row my-5">
                <div class="col-md-6">
                    <h2 class="fw-bold">Meet The Professionals Team </h2>
                </div>

                <div class="col-md-6">
                    <p>Our team is not just a team of skillful professionals – These are collective individuals committed to your success. Together we work to seamlessly deliver the expertise and insights you need to take your business to the top. Our team is your trusted partner for innovative investment strategies and scalable business solutions. We provide support and tools to navigate through the evolving market. Let’s work together for long-lasting impacts.</p>
                </div>
            </div>



            <div class="row my-5">
                @foreach ($team as $res)
                @php
                    $teams = Modules\Blog\App\Models\TeamTranslation::where(['blog_id' => $res->id])->first();
                @endphp
                <div class="col-md-4 mb-4">
                    <div class="card p-3 text-center card-team">
                        <img src="{{ asset($res->image) }}" alt="" class="img-fluid" style="border:4px solid #b30000; border-radius: 50%; height: 300px; width: 300px;
    margin: auto;">
                        <div class="card-body">
                            <h1 style="font-size: 20px;font-weight: bold;">{{$teams->title}}</h1>
                            <h3>{!!clean($teams->description)!!}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    
    <!-- section end -->
    @include('frontend.layouts.footer')