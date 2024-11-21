@include('frontend.layouts.header')
    <!-- section start -->

    <section class="">
        <div class="ourteam-banner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center ">
                    <h1 class="team1 text-white">Contact Us</h1>
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
            <div class="row my-5  shadow p-3">
                <div class="col-md-6 mb-4">
                       <img src="{{ asset('main-frontend/img/map.png')}}" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h3>Contact Information</h3>
                    <p>Say something to start a live chat!</p>

                    <ul class="list-unstyled" style="line-height: 30px;">
                        <li><span><img src="{{ asset('main-frontend/img/phone_call.png')}}" alt=""></span> +1012 3456 789</li>
                        <li><span><img src="{{ asset('main-frontend/img/email.png')}}" alt=""></span> demo@gmail.com</li>
                        <li><span><img src="{{ asset('main-frontend/img/map-icon.png')}}" alt=""></span> 132 Dartmouth Street Boston, Massachusetts 02156 United States</li>
                    </ul>

                    <div class="row my-5">
                        <form action=""></form>
                        <div class="col-md-6">                            
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="email" class="border-bottom-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                </div>                          
                        </div>

                        <div class="col-md-6">                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                <input type="email" class="border-bottom-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last Name">
                            </div>                          
                        </div>

                        <div class="col-md-6">                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="border-bottom-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>                          
                        </div>

                        <div class="col-md-6">                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                <input type="phone" class="border-bottom-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="phone">
                            </div>                          
                        </div>
                    <div class="col-md-12">                            
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <input type="email" class="border-bottom-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write your message..">
                        </div>     
                        
                        <div class="text-end">
                            <button class="btn btn-red">Send Message</button>
                        </div>
                     </div>

                    </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    

    <!-- section end -->
    @include('frontend.layouts.footer')