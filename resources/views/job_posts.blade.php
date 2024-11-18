@extends('layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('front-content')
<!-- Main Start -->
<main>
    <!-- Breadcrumb -->
    <section
    class="w-breadcrumb-area"
    style="background-image: url({{ asset($general_setting->breadcrumb_image) }});">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                <div
                    class="position-relative z-2"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-easing="linear"
                >
                    <h2 class="section-title-light mb-2">{{ __('translate.Job Posts') }}</h2>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb w-breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('translate.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                        {{ __('translate.Job Posts') }}
                        </li>
                    </ol>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Job Grid -->
    <section class="job-posts py-110 bg-offWhite">
      <div class="container">
        <div class="row gap-4 justify-content-between mb-40">
          <div class="col-auto d-none d-lg-block">
            <div class="bg-white job-post-filter py-2 px-2">
              <form action="">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center job-post-input">
                    <svg
                      width="14"
                      height="14"
                      viewBox="0 0 14 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.9 10.9L13 13M12.4 6.7C12.4 3.55198 9.84802 1 6.7 1C3.55198 1 1 3.55198 1 6.7C1 9.84802 3.55198 12.4 6.7 12.4C9.84802 12.4 12.4 9.84802 12.4 6.7Z"
                        stroke="#A7AEBA"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                    <input
                      type="text"
                      class="form-control shadow-none"
                      placeholder="{{ __('translate.Job Title or Keywords') }}"
                      name="keyword"
                      value="{{ request()->get('keyword') }}"
                    />
                  </div>

                  <div class="d-flex align-items-center job-post-input">
                    <select class="form-select shadow-none" name="category_id">
                      <option value="">{{ __('translate.All Categories') }}</option>
                      @foreach ($categories as $category)
                      <option {{ request()->get('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach

                    </select>
                  </div>

                  <div class="d-flex align-items-center job-post-input">
                    <select class="form-select shadow-none" name="city_id">
                      <option value="">{{ __('translate.All Cities') }}</option>
                      @foreach ($cities as $city)
                      <option {{ request()->get('city_id') == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="ps-3 flex-shrink-0">
                    <button class="job-filter-btn">{{ __('translate.Find Job') }}</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-auto">
            <div>
              <nav>
                <div
                  class="nav tab-nav d-flex gap-3 align-items-center"
                  id="nav-tab"
                  role="tablist"
                >
                  <button
                    class="tab-link active"
                    id="nav-grid-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-grid"
                    type="button"
                    role="tab"
                    aria-controls="nav-grid"
                    aria-selected="true"
                  >
                    <svg
                      width="28"
                      height="27"
                      viewBox="0 0 28 27"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.75105 0.666748H3.89071C2.11283 0.666748 0.666016 2.11356 0.666016 3.89144V9.75106C0.666016 11.5289 2.11283 12.9758 3.89071 12.9758H9.75033C11.5282 12.9758 12.975 11.5289 12.975 9.75106V3.89144C12.9757 2.11356 11.5289 0.666748 9.75105 0.666748ZM10.8259 9.75178C10.8259 10.3444 10.3437 10.8267 9.75105 10.8267H3.89071C3.29808 10.8267 2.81581 10.3444 2.81581 9.75178V3.89216C2.81581 3.29953 3.29808 2.81726 3.89071 2.81726H9.75033C10.343 2.81726 10.8252 3.29953 10.8252 3.89216L10.8259 9.75178ZM24.2493 0.666748H18.3889C16.611 0.666748 15.1642 2.11356 15.1642 3.89144V9.75106C15.1642 11.5289 16.611 12.9758 18.3889 12.9758H24.2493C26.0271 12.9758 27.474 11.5289 27.474 9.75106V3.89144C27.474 2.11356 26.0279 0.666748 24.2493 0.666748ZM25.3242 9.75178C25.3242 10.3444 24.8419 10.8267 24.2493 10.8267H18.3889C17.7963 10.8267 17.314 10.3444 17.314 9.75178V3.89216C17.314 3.29953 17.7963 2.81726 18.3889 2.81726H24.2493C24.8419 2.81726 25.3242 3.29953 25.3242 3.89216V9.75178ZM9.75105 14.4749H3.89071C2.11283 14.4749 0.666016 15.9217 0.666016 17.6996V23.5592C0.666016 25.3371 2.11283 26.7839 3.89071 26.7839H9.75033C11.5282 26.7839 12.975 25.3371 12.975 23.5592V17.6996C12.9757 15.921 11.5289 14.4749 9.75105 14.4749ZM10.8259 23.5592C10.8259 24.1518 10.3437 24.6341 9.75105 24.6341H3.89071C3.29808 24.6341 2.81581 24.1518 2.81581 23.5592V17.6996C2.81581 17.1069 3.29808 16.6247 3.89071 16.6247H9.75033C10.343 16.6247 10.8252 17.1069 10.8252 17.6996L10.8259 23.5592ZM24.2493 14.4749H18.3889C16.611 14.4749 15.1642 15.9217 15.1642 17.6996V23.5592C15.1642 25.3371 16.611 26.7839 18.3889 26.7839H22.7673C23.3607 26.7839 23.8422 26.3023 23.8422 25.709C23.8422 25.1156 23.3607 24.6341 22.7673 24.6341H18.3889C17.7963 24.6341 17.314 24.1518 17.314 23.5592V17.6996C17.314 17.1069 17.7963 16.6247 18.3889 16.6247H24.2493C24.8419 16.6247 25.3242 17.1069 25.3242 17.6996V22.6111C25.3242 23.2045 25.8057 23.686 26.3991 23.686C26.9924 23.686 27.474 23.2045 27.474 22.6111V17.6996C27.474 15.921 26.0279 14.4749 24.2493 14.4749Z"
                        fill="currentColor"
                      />
                    </svg>
                  </button>
                  <button
                    class="tab-link"
                    id="nav-list-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-list"
                    type="button"
                    role="tab"
                    aria-controls="nav-list"
                    aria-selected="false"
                  >
                    <svg
                      width="37"
                      height="25"
                      viewBox="0 0 37 25"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M31.7591 0.0675049H9.23663C7.99275 0.0675049 6.98438 1.07588 6.98438 2.31976C6.98438 3.56363 7.99275 4.57201 9.23663 4.57201H31.7591C33.003 4.57201 34.0114 3.56363 34.0114 2.31976C34.0114 1.07588 33.003 0.0675049 31.7591 0.0675049Z"
                        fill="currentColor"
                      />
                      <path
                        d="M4.73392 2.31992C4.73138 1.72356 4.49243 1.15255 4.0695 0.732079C3.19105 -0.141162 1.77228 -0.141162 0.893827 0.732079C0.470826 1.15255 0.231876 1.72356 0.229413 2.31992C0.212591 2.46582 0.212591 2.6132 0.229413 2.7591C0.254892 2.90585 0.296417 3.04936 0.353287 3.18703C0.413746 3.32041 0.485325 3.4485 0.567251 3.56992C0.648121 3.69618 0.742504 3.81323 0.848782 3.91901C0.95126 4.02107 1.06451 4.11172 1.18662 4.18928C1.30522 4.27564 1.4338 4.34751 1.5695 4.40325C1.71878 4.48067 1.87792 4.53754 2.04248 4.57217C2.18838 4.5885 2.33576 4.5885 2.48166 4.57217C3.0764 4.57266 3.64721 4.33786 4.0695 3.91901C4.17578 3.81323 4.27016 3.69618 4.35103 3.56992C4.43296 3.4485 4.50454 3.32041 4.565 3.18703C4.56824 3.18089 4.57146 3.17473 4.57464 3.16856C4.70896 2.90814 4.76748 2.61101 4.73392 2.31992Z"
                        fill="currentColor"
                      />
                      <path
                        d="M4.74535 12.7242C4.75011 12.5451 4.74956 12.365 4.74495 12.1859C4.74202 12.0724 4.72076 11.9599 4.68129 11.8535C4.64883 11.7659 4.60966 11.6809 4.5641 11.5992C4.5061 11.461 4.43438 11.329 4.35014 11.205C4.27208 11.0802 4.17735 10.9665 4.06861 10.8672C3.19016 9.99397 1.77138 9.99397 0.89293 10.8672C0.469929 11.2877 0.230979 11.8587 0.228516 12.455C0.232879 12.7519 0.290101 13.0454 0.397435 13.3222C0.453882 13.4554 0.521731 13.5835 0.600137 13.705C0.685793 13.8274 0.783907 13.9407 0.89293 14.0429C0.992451 14.1514 1.10605 14.2462 1.23077 14.3244C1.34936 14.4108 1.47788 14.4827 1.61365 14.5384C1.75097 14.5962 1.89462 14.6378 2.04158 14.6623C2.18565 14.6946 2.3331 14.7097 2.48077 14.7073C2.62667 14.7241 2.77405 14.7241 2.91996 14.7073C3.06326 14.6827 3.20318 14.6411 3.33662 14.5834C3.47605 14.5281 3.60837 14.4562 3.73077 14.3695C3.85549 14.2912 3.96908 14.1965 4.06861 14.0879C4.17714 13.9884 4.27187 13.8748 4.35014 13.7501C4.43671 13.6316 4.50857 13.503 4.5641 13.3672C4.64103 13.2177 4.69783 13.0587 4.73302 12.8942C4.73973 12.8377 4.74383 12.781 4.74535 12.7242Z"
                        fill="currentColor"
                      />
                      <path
                        d="M4.74538 22.863C4.75058 22.6814 4.74994 22.4987 4.74493 22.3171C4.74187 22.2062 4.72134 22.0962 4.68405 21.9916C4.65108 21.8992 4.61103 21.8094 4.56424 21.7229C4.50378 21.5896 4.4322 21.4615 4.35027 21.3401C4.27201 21.2153 4.17727 21.1017 4.06874 21.0022C3.19029 20.129 1.77152 20.129 0.893068 21.0022C0.784538 21.1017 0.689802 21.2153 0.611536 21.3401C0.529611 21.4615 0.458031 21.5896 0.397573 21.7229C0.339155 21.86 0.297559 22.0038 0.273699 22.1509C0.241956 22.2951 0.226894 22.4424 0.228654 22.5901C0.231187 23.1864 0.470137 23.7574 0.893068 24.1779C0.992589 24.2864 1.10619 24.3812 1.23091 24.4594C1.3495 24.5459 1.47802 24.6177 1.61379 24.6734C1.75111 24.7312 1.89476 24.7728 2.04172 24.7973C2.18579 24.8296 2.33324 24.8447 2.48091 24.8423C2.62681 24.8591 2.77419 24.8591 2.92009 24.8423C3.06339 24.8177 3.20332 24.7761 3.33676 24.7184C3.47619 24.6631 3.60851 24.5913 3.73091 24.5045C3.85562 24.4262 3.96922 24.3315 4.06874 24.2229C4.17727 24.1234 4.27201 24.0098 4.35027 23.8851C4.43692 23.7666 4.50878 23.6381 4.56424 23.5022C4.6411 23.3527 4.6979 23.1937 4.73316 23.0292C4.73972 22.974 4.74379 22.9185 4.74538 22.863Z"
                        fill="currentColor"
                      />
                      <path
                        d="M34.0114 10.2026H9.23663C7.99275 10.2026 6.98438 11.211 6.98438 12.4549C6.98438 13.6988 7.99275 14.7071 9.23663 14.7071H34.0114C35.2553 14.7071 36.2637 13.6988 36.2637 12.4549C36.2637 11.211 35.2553 10.2026 34.0114 10.2026Z"
                        fill="currentColor"
                      />
                      <path
                        d="M23.8763 20.338H9.23663C7.99275 20.338 6.98438 21.3464 6.98438 22.5903C6.98438 23.8341 7.99275 24.8425 9.23663 24.8425H23.8763C25.1201 24.8425 26.1285 23.8341 26.1285 22.5903C26.1285 21.3464 25.1201 20.338 23.8763 20.338Z"
                        fill="currentColor"
                      />
                    </svg>
                  </button>
                </div>
              </nav>
            </div>
          </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="nav-grid"
            role="tabpanel"
            aria-labelledby="nav-grid-tab"
            tabindex="0"
          >
           @if ($job_posts->count() > 0)
            <div class="row row-gap-4 row-cols-md-2 row-cols-lg-3 row-cols-xl-5" >



                    @foreach ($job_posts as $job_post)
                        <article>
                            <div class="job-post bg-white position-relative">
                            <div class="job-type-badge position-absolute d-flex flex-column gap-2" >
                                <p class="job-type-badge-tertiary">
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
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="job-post-icon">
                                    <img src="{{ asset($job_post->thumb_image) }}" width="100" height="100" alt="" />
                                </div>
                                <p class="job-post-subtitle fw-normal">{{ __('translate.From') }} - {{ currency($job_post->regular_price) }}</p>
                                <h3 class="job-post-title fw-semibold">
                                    <a href="{{ route('job-post', $job_post->slug) }}">
                                        {{ html_decode($job_post->title) }}
                                    </a>
                                </h3>
                                <a href="{{ route('job-post', ['slug' => $job_post->slug, 'is_apply' => 'yes']) }}" class="w-btn-primary-lg">
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
            @else
                    <!-- Listing Not Found Start -->
                    <section class="bg-offWhite">
                        <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                            <div
                                class=" p-lg-5 p-3 rounded-3 not-found-img d-flex flex-column flex-wrap align-items-center"
                            >
                                <img
                                src="{{ asset($general_setting->not_found) }}"
                                class="img-fluid"
                                alt="listing-not-found"
                                />
                            </div>
                            <div class=" text-center">
                                <h2 class="section-title fw-semibold mb-3 mb-2">{{ __('translate.Sorry!! Jobpost Not Found') }}</h2>
                                <p class="mb-4">{{ __('translate.Whoops... this information is not available for a moment') }}</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </section>
                    <!-- Listing Not Found End -->
                @endif
          </div>

          <div
            class="tab-pane fade"
            id="nav-list"
            role="tabpanel"
            aria-labelledby="nav-list-tab"
            tabindex="0"
          >
            @if ($job_posts->count() > 0)
            <div class="row">
                    @foreach ($job_posts as $job_post)
                        <article class="col-xl-4 col-md-6 mb-4">
                            <div class="job-post-horizontal align-items-center d-flex gap-3 bg-white" >
                            <div class="job-post-horizontal-img flex-shrink-0">
                                <img src="{{ asset($job_post->thumb_image) }}" alt="" />
                            </div>
                            <div class="flex-grow-1">
                                <div class="mb-2 d-flex gap-3 align-items-center">
                                    @if ($job_post->is_urgent == 'enable')
                                    <p class="job-type-badge-primary">{{ __('translate.Urgent') }}</p>
                                    @endif
                                <h4 class="job-price-range fw-medium">{{ currency($job_post->regular_price) }}</h4>
                                </div>
                                <h3 class="job-post-horizontal-title fw-semibold mb-2">
                                    <a href="{{ route('job-post', $job_post->slug) }}">
                                        {{ html_decode($job_post->title) }}
                                    </a>
                                </h3>
                                <a href="{{ route('job-post', ['slug' => $job_post->slug, 'is_apply' => 'yes']) }}" class="w-btn-link">
                                    {{ __('translate.Apply Now') }}
                                <svg
                                    width="14"
                                    height="11"
                                    viewBox="0 0 14 11"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M9 9.77393L13 5.53583M13 5.53583L9 1.29774M13 5.53583L1 5.53583"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    />
                                </svg>
                                </a>
                            </div>
                            </div>
                        </article>
                    @endforeach
            </div>
             @else
                    <!-- Listing Not Found Start -->
                    <section class="bg-offWhite ">
                        <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                            <div
                                class=" p-lg-5 p-3 rounded-3 not-found-img d-flex flex-column flex-wrap align-items-center"
                            >
                                <img
                                src="{{ asset($general_setting->not_found) }}"
                                class="img-fluid"
                                alt="listing-not-found"
                                />
                            </div>
                            <div class=" text-center">
                                <h2 class="section-title fw-semibold mb-3 mb-2">{{ __('translate.Sorry!! Jobpost Not Found') }}</h2>
                                <p class="mb-4">{{ __('translate.Whoops... this information is not available for a moment') }}</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </section>
                    <!-- Listing Not Found End -->
                @endif
          </div>
        </div>

        @if ($job_posts->hasPages())
            <div class="row justify-content-center mt-5">
                <div class="col-auto">

                {{ $job_posts->links('custom_pagination') }}
                </div>
            </div>
        @endif

      </div>
    </section>
    <!-- Job Grid End -->
  </main>
  <!-- Main End -->

@endsection
