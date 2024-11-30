@extends('frontend.layouts.main-layout')

@section('seo')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
    <meta name="keywords" content="{{ $seo_setting->seo_keyword }}">
@endsection

@section('content')
    <!-- section start -->

    <section class="">
        <div class="ourteam-banner d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row text-center ">
                    <h1 class="team1 text-white">Contact Us</h1>
                    <p class="text-white">We are here to help you, whether you are an investor, business owner, or marketplace leader. Do you have a query, need support, or looking for exciting opportunities? Our team is 24x7 available to collaborate with people like you. We understand today’s challenges of a fast-paced business environment nowadays and promise you the best to achieve your goals. 

Reach out to us, and know how we can support you in your journey. We are waiting to hear from you!!.
</p>
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
                        <li><span><img src="{{ asset('main-frontend/img/phone_call.png')}}" alt=""></span> +0800 246 5529</li>
                        <li><span><img src="{{ asset('main-frontend/img/email.png')}}" alt=""></span> info@investconnectmarketplace.com</li>
                        <li><span><img src="{{ asset('main-frontend/img/map-icon.png')}}" alt=""></span>  INVEST CONNECT MARKETPLACE LTD  128 CITY ROAD LONDON EC1V2NX</li>
                    </ul>

                    <form action="{{url('send-contact')}}" method="post">
                        @csrf
                    <div class="row my-5">
                        <div class="col-md-6">                            
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="border-bottom-input" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                </div>                          
                        </div>

                        <div class="col-md-6">                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                <input type="text" class="border-bottom-input" name="last_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last Name">
                            </div>                          
                        </div>

                        <div class="col-md-6">                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="border-bottom-input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>                          
                        </div>

                        <div class="col-md-6">                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                <input type="phone" class="border-bottom-input" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="phone">
                            </div>                          
                        </div>
                    <div class="col-md-12">                            
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <input type="text" class="border-bottom-input" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write your message..">
                        </div>     
                        
                        <div class="text-end">
                            <button class="btn btn-red">Send Message</button>
                        </div>
                    </div>
                </form>

                    </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    

    <!-- section end -->
    @endsection