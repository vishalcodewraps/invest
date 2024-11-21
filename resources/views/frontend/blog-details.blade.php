@include('frontend.layouts.header')
    <!-- section start -->

    <section class="">
        <div class="ourteam-banner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center ">
                    <h1 class="team1 text-white">Blog Details</h1>
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
                <div class="col-md-8 ">
                    <div class="blog-details bg-light p-4 rounded">
                        <img src="{{ asset('main-frontend/img/blog-details.jpg')}}" alt="" class="img-fluid rounded">

                        <h2 class="fw-bold my-3">What is Lorem Ipsum?</h2>

                        <p> 
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, dolore impedit
                            repellendus magnam saepe, explicabo quod eius ipsa, distinctio suscipit error? Architecto ut
                            impedit sint exercitationem repudiandae necessitatibus ipsa! Quibusdam, architecto? Ut saepe
                            dolores iusto ea! Non aspernatur repudiandae deleniti quis explicabo, fugiat minus, optio
                            blanditiis iure quae quisquam fugit debitis, eaque pariatur necessitatibus soluta inventore
                            animi eligendi totam obcaecati sapiente culpa? Odit, laudantium saepe? Quam accusantium
                            sapiente eaque dolore aperiam esse ex, aliquid, perspiciatis impedit repellat, odio modi
                            iure doloremque sunt voluptatum nisi! Earum accusamus iusto sapiente.
                        </p>

                        <h4 class="fw-bold my-3">What is Lorem Ipsum?</h4>

                        <div class="row align-items-center">

                            <div class="col-md-5 m-2 p-3 bg-white rounded">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                      <img src="{{ asset('main-frontend/img/card.png')}}"  class="img-fluid" style="height: 100%; width: 150px;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam enim laboriosam reiciendis rerum architecto ratione perspiciatis provident similique velit placeat?</p>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-5 m-2 p-3 bg-white rounded bg-light">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                      <img src="{{ asset('main-frontend/img/card.png')}}"  class="img-fluid" style="height: 100%; width: 150px;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                      <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam enim laboriosam reiciendis rerum architecto ratione perspiciatis provident similique velit placeat?</p>
                                    </div>
                                  </div>
                            </div>
                            

                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="blog-details-left  bg-light p-3 rounded">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('main-frontend/img/image-25.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                </div>

            </div>
        </div>


    </section>



    <!-- section end -->
    @include('frontend.layouts.footer')