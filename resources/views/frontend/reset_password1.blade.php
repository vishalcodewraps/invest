@include('frontend.layouts.header')

    <!-- Main Start -->
    <main>
        <!-- Breadcrumb -->
        <section
          class="w-breadcrumb-area"
          style=" background-image: url({{ asset($general_setting->breadcrumb_image) }});">
          <div class="container">
            <div class="row">
              <div class="col-auto">
                <div
                  class="position-relative z-2"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-easing="linear"
                >
                  <h2 class="section-title-light mb-2">{{ __('translate.Reset Password') }}</h2>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb w-breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('translate.Home') }}</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        {{ __('translate.Reset Password') }}
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Breadcrumb End -->

        <!-- Login Form -->
        <section class="py-110 bg-offWhite">
          <div class="container">
            <div class="bg-white rounded-3 p-3">
              <div class="row g-4">
                <div class="col-lg-6 p-3 p-lg-5">
                  <div class="mb-40">
                    <h2 class="section-title mb-2">{{ __('translate.Reset Password') }}</h2>
                    <p class="section-desc">Invest Connect Marketplace</p>
                  </div>
                  <form method="POST" action="{{ route('store-reset-password', $user->forget_password_token) }}">
                    @csrf
                    <div class="form-container d-flex flex-column gap-4">

                        <div class="form-input">
                            <label for="eamil" class="form-label"
                            >{{ __('translate.Email') }} <span class="text-lime-300">*</span>
                            </label>
                            <input
                            type="email"
                            id="email"
                            placeholder="{{ __('translate.Email') }}"
                            class="form-control shadow-none"
                            name="email"
                            readonly
                            value="{{ $user->email }}"
                            />
                        </div>



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-input">
                                <label for="password" class="form-label"
                                >{{ __('translate.Password') }} <span class="text-lime-300">*</span></label
                                >
                                <input
                                type="password"
                                id="password"
                                placeholder="********"
                                class="form-control shadow-none"
                                name="password"
                                />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-input">
                                <label for="password_confirmation" class="form-label"
                                >{{ __('translate.Confirm Password') }} <span class="text-lime-300">*</span></label
                                >
                                <input
                                type="password"
                                id="password_confirmation"
                                placeholder="********"
                                class="form-control shadow-none"
                                name="password_confirmation"
                                />
                            </div>
                        </div>

                       


                    </div>


                      <div class="d-grid">
                        <button class="w-btn-secondary-lg">{{ __('translate.Reset Now') }}</button>
                      </div>
                    </div>
                  </form>
                  
                  

                  <div class="mt-4">
                    <p class="text-center form-text">
                      {{ __('translate.Already have an account?') }}
                      <a href="#"  data-bs-toggle="modal"
                      data-bs-target="#exampleModal"> {{ __('translate.Sign In') }} </a>
                    </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="login-img">
                    <img
                      src="{{ asset($general_setting->login_page_bg) }}"
                      class="img-fluid w-100"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Login Form End -->
      </main>
      <!-- Main End -->



      @include('frontend.layouts.footer')
