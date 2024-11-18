@extends('layout')

@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('front-content')
    <!-- Main Start -->
    <main>
      <!-- Hero Start-->
      <section class="hero-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xl-6 mt-n5">
              <div>
                <h1
                  class="hero-one-title fw-bold"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-easing="linear"
                >
                {!! strip_tags(clean($homepage->intro_title),'<span>') !!}
                </h1>
                <div class="pt-5">
                  <form action="{{ route('services') }}">
                    <div
                      class="hero-form-wrapper bg-white d-flex position-relative"
                    >
                      <div>
                        <select class="form-select shadow-none" name="category">
                          <option value="">{{ __('translate.All Categories') }}</option>
                          @foreach ($categories as $category)
                          <option value="{{ $category->slug }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div>
                        <input
                          type="text"
                          class="form-control shadow-none"
                          placeholder="{{ __('translate.Search for any service...') }}"
                          name="search"
                        />
                        <button class="hero-form-btn position-absolute">
                          <svg
                            width="19"
                            height="18"
                            viewBox="0 0 19 18"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                              stroke="#F2F2F2"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              d="M18 17L14 13"
                              stroke="#F2F2F2"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                          {{ __('translate.Search') }}
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div
                  class="mt-60 d-flex flex-column flex-sm-row flex-wrap gap-4 align-items-center"
                >
                  <div class="d-flex gap-3 align-items-center">
                    <div class="hero-group-img-wrapper">
                      <img
                        src="{{ asset($homepage->customer_image) }}"
                        class="hero-group-img"
                        alt=""
                      />
                    </div>
                    <div>
                      <h3 class="text-white hero-counter-title fw-bold">
                        {{ $homepage->total_customer }}
                      </h3>
                      <p class="text-white">{{ __('translate.Happy Customers') }}</p>
                    </div>
                  </div>
                  <div class="hero-rating">
                    <h3 class="text-white hero-counter-title fw-bold">{{ $homepage->total_rating }}</h3>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="66"
                      height="11"
                      viewBox="0 0 66 11"
                      fill="none"
                    >
                      <path
                        d="M11.1141 4.15628C11.0407 3.92385 10.8406 3.75929 10.6048 3.73731L7.38803 3.43649L6.11676 0.370622C6.0229 0.145376 5.80934 0 5.57163 0C5.33392 0 5.12027 0.145376 5.02701 0.370622L3.75574 3.43649L0.538508 3.73731C0.302669 3.75973 0.102963 3.92429 0.0291678 4.15628C-0.0442024 4.3887 0.0235566 4.64364 0.201923 4.80478L2.63351 7.0011L1.91656 10.2539C1.8641 10.493 1.95422 10.7403 2.14687 10.8838C2.25042 10.9613 2.37208 11 2.49417 11C2.59908 11 2.70407 10.9713 2.79785 10.9135L5.57163 9.20504L8.3449 10.9135C8.54835 11.0387 8.80417 11.0272 8.99639 10.8838C9.18904 10.7403 9.27916 10.493 9.22671 10.2539L8.50975 7.0011L10.9413 4.80478C11.1196 4.64364 11.1875 4.38923 11.1141 4.15628Z"
                        fill="white"
                      />
                      <path
                        d="M24.8282 4.15628C24.7548 3.92385 24.5547 3.75929 24.3189 3.73731L21.1021 3.43649L19.8309 0.370622C19.737 0.145376 19.5235 0 19.2857 0C19.048 0 18.8344 0.145376 18.7411 0.370622L17.4699 3.43649L14.2526 3.73731C14.0168 3.75973 13.8171 3.92429 13.7433 4.15628C13.6699 4.3887 13.7377 4.64364 13.916 4.80478L16.3476 7.0011L15.6307 10.2539C15.5782 10.493 15.6683 10.7403 15.861 10.8838C15.9645 10.9613 16.0862 11 16.2083 11C16.3132 11 16.4182 10.9713 16.512 10.9135L19.2857 9.20504L22.059 10.9135C22.2625 11.0387 22.5183 11.0272 22.7105 10.8838C22.9032 10.7403 22.9933 10.493 22.9408 10.2539L22.2239 7.0011L24.6555 4.80478C24.8337 4.64364 24.9016 4.38923 24.8282 4.15628Z"
                        fill="white"
                      />
                      <path
                        d="M38.5428 4.15628C38.4694 3.92385 38.2693 3.75929 38.0335 3.73731L34.8167 3.43649L33.5455 0.370622C33.4516 0.145376 33.2381 0 33.0003 0C32.7626 0 32.549 0.145376 32.4557 0.370622L31.1845 3.43649L27.9672 3.73731C27.7314 3.75973 27.5317 3.92429 27.4579 4.15628C27.3845 4.3887 27.4523 4.64364 27.6306 4.80478L30.0622 7.0011L29.3453 10.2539C29.2928 10.493 29.3829 10.7403 29.5756 10.8838C29.6791 10.9613 29.8008 11 29.9229 11C30.0278 11 30.1328 10.9713 30.2266 10.9135L33.0003 9.20504L35.7736 10.9135C35.9771 11.0387 36.2329 11.0272 36.4251 10.8838C36.6178 10.7403 36.7079 10.493 36.6554 10.2539L35.9385 7.0011L38.3701 4.80478C38.5483 4.64364 38.6162 4.38923 38.5428 4.15628Z"
                        fill="white"
                      />
                      <path
                        d="M52.2567 4.15628C52.1833 3.92385 51.9832 3.75929 51.7473 3.73731L48.5306 3.43649L47.2593 0.370622C47.1655 0.145376 46.9519 0 46.7142 0C46.4765 0 46.2629 0.145376 46.1696 0.370622L44.8983 3.43649L41.6811 3.73731C41.4452 3.75973 41.2455 3.92429 41.1717 4.15628C41.0984 4.3887 41.1661 4.64364 41.3445 4.80478L43.7761 7.0011L43.0591 10.2539C43.0067 10.493 43.0968 10.7403 43.2894 10.8838C43.393 10.9613 43.5147 11 43.6367 11C43.7417 11 43.8467 10.9713 43.9404 10.9135L46.7142 9.20504L49.4875 10.9135C49.6909 11.0387 49.9467 11.0272 50.139 10.8838C50.3316 10.7403 50.4217 10.493 50.3693 10.2539L49.6523 7.0011L52.0839 4.80478C52.2622 4.64364 52.33 4.38923 52.2567 4.15628Z"
                        fill="white"
                      />
                      <path
                        opacity="0.3"
                        d="M65.9708 4.15628C65.8974 3.92385 65.6973 3.75929 65.4614 3.73731L62.2447 3.43649L60.9735 0.370622C60.8796 0.145376 60.666 0 60.4283 0C60.1906 0 59.977 0.145376 59.8837 0.370622L58.6124 3.43649L55.3952 3.73731C55.1594 3.75973 54.9597 3.92429 54.8859 4.15628C54.8125 4.3887 54.8802 4.64364 55.0586 4.80478L57.4902 7.0011L56.7732 10.2539C56.7208 10.493 56.8109 10.7403 57.0036 10.8838C57.1071 10.9613 57.2288 11 57.3509 11C57.4558 11 57.5608 10.9713 57.6545 10.9135L60.4283 9.20504L63.2016 10.9135C63.405 11.0387 63.6609 11.0272 63.8531 10.8838C64.0457 10.7403 64.1359 10.493 64.0834 10.2539L63.3664 7.0011L65.798 4.80478C65.9763 4.64364 66.0442 4.38923 65.9708 4.15628Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xl-5 mt-5 mt-xl-0">
              <div class="">
                <img
                  src="{{ asset($homepage->intro_banner_one) }}"
                  class="hero-one-img text-end"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero End -->

      <!-- Featured Categories -->
      <section class="bg-offWhite py-110">
        <div class="container">
          <div class="row mb-40 justify-content-between align-items-end">
            <div class="col-md-auto">
              <h2 class="fw-bold section-title">{{ __('translate.Our Popular Categories') }}</h2>
              <p class="section-desc">{{ __('translate.Get some Inspirations from 86K+ skills') }}</p>
            </div>
            <div class="col-md-auto position-relative mt-30 mt-md-0">
              <div class="d-flex gap-3">
                <button class="featurePrev swiper-prev">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15.75 19.5 8.25 12l7.5-7.5"
                    />
                  </svg>
                </button>
                <button class="featureNext swiper-next">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m8.25 4.5 7.5 7.5-7.5 7.5"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="position-relative pb-2">
            <div class="swiper featureCategory">
              <div class="swiper-wrapper">
                @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <div class="feature-category-card bg-white">
                            <img
                            src="{{ asset($category->icon) }}"
                            class="mb-4"
                            alt=""
                            />
                            <h3 class="feature-category-link fw-semibold">
                            <a href="{{ route('services', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                            </h3>
                            <p class="feature-category-desc fs-6">{{ $category->total_service }} {{ __('translate.Services') }}</p>
                        </div>
                    </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Categories End -->

      <!-- Our Services -->
      <section class="py-110">
        <div class="container">
          <div class="row mb-16 justify-content-between align-items-end">
            <div class="col-md-auto">
              <div>
                <h2 class="fw-bold section-title">{{ __('translate.Featured Services') }}</h2>
                <p class="section-desc">
                  {{ __('translate.Get best services for your work') }}
                </p>
              </div>
            </div>
            <div class="col-md-auto position-relative mt-30 mt-md-0">
              <div class="d-flex gap-3">
                <button class="servicePrev swiper-prev">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15.75 19.5 8.25 12l7.5-7.5"
                    />
                  </svg>
                </button>
                <button class="serviceNext swiper-next">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m8.25 4.5 7.5 7.5-7.5 7.5"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="swiper serviceSlider">
            <div class="swiper-wrapper py-4">

                @foreach ($featured_services as $service)
                    <article class="swiper-slide">
                        <div class="service-card bg-white">
                        <div class=" position-relative recently-view-card-thumb">
                            <img
                            src="{{ asset($service->thumb_image) }}"
                            class="recently-view-card-img w-100"
                              width="320"
                            height="200"
                            alt=""
                            />
                            <button class="service-card-wishlist-btn" onclick="addToWishlist('{{ $service->id }}')">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none"
                            >
                                <circle cx="16" cy="16" r="16" fill="white" />
                                <path
                                d="M16.68 9.51314L16 10.2438L15.3199 9.51315C13.442 7.49562 10.3974 7.49562 8.5195 9.51314C6.64161 11.5307 6.64161 14.8017 8.5195 16.8192L14.6399 23.3947C15.391 24.2018 16.6089 24.2018 17.3601 23.3947L23.4804 16.8192C25.3583 14.8017 25.3583 11.5307 23.4804 9.51314C21.6026 7.49562 18.5579 7.49562 16.68 9.51314Z"
                                stroke="currentColor"
                                stroke-linejoin="round"
                                />
                            </svg>
                            </button>
                        </div>
                        <div class="service-card-content">
                            <div
                            class="d-flex align-items-center justify-content-between"
                            >
                            <div>
                                <h3 class="service-card-price fw-bold">{{ currency($service?->listing_package?->basic_price) }}</h3>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                >
                                <path
                                    d="M16 5.95909C15.8855 6.07153 15.7709 6.21207 15.6564 6.32451C14.4537 7.36454 13.2511 8.37646 12.0484 9.38838C11.9339 9.47271 11.9053 9.55704 11.9625 9.69758C12.3348 11.2717 12.707 12.8739 13.0793 14.448C13.1365 14.6448 13.1079 14.8134 12.9361 14.9258C12.7643 15.0383 12.5925 15.0102 12.4207 14.9258C10.989 14.0826 9.58587 13.2393 8.15415 12.396C8.03961 12.3117 7.9537 12.3117 7.83917 12.396C6.43607 13.2393 5.00435 14.0826 3.60126 14.8977C3.48672 14.9821 3.34355 15.0102 3.20038 14.9821C2.9713 14.9258 2.85676 14.701 2.91403 14.448C3.14311 13.5204 3.34355 12.5928 3.57262 11.6652C3.74443 10.9906 3.8876 10.316 4.05941 9.64136C4.08805 9.52893 4.05941 9.47271 3.97351 9.38838C2.74222 8.34835 1.53957 7.30832 0.308291 6.26829C0.251022 6.21207 0.193753 6.18396 0.165118 6.12775C0.0219457 6.01531 -0.0353233 5.87477 0.0219457 5.678C0.0792147 5.50935 0.222387 5.42502 0.394194 5.39691C0.651905 5.36881 0.909615 5.3407 1.19596 5.3407C2.36998 5.22826 3.54399 5.14393 4.74664 5.0315C4.97572 5.00339 5.20479 4.97528 5.43387 4.97528C5.54841 4.97528 5.60567 4.91906 5.63431 4.83474C6.2929 3.31685 6.92286 1.82708 7.58146 0.309198C7.66736 0.140545 7.75326 0.0281089 7.9537 0C8.18278 0.0562179 8.32595 0.140545 8.41186 0.365416C8.75547 1.15247 9.09908 1.96762 9.4427 2.75467C9.75768 3.4574 10.044 4.18823 10.359 4.89095C10.3876 4.97528 10.4449 5.0315 10.5594 5.0315C11.4757 5.11583 12.3921 5.17204 13.337 5.25637C14.0815 5.31259 14.8546 5.39691 15.5991 5.45313C15.7996 5.48124 15.9141 5.59368 16 5.76233C16 5.81855 16 5.90288 16 5.95909Z"
                                    fill="currentColor"
                                />
                                </svg>
                                <span class="service-card-rating">{{ sprintf("%.1f", $service->avg_rating) }} ({{ $service->total_rating }})</span>
                            </div>
                            </div>
                            <h3 class="service-card-title fw-semibold">
                            <a href="{{ route('service', html_decode($service->slug)) }}">
                                {{ html_decode($service->title) }}
                            </a>
                            </h3>
                            <div class="d-flex align-items-center service-card-author">
                            <div class="custom-reletive">
                                @if ($service?->seller?->image)
                                    <img src="{{ asset($service?->seller?->image) }}" class="service-card-author-img" alt="" />
                                @else
                                    <img src="{{ asset($general_setting->default_avatar) }}" class="service-card-author-img" alt="" />
                                @endif

                                @if ($service?->seller?->online_status == 1)
                                    @if ($service?->seller?->online == 1)
                                        <span class="online-indicator2"></span>
                                    @endif
                                @endif
                            </div>
                            <a href="{{ route('freelancer', $service?->seller?->username) }}" class="service-card-author-name">{{ html_decode($service?->seller?->name) }}</a>
                            @if($service?->seller?->kyc_status == 1)
                            <button class="varified-badge1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.007 2.10377C8.60544 1.65006 7.08181 2.28116 6.41156 3.59306L5.60578 5.17023C5.51004 5.35763 5.35763 5.51004 5.17023 5.60578L3.59306 6.41156C2.28116 7.08181 1.65006 8.60544 2.10377 10.007L2.64923 11.692C2.71404 11.8922 2.71404 12.1078 2.64923 12.308L2.10377 13.993C1.65006 15.3946 2.28116 16.9182 3.59306 17.5885L5.17023 18.3942C5.35763 18.49 5.51004 18.6424 5.60578 18.8298L6.41156 20.407C7.08181 21.7189 8.60544 22.35 10.007 21.8963L11.692 21.3508C11.8922 21.286 12.1078 21.286 12.308 21.3508L13.993 21.8963C15.3946 22.35 16.9182 21.7189 17.5885 20.407L18.3942 18.8298C18.49 18.6424 18.6424 18.49 18.8298 18.3942L20.407 17.5885C21.7189 16.9182 22.35 15.3946 21.8963 13.993L21.3508 12.308C21.286 12.1078 21.286 11.8922 21.3508 11.692L21.8963 10.007C22.35 8.60544 21.7189 7.08181 20.407 6.41156L18.8298 5.60578C18.6424 5.51004 18.49 5.35763 18.3942 5.17023L17.5885 3.59306C16.9182 2.28116 15.3946 1.65006 13.993 2.10377L12.308 2.64923C12.1078 2.71403 11.8922 2.71404 11.692 2.64923L10.007 2.10377ZM6.75977 11.7573L8.17399 10.343L11.0024 13.1715L16.6593 7.51465L18.0735 8.92886L11.0024 15.9999L6.75977 11.7573Z"></path></svg>
                                </span>
                            </button>
                            @endif
                            </div>
                        </div>
                        </div>
                    </article>
                @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- Our Services -->

      <!-- Cta Start -->
      <section class="cta-area">
        <div class="container">
          <div class="bg-darkGreen cta-area-bg">
            <div class="row align-items-center">
              <div class="col-12 col-xl-7">
                <div
                  class="cta-content"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-easing="linear"
                >
                  <p class="cta-subtitle fw-bold mb-2">{{ $homepage->explore_short_title }}</p>
                  <h2 class="section-title-light fw-bold mb-4">
                    {{ $homepage->explore_title }}
                  </h2>
                  <p class="section-desc-light mb-40">
                    {{ $homepage->explore_description }}
                  </p>
                  <a href="{{ route('services') }}" class="cta-btn-link">
                    {{ __('translate.Get Services') }}
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="14"
                      height="10"
                      viewBox="0 0 14 10"
                      fill="none"
                    >
                      <path
                        d="M9 9L13 5M13 5L9 1M13 5L1 5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      /></svg></a>
                </div>
                <div class="cta-counter mt-5">
                  <div class="cta-counter-item">
                    <h3 class="cta-counter-title fw-bold">
                      <span class="counter">{{ $homepage->explore_total_customer }}</span><span>{{ __('translate.M') }}+</span>
                    </h3>
                    <p class="cta-counter-desc fw-bold">{{ __('translate.Total Freelancers') }}</p>
                  </div>
                  <div class="cta-counter-item">
                    <h3 class="cta-counter-title fw-bold">
                        <span class="counter">{{ $homepage->explore_total_service }}</span><span>{{ __('translate.M') }}+</span>
                    </h3>
                    <p class="cta-counter-desc fw-bold">{{ __('translate.Total Services') }}</p>
                  </div>
                  <div class="cta-counter-item">
                    <h3 class="cta-counter-title fw-bold">
                        <span class="counter">{{ $homepage->explore_total_job }}</span><span>{{ __('translate.M') }}+</span>
                    </h3>
                    <p class="cta-counter-desc fw-bold">{{ __('translate.Total Job') }}</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-5 mt-5 mt-xl-0">
                <div class="cta-img">
                  <img
                    src="{{ asset($homepage->explore_image) }}"
                    class="img-fluid w-100"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Cta End -->

      <!-- Recent Job -->
      <section class="py-110">
        <div class="container">
          <div class="row mb-40 justify-content-between align-items-end">
            <div class="col-md-auto">
              <h2 class="fw-bold section-title">{{ __('translate.Recent Job Post') }}</h2>
              <p class="section-desc">{{ __('translate.Let start your career with us') }}</p>
            </div>
            <div class="col-md-auto position-relative mt-30 mt-md-0">
              <div class="d-flex gap-3">
                <button class="recentJobPrev swiper-prev">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15.75 19.5 8.25 12l7.5-7.5"
                    />
                  </svg>
                </button>
                <button class="recentJobNext swiper-next">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m8.25 4.5 7.5 7.5-7.5 7.5"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="swiper recentJob pb-2">
            <div class="swiper-wrapper">
                @foreach ($job_posts as $job_post)
                    <article class="swiper-slide">
                        <div class="job-post bg-offWhite position-relative">
                        <div
                            class="job-type-badge position-absolute d-flex flex-column gap-2"
                        >
                            <p class="job-type-badge-primary">
                                @if ($job_post->job_type == 'Hourly')
                                    {{ __('translate.Hourly') }}
                                @elseif ($job_post->job_type == 'Daily')
                                {{ __('translate.Daily') }}
                                @elseif ($job_post->job_type == 'Monthly')
                                {{ __('translate.Monthly') }}
                                @elseif ($job_post->job_type == 'Yearly')
                                {{ __('translate.Yearly') }}
                                @endif
                            </p>
                            @if ($job_post->is_urgent == 'enable')
                            <p class="job-type-badge-secondary">{{ __('translate.Urgent') }}</p>
                            @endif

                        </div>
                        <div
                            class="d-flex flex-column justify-content-center align-items-center"
                        >
                            <div class="job-post-icon">
                            <img src="{{ asset($job_post->thumb_image) }}" alt="" />
                            </div>
                            <p class="job-post-subtitle fw-normal">{{ __('translate.From') }} - {{ currency($job_post->regular_price) }}</p>
                            <h3 class="job-post-title fw-semibold">
                            <a href="{{ route('job-post', $job_post->slug) }}">
                                {{ html_decode($job_post->title) }}
                            </a>
                            </h3>
                            <a href="{{ route('job-post', ['slug' => $job_post->slug, 'is_apply' => 'yes']) }}" class="w-btn-primary-xl">
                            {{ __('translate.Apply Now') }}
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="14"
                                height="10"
                                viewBox="0 0 14 10"
                                fill="none"
                            >
                                <path
                                d="M9 9L13 5M13 5L9 1M13 5L1 5"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                /></svg></a>
                        </div>
                        </div>
                    </article>
                @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- Recent Job End -->

      <!-- Top Sellers -->
      <section class="top-sellers-area bg-offWhite py-110">
        <div class="container">
          <div class="row justify-content-between align-items-end mb-40">
            <div class="col-auto">
              <h2 class="fw-bold section-title">{{ __('translate.Top Seller') }}</h2>
              <p class="section-desc">{{ __('translate.Find our best service provider') }}</p>
            </div>
            <div class="col-auto mt-30 mt-md-0">
              <div class="d-flex justify-content-end">
                <a href="{{ route('freelancers') }}" class="w-btn-link">
                  {{ __('translate.View More') }}
                  <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9 9L13 5M13 5L9 1M13 5L1 5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div
            class="row row-gap-4 justify-content-center row-cols-md-2 row-cols-lg-3 row-cols-xl-5"
          >
            @foreach ($top_sellers as $seller)
                <article data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear" >
                <div class="bg-white top-seller-card position-relative">
                    <div
                    class="job-type-badge position-absolute d-flex flex-column gap-2"
                    >
                    @if ($seller->is_top_seller == 'enable')
                    <p class="job-type-badge-tertiary">{{ __('translate.Top Seller') }}</p>

                    @endif
                    <p class="job-type-badge-secondary">{{ currency(html_decode($seller->hourly_payment)) }}/{{ __('translate.hr') }}</p>
                    </div>
                    <div
                    class="d-flex flex-column justify-content-center align-items-center"
                    >
                    <div class="seller-profile-img mb-4">
                        @if ($seller->image)
                        <img src="{{ asset($seller->image) }}"  width="110" height="110" alt="" />
                        @else
                        <img src="{{ asset($general_setting->default_avatar) }}"  width="110" height="110" alt="" />
                        @endif

                        @if ($seller->online_status == 1)
                            @if ($seller->online == 1)
                                <span class="online-indicator"></span>
                            @endif
                        @endif


                    </div>

                    <h3 class="top-seller-name fw-bold relative">
                        {{ html_decode($seller->name) }}
                        @if($seller->kyc_status == 1)
                            <button class="varified-badge2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.007 2.10377C8.60544 1.65006 7.08181 2.28116 6.41156 3.59306L5.60578 5.17023C5.51004 5.35763 5.35763 5.51004 5.17023 5.60578L3.59306 6.41156C2.28116 7.08181 1.65006 8.60544 2.10377 10.007L2.64923 11.692C2.71404 11.8922 2.71404 12.1078 2.64923 12.308L2.10377 13.993C1.65006 15.3946 2.28116 16.9182 3.59306 17.5885L5.17023 18.3942C5.35763 18.49 5.51004 18.6424 5.60578 18.8298L6.41156 20.407C7.08181 21.7189 8.60544 22.35 10.007 21.8963L11.692 21.3508C11.8922 21.286 12.1078 21.286 12.308 21.3508L13.993 21.8963C15.3946 22.35 16.9182 21.7189 17.5885 20.407L18.3942 18.8298C18.49 18.6424 18.6424 18.49 18.8298 18.3942L20.407 17.5885C21.7189 16.9182 22.35 15.3946 21.8963 13.993L21.3508 12.308C21.286 12.1078 21.286 11.8922 21.3508 11.692L21.8963 10.007C22.35 8.60544 21.7189 7.08181 20.407 6.41156L18.8298 5.60578C18.6424 5.51004 18.49 5.35763 18.3942 5.17023L17.5885 3.59306C16.9182 2.28116 15.3946 1.65006 13.993 2.10377L12.308 2.64923C12.1078 2.71403 11.8922 2.71404 11.692 2.64923L10.007 2.10377ZM6.75977 11.7573L8.17399 10.343L11.0024 13.1715L16.6593 7.51465L18.0735 8.92886L11.0024 15.9999L6.75977 11.7573Z"></path></svg>
                                </span>
                            </button>
                        @endif
                    </h3>

                    <p class="top-seller-title">{{ html_decode($seller->designation) }}</p>
                    <div class="top-seller-rating mb-4">
                        <p class="d-flex align-items-center top-seller-rating">
                        <svg
                            width="12"
                            height="12"
                            viewBox="0 0 12 12"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M11.1141 4.65628C11.0407 4.42385 10.8406 4.25929 10.6048 4.23731L7.38803 3.93649L6.11676 0.870622C6.0229 0.645376 5.80934 0.5 5.57163 0.5C5.33392 0.5 5.12027 0.645376 5.02701 0.870622L3.75574 3.93649L0.538508 4.23731C0.302669 4.25973 0.102963 4.42429 0.0291678 4.65628C-0.0442024 4.8887 0.0235566 5.14364 0.201923 5.30478L2.63351 7.5011L1.91656 10.7539C1.8641 10.993 1.95422 11.2403 2.14687 11.3838C2.25042 11.4613 2.37208 11.5 2.49417 11.5C2.59908 11.5 2.70407 11.4713 2.79785 11.4135L5.57163 9.70504L8.3449 11.4135C8.54835 11.5387 8.80417 11.5272 8.99639 11.3838C9.18904 11.2403 9.27916 10.993 9.22671 10.7539L8.50975 7.5011L10.9413 5.30478C11.1196 5.14364 11.1875 4.88923 11.1141 4.65628Z"
                            fill="currentColor"
                            />
                        </svg>
                        {{ sprintf("%.1f", $seller->avg_rating) }} <span class="top-seller-review">({{ $seller->total_rating }} {{ __('translate.Reviews') }})</span>
                        </p>
                    </div>
                    <a href="{{ route('freelancer', $seller->username) }}" class="w-btn-primary-lg">
                        {{ __('translate.View Profile') }}
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="10"
                        viewBox="0 0 14 10"
                        fill="none"
                        >
                        <path
                            d="M9 9L13 5M13 5L9 1M13 5L1 5"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        /></svg></a>
                    </div>
                </div>
                </article>
            @endforeach

          </div>
        </div>
      </section>
      <!-- Top Sellers End -->

      <!-- Core Cta -->
      <section class="bg-offWhite pt-lg-5">
        <div class="container">
          <div class="cta-wrapper position-relative">
            <div class="row justify-content-between">
              <div class="col-lg-6">
                <div
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-easing="linear"
                >
                  <h2 class="section-title-light fw-bold mb-4">
                    {{ $homepage->join_seller_title }}
                  </h2>
                  <p class="text-white mb-5">
                    {{ $homepage->join_seller_des }}
                  </p>
                  <a href="{{ route('services') }}" class="cta-btn-link">
                    {{ __('translate.Get Started') }}
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="14"
                      height="10"
                      viewBox="0 0 14 10"
                      fill="none"
                    >
                      <path
                        d="M9 9L13 5M13 5L9 1M13 5L1 5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      /></svg></a>
                </div>
              </div>
              <div class="col-lg-6">
                <div>
                  <img
                  width="412"
                  heigh="501"
                    src="{{ asset($homepage->join_seller_image) }}"
                    class="cta-people position-absolute d-none d-lg-block"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Core Cta End -->

      <!-- Testimonial -->
      <section class="bg-offWhite py-110">
        <div class="container">
          <div class="row mb-40 justify-content-center">
            <div class="co-auto">
              <div class="text-center">
                <h2 class="fw-bold section-title">{{ __('translate.Testimonial') }}</h2>
                <p class="section-desc">
                  {{ __('translate.Received 4.8/5 Stars in Over 10,000+ Reviews.') }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper testimonialsSlider">
          <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-card bg-white">
                <div class="testimonial-content">
                  <div class="d-flex gap-2 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="35"
                      height="35"
                      viewBox="0 0 35 35"
                      fill="none"
                    >
                      <path
                        d="M17.5 0C27.165 0 35 7.83502 35 17.5C35 27.165 27.165 35 17.5 35C7.83502 35 0 27.165 0 17.5C0 7.83502 7.83502 0 17.5 0Z"
                        fill="#F7F5F0"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M19.1352 21.6719C18.4288 20.3063 18.0757 18.823 18.0757 17.222C18.0757 15.5975 18.5054 14.2555 19.3647 13.196C20.2241 12.1365 21.5602 11.6068 23.3731 11.6068V13.8317C22.7374 13.8317 22.2724 13.973 21.9781 14.2555C21.6838 14.538 21.5367 15.0795 21.5367 15.88V16.2332H24.1147V21.6719H19.1352ZM11.8246 21.6719C11.1183 20.3063 10.7651 18.823 10.7651 17.222C10.7651 15.5975 11.1948 14.2555 12.0542 13.196C12.9135 12.1365 14.2497 11.6068 16.0626 11.6068V13.8317C15.4269 13.8317 14.9619 13.973 14.6676 14.2555C14.3733 14.538 14.2261 15.0795 14.2261 15.88V16.2332H16.8042V21.6719H11.8246Z"
                        fill="currentColor"
                      />
                    </svg>
                    <span class="testimonial-title">{{ __('translate.Very Solid!!') }}</span>
                  </div>
                  <p class="testimonial-feedback">
                    {{ $testimonial->comment }}
                  </p>
                </div>
                <div
                  class="testimonial-meta d-flex align-items-center justify-content-between"
                >
                  <div class="d-flex gap-3 align-items-center">
                    <div>
                      <img
                        src="{{ asset($testimonial->image) }}"
                        class="testimonial-author-img"
                        alt=""
                      />
                    </div>
                    <div>
                      <h4 class="testimonial-author-name fw-semibold">
                        {{ $testimonial->name }}
                      </h4>
                      <p class="testimonial-author-title">{{ $testimonial->designation }}</p>
                    </div>
                  </div>
                  <div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="95"
                      height="16"
                      viewBox="0 0 95 16"
                      fill="none"
                    >
                      <path
                        d="M55.863 5.78722C55.8112 5.62592 55.6753 5.5107 55.5102 5.48436L50.5915 4.77331L48.3781 0.246895C48.3037 0.0954657 48.1516 0 47.9866 0C47.8215 0 47.6695 0.0954657 47.595 0.250187L45.4107 4.78977L40.492 5.53375C40.327 5.56008 40.1911 5.6753 40.1393 5.8366C40.0875 5.99791 40.1329 6.17567 40.2526 6.29089L43.8219 9.80997L42.9967 14.794C42.9676 14.9619 43.0355 15.1297 43.1714 15.2285C43.2459 15.2845 43.3365 15.3141 43.4271 15.3141C43.4983 15.3141 43.5662 15.2976 43.631 15.2614L48.0222 12.8945L52.4264 15.2351C52.4911 15.268 52.559 15.2845 52.627 15.2845C52.8664 15.2845 53.0638 15.0836 53.0638 14.84C53.0638 14.8038 53.0606 14.7709 53.0509 14.738L52.1998 9.78364L55.7465 6.2448C55.8727 6.12629 55.9147 5.94853 55.863 5.78722Z"
                        fill="#FF9E15"
                      />
                      <path
                        d="M74.9191 5.78722C74.8673 5.62592 74.7314 5.5107 74.5664 5.48436L69.6477 4.77331L67.4343 0.246895C67.3599 0.0954657 67.2078 0 67.0427 0C66.8777 0 66.7256 0.0954657 66.6512 0.250187L64.4669 4.78977L59.5482 5.53375C59.3832 5.56008 59.2473 5.6753 59.1955 5.8366C59.1437 5.99791 59.189 6.17567 59.3087 6.29089L62.878 9.80997L62.0529 14.794C62.0237 14.9619 62.0917 15.1297 62.2276 15.2285C62.302 15.2845 62.3926 15.3141 62.4832 15.3141C62.5544 15.3141 62.6224 15.2976 62.6871 15.2614L67.0783 12.8945L71.4825 15.2351C71.5472 15.268 71.6152 15.2845 71.6831 15.2845C71.9226 15.2845 72.12 15.0836 72.12 14.84C72.12 14.8038 72.1168 14.7709 72.1071 14.738L71.256 9.78364L74.8026 6.2448C74.9288 6.12629 74.9709 5.94853 74.9191 5.78722Z"
                        fill="#FF9E15"
                      />
                      <path
                        d="M94.9784 5.78722C94.9267 5.62592 94.7908 5.5107 94.6257 5.48436L89.707 4.77331L87.4936 0.246895C87.4192 0.0954657 87.2671 0 87.1021 0C86.937 0 86.7849 0.0954657 86.7105 0.250187L84.5262 4.78977L79.6075 5.53375C79.4425 5.56008 79.3066 5.6753 79.2548 5.8366C79.203 5.99791 79.2483 6.17567 79.3681 6.29089L82.9374 9.80997L82.1122 14.794C82.0831 14.9619 82.151 15.1297 82.2869 15.2285C82.3613 15.2845 82.452 15.3141 82.5426 15.3141C82.6138 15.3141 82.6817 15.2976 82.7464 15.2614L87.1377 12.8945L91.5418 15.2351C91.6066 15.268 91.6745 15.2845 91.7425 15.2845C91.9819 15.2845 92.1793 15.0836 92.1793 14.84C92.1793 14.8038 92.1761 14.7709 92.1664 14.738L91.3153 9.78364L94.862 6.2448C94.9882 6.12629 95.0302 5.94853 94.9784 5.78722Z"
                        fill="#FF9E15"
                      />
                      <path
                        d="M35.8039 5.78722C35.7521 5.62592 35.6162 5.5107 35.4512 5.48436L30.5325 4.77331L28.3191 0.246895C28.2446 0.0954657 28.0925 0 27.9275 0C27.7625 0 27.6104 0.0954657 27.5359 0.250187L25.3517 4.78977L20.433 5.53375C20.2679 5.56008 20.132 5.6753 20.0802 5.8366C20.0285 5.99791 20.0738 6.17567 20.1935 6.29089L23.7628 9.80997L22.9376 14.794C22.9085 14.9619 22.9764 15.1297 23.1124 15.2285C23.1868 15.2845 23.2774 15.3141 23.368 15.3141C23.4392 15.3141 23.5071 15.2976 23.5719 15.2614L27.9631 12.8945L32.3673 15.2351C32.432 15.268 32.4999 15.2845 32.5679 15.2845C32.8074 15.2845 33.0048 15.0836 33.0048 14.84C33.0048 14.8038 33.0015 14.7709 32.9918 14.738L32.1408 9.78364L35.6874 6.2448C35.8136 6.12629 35.8557 5.94853 35.8039 5.78722Z"
                        fill="#FF9E15"
                      />
                      <path
                        d="M15.7448 5.78722C15.693 5.62592 15.5571 5.5107 15.3921 5.48436L10.4734 4.77331L8.25997 0.246895C8.18555 0.0954657 8.03345 0 7.86842 0C7.70339 0 7.55129 0.0954657 7.47687 0.250187L5.29258 4.78977L0.373883 5.53375C0.208848 5.56008 0.0729369 5.6753 0.0211612 5.8366C-0.0306145 5.99791 0.0146893 6.17567 0.134421 6.29089L3.70371 9.80997L2.87853 14.794C2.84941 14.9619 2.91737 15.1297 3.05328 15.2285C3.12771 15.2845 3.21831 15.3141 3.30892 15.3141C3.38011 15.3141 3.44807 15.2976 3.51279 15.2614L7.90402 12.8945L12.3082 15.2351C12.3729 15.268 12.4409 15.2845 12.5088 15.2845C12.7483 15.2845 12.9457 15.0836 12.9457 14.84C12.9457 14.8038 12.9424 14.7709 12.9327 14.738L12.0817 9.78364L15.6283 6.2448C15.7545 6.12629 15.7966 5.94853 15.7448 5.78722Z"
                        fill="#FF9E15"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="swiper testimonialsSliderBottom mt-4">
          <div class="swiper-wrapper">
            @foreach ($latest_testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="testimonial-card bg-white">
                        <div class="testimonial-content">
                        <div class="d-flex gap-2 align-items-center">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            >
                            <path
                                d="M17.5 0C27.165 0 35 7.83502 35 17.5C35 27.165 27.165 35 17.5 35C7.83502 35 0 27.165 0 17.5C0 7.83502 7.83502 0 17.5 0Z"
                                fill="#F7F5F0"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M19.1352 21.6719C18.4288 20.3063 18.0757 18.823 18.0757 17.222C18.0757 15.5975 18.5054 14.2555 19.3647 13.196C20.2241 12.1365 21.5602 11.6068 23.3731 11.6068V13.8317C22.7374 13.8317 22.2724 13.973 21.9781 14.2555C21.6838 14.538 21.5367 15.0795 21.5367 15.88V16.2332H24.1147V21.6719H19.1352ZM11.8246 21.6719C11.1183 20.3063 10.7651 18.823 10.7651 17.222C10.7651 15.5975 11.1948 14.2555 12.0542 13.196C12.9135 12.1365 14.2497 11.6068 16.0626 11.6068V13.8317C15.4269 13.8317 14.9619 13.973 14.6676 14.2555C14.3733 14.538 14.2261 15.0795 14.2261 15.88V16.2332H16.8042V21.6719H11.8246Z"
                                fill="currentColor"
                            />
                            </svg>
                            <span class="testimonial-title">{{ __('translate.Very Solid!!') }}</span>
                        </div>
                        <p class="testimonial-feedback">
                            {{ $testimonial->comment }}
                        </p>
                        </div>
                        <div
                        class="testimonial-meta d-flex align-items-center justify-content-between"
                        >
                        <div class="d-flex gap-3 align-items-center">
                            <div>
                            <img
                                src="{{ asset($testimonial->image) }}"
                                class="testimonial-author-img"
                                alt=""
                            />
                            </div>
                            <div>
                            <h4 class="testimonial-author-name fw-semibold">
                                {{ $testimonial->name }}
                            </h4>
                            <p class="testimonial-author-title">{{ $testimonial->designation }}</p>
                            </div>
                        </div>
                        <div>
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="95"
                            height="16"
                            viewBox="0 0 95 16"
                            fill="none"
                            >
                            <path
                                d="M55.863 5.78722C55.8112 5.62592 55.6753 5.5107 55.5102 5.48436L50.5915 4.77331L48.3781 0.246895C48.3037 0.0954657 48.1516 0 47.9866 0C47.8215 0 47.6695 0.0954657 47.595 0.250187L45.4107 4.78977L40.492 5.53375C40.327 5.56008 40.1911 5.6753 40.1393 5.8366C40.0875 5.99791 40.1329 6.17567 40.2526 6.29089L43.8219 9.80997L42.9967 14.794C42.9676 14.9619 43.0355 15.1297 43.1714 15.2285C43.2459 15.2845 43.3365 15.3141 43.4271 15.3141C43.4983 15.3141 43.5662 15.2976 43.631 15.2614L48.0222 12.8945L52.4264 15.2351C52.4911 15.268 52.559 15.2845 52.627 15.2845C52.8664 15.2845 53.0638 15.0836 53.0638 14.84C53.0638 14.8038 53.0606 14.7709 53.0509 14.738L52.1998 9.78364L55.7465 6.2448C55.8727 6.12629 55.9147 5.94853 55.863 5.78722Z"
                                fill="#FF9E15"
                            />
                            <path
                                d="M74.9191 5.78722C74.8673 5.62592 74.7314 5.5107 74.5664 5.48436L69.6477 4.77331L67.4343 0.246895C67.3599 0.0954657 67.2078 0 67.0427 0C66.8777 0 66.7256 0.0954657 66.6512 0.250187L64.4669 4.78977L59.5482 5.53375C59.3832 5.56008 59.2473 5.6753 59.1955 5.8366C59.1437 5.99791 59.189 6.17567 59.3087 6.29089L62.878 9.80997L62.0529 14.794C62.0237 14.9619 62.0917 15.1297 62.2276 15.2285C62.302 15.2845 62.3926 15.3141 62.4832 15.3141C62.5544 15.3141 62.6224 15.2976 62.6871 15.2614L67.0783 12.8945L71.4825 15.2351C71.5472 15.268 71.6152 15.2845 71.6831 15.2845C71.9226 15.2845 72.12 15.0836 72.12 14.84C72.12 14.8038 72.1168 14.7709 72.1071 14.738L71.256 9.78364L74.8026 6.2448C74.9288 6.12629 74.9709 5.94853 74.9191 5.78722Z"
                                fill="#FF9E15"
                            />
                            <path
                                d="M94.9784 5.78722C94.9267 5.62592 94.7908 5.5107 94.6257 5.48436L89.707 4.77331L87.4936 0.246895C87.4192 0.0954657 87.2671 0 87.1021 0C86.937 0 86.7849 0.0954657 86.7105 0.250187L84.5262 4.78977L79.6075 5.53375C79.4425 5.56008 79.3066 5.6753 79.2548 5.8366C79.203 5.99791 79.2483 6.17567 79.3681 6.29089L82.9374 9.80997L82.1122 14.794C82.0831 14.9619 82.151 15.1297 82.2869 15.2285C82.3613 15.2845 82.452 15.3141 82.5426 15.3141C82.6138 15.3141 82.6817 15.2976 82.7464 15.2614L87.1377 12.8945L91.5418 15.2351C91.6066 15.268 91.6745 15.2845 91.7425 15.2845C91.9819 15.2845 92.1793 15.0836 92.1793 14.84C92.1793 14.8038 92.1761 14.7709 92.1664 14.738L91.3153 9.78364L94.862 6.2448C94.9882 6.12629 95.0302 5.94853 94.9784 5.78722Z"
                                fill="#FF9E15"
                            />
                            <path
                                d="M35.8039 5.78722C35.7521 5.62592 35.6162 5.5107 35.4512 5.48436L30.5325 4.77331L28.3191 0.246895C28.2446 0.0954657 28.0925 0 27.9275 0C27.7625 0 27.6104 0.0954657 27.5359 0.250187L25.3517 4.78977L20.433 5.53375C20.2679 5.56008 20.132 5.6753 20.0802 5.8366C20.0285 5.99791 20.0738 6.17567 20.1935 6.29089L23.7628 9.80997L22.9376 14.794C22.9085 14.9619 22.9764 15.1297 23.1124 15.2285C23.1868 15.2845 23.2774 15.3141 23.368 15.3141C23.4392 15.3141 23.5071 15.2976 23.5719 15.2614L27.9631 12.8945L32.3673 15.2351C32.432 15.268 32.4999 15.2845 32.5679 15.2845C32.8074 15.2845 33.0048 15.0836 33.0048 14.84C33.0048 14.8038 33.0015 14.7709 32.9918 14.738L32.1408 9.78364L35.6874 6.2448C35.8136 6.12629 35.8557 5.94853 35.8039 5.78722Z"
                                fill="#FF9E15"
                            />
                            <path
                                d="M15.7448 5.78722C15.693 5.62592 15.5571 5.5107 15.3921 5.48436L10.4734 4.77331L8.25997 0.246895C8.18555 0.0954657 8.03345 0 7.86842 0C7.70339 0 7.55129 0.0954657 7.47687 0.250187L5.29258 4.78977L0.373883 5.53375C0.208848 5.56008 0.0729369 5.6753 0.0211612 5.8366C-0.0306145 5.99791 0.0146893 6.17567 0.134421 6.29089L3.70371 9.80997L2.87853 14.794C2.84941 14.9619 2.91737 15.1297 3.05328 15.2285C3.12771 15.2845 3.21831 15.3141 3.30892 15.3141C3.38011 15.3141 3.44807 15.2976 3.51279 15.2614L7.90402 12.8945L12.3082 15.2351C12.3729 15.268 12.4409 15.2845 12.5088 15.2845C12.7483 15.2845 12.9457 15.0836 12.9457 14.84C12.9457 14.8038 12.9424 14.7709 12.9327 14.738L12.0817 9.78364L15.6283 6.2448C15.7545 6.12629 15.7966 5.94853 15.7448 5.78722Z"
                                fill="#FF9E15"
                            />
                            </svg>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- Testimonial End -->

      <!-- Recent Viewed  -->
      <section class="recently-view pb-110 bg-offWhite">
        <div class="container">
          <div class="row justify-content-between align-items-end mb-40">
            <div class="col-auto">
              <h2 class="fw-bold section-title">{{ __('translate.Recently Added') }}</h2>
              <p class="section-desc">{{ __('translate.Get best services for your work') }}</p>
            </div>
            <div class="col-auto mt-3 mt-md-0">
              <div class="d-flex justify-content-end">
                <a href="{{ route('services') }}" class="w-btn-link"
                  >{{ __('translate.View More') }}
                  <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9 9L13 5M13 5L9 1M13 5L1 5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div
            class="row row-gap-4  row-cols-1 row-cols-xl-5 row-cols-lg-3 row-cols-md-2"
          >
            @foreach ($latest_services as $service)
                <article>
                <div
                    class="service-card bg-white"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-easing="linear"
                >
                    <div class="position-relative recently-view-card-thumb">
                    <img
                        src="{{ asset($service->thumb_image) }}"
                        class="recently-view-card-img"
                        alt=""
                    />
                    <button class="service-card-wishlist-btn" onclick="addToWishlist('{{ $service->id }}')">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        >
                        <circle cx="16" cy="16" r="16" fill="white" />
                        <path
                            d="M16.68 9.51314L16 10.2438L15.3199 9.51315C13.442 7.49562 10.3974 7.49562 8.5195 9.51314C6.64161 11.5307 6.64161 14.8017 8.5195 16.8192L14.6399 23.3947C15.391 24.2018 16.6089 24.2018 17.3601 23.3947L23.4804 16.8192C25.3583 14.8017 25.3583 11.5307 23.4804 9.51314C21.6026 7.49562 18.5579 7.49562 16.68 9.51314Z"
                            stroke="currentColor"
                            stroke-linejoin="round"
                        />
                        </svg>
                    </button>
                    </div>
                    <div class="service-card-content">
                    <div class="d-flex align-items-center justify-content-between" >
                        <div>
                        <h3 class="service-card-price fw-bold">{{ currency($service?->listing_package?->basic_price) }}</h3>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="15"
                            viewBox="0 0 16 15"
                            fill="none"
                        >
                            <path
                            d="M16 5.95909C15.8855 6.07153 15.7709 6.21207 15.6564 6.32451C14.4537 7.36454 13.2511 8.37646 12.0484 9.38838C11.9339 9.47271 11.9053 9.55704 11.9625 9.69758C12.3348 11.2717 12.707 12.8739 13.0793 14.448C13.1365 14.6448 13.1079 14.8134 12.9361 14.9258C12.7643 15.0383 12.5925 15.0102 12.4207 14.9258C10.989 14.0826 9.58587 13.2393 8.15415 12.396C8.03961 12.3117 7.9537 12.3117 7.83917 12.396C6.43607 13.2393 5.00435 14.0826 3.60126 14.8977C3.48672 14.9821 3.34355 15.0102 3.20038 14.9821C2.9713 14.9258 2.85676 14.701 2.91403 14.448C3.14311 13.5204 3.34355 12.5928 3.57262 11.6652C3.74443 10.9906 3.8876 10.316 4.05941 9.64136C4.08805 9.52893 4.05941 9.47271 3.97351 9.38838C2.74222 8.34835 1.53957 7.30832 0.308291 6.26829C0.251022 6.21207 0.193753 6.18396 0.165118 6.12775C0.0219457 6.01531 -0.0353233 5.87477 0.0219457 5.678C0.0792147 5.50935 0.222387 5.42502 0.394194 5.39691C0.651905 5.36881 0.909615 5.3407 1.19596 5.3407C2.36998 5.22826 3.54399 5.14393 4.74664 5.0315C4.97572 5.00339 5.20479 4.97528 5.43387 4.97528C5.54841 4.97528 5.60567 4.91906 5.63431 4.83474C6.2929 3.31685 6.92286 1.82708 7.58146 0.309198C7.66736 0.140545 7.75326 0.0281089 7.9537 0C8.18278 0.0562179 8.32595 0.140545 8.41186 0.365416C8.75547 1.15247 9.09908 1.96762 9.4427 2.75467C9.75768 3.4574 10.044 4.18823 10.359 4.89095C10.3876 4.97528 10.4449 5.0315 10.5594 5.0315C11.4757 5.11583 12.3921 5.17204 13.337 5.25637C14.0815 5.31259 14.8546 5.39691 15.5991 5.45313C15.7996 5.48124 15.9141 5.59368 16 5.76233C16 5.81855 16 5.90288 16 5.95909Z"
                            fill="currentColor"
                            />
                        </svg>
                        <span class="service-card-rating">{{ sprintf("%.1f", $service->avg_rating) }} ({{ $service->total_rating }})</span>
                        </div>
                    </div>
                    <h3 class="service-card-title fw-semibold">
                        <a href="{{ route('service', html_decode($service->slug)) }}">
                            {{ html_decode($service->title) }}
                        </a>
                    </h3>
                    <div class="d-flex align-items-center service-card-author">
                        <div class="custom-reletive">
                            @if ($service?->seller?->image)
                                <img src="{{ asset($service?->seller?->image) }}" class="service-card-author-img" alt="" />
                            @else
                                <img src="{{ asset($general_setting->default_avatar) }}" class="service-card-author-img" alt="" />
                            @endif

                            @if ($service?->seller?->online_status == 1)
                                @if ($service?->seller?->online == 1)
                                    <span class="online-indicator2"></span>
                                @endif
                            @endif
                        </div>
                        <a href="{{ route('freelancer', $service?->seller?->username) }}" class="service-card-author-name">{{ html_decode($service?->seller?->name) }}</a>
                        @if($service?->seller?->kyc_status == 1)
                        <button class="varified-badge1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.007 2.10377C8.60544 1.65006 7.08181 2.28116 6.41156 3.59306L5.60578 5.17023C5.51004 5.35763 5.35763 5.51004 5.17023 5.60578L3.59306 6.41156C2.28116 7.08181 1.65006 8.60544 2.10377 10.007L2.64923 11.692C2.71404 11.8922 2.71404 12.1078 2.64923 12.308L2.10377 13.993C1.65006 15.3946 2.28116 16.9182 3.59306 17.5885L5.17023 18.3942C5.35763 18.49 5.51004 18.6424 5.60578 18.8298L6.41156 20.407C7.08181 21.7189 8.60544 22.35 10.007 21.8963L11.692 21.3508C11.8922 21.286 12.1078 21.286 12.308 21.3508L13.993 21.8963C15.3946 22.35 16.9182 21.7189 17.5885 20.407L18.3942 18.8298C18.49 18.6424 18.6424 18.49 18.8298 18.3942L20.407 17.5885C21.7189 16.9182 22.35 15.3946 21.8963 13.993L21.3508 12.308C21.286 12.1078 21.286 11.8922 21.3508 11.692L21.8963 10.007C22.35 8.60544 21.7189 7.08181 20.407 6.41156L18.8298 5.60578C18.6424 5.51004 18.49 5.35763 18.3942 5.17023L17.5885 3.59306C16.9182 2.28116 15.3946 1.65006 13.993 2.10377L12.308 2.64923C12.1078 2.71403 11.8922 2.71404 11.692 2.64923L10.007 2.10377ZM6.75977 11.7573L8.17399 10.343L11.0024 13.1715L16.6593 7.51465L18.0735 8.92886L11.0024 15.9999L6.75977 11.7573Z"></path></svg>
                            </span>
                        </button>
                        @endif
                    </div>
                    </div>
                </div>
                </article>
            @endforeach

          </div>
        </div>
      </section>
      <!-- Recent Viewed End -->
    </main>
    <!-- Main End -->
@endsection
