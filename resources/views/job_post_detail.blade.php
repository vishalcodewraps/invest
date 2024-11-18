@extends('layout')

@section('title')
    <title>{{ html_decode($job_post->title) }}</title>
    <meta name="title" content="{{ html_decode($job_post->title) }}">
@endsection


@section('front-content')
<!-- Main Start -->
<main class="bg-offWhite">
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
                    <h2 class="section-title-light mb-2">{{ __('translate.Job Details') }}</h2>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb w-breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('translate.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                        {{ __('translate.Job Details') }}
                        </li>
                    </ol>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Job Details -->
    <section class="py-110 ">
      <div class="container">
        <div class="">
          <div class="row pb-4">
            <div class="col-lg-8 mb-30 mb-lg-0">
              <div class="job-posts-container bg-white legal-content">
                <div class="row justify-content-between pb-5">
                  <div class="col-auto mb-40 mb-md-0">
                    <div>
                      <p
                        class="job-type d-flex gap-2 align-items-center mb-1"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="12"
                          height="10"
                          viewBox="0 0 12 10"
                          fill="none"
                        >
                          <path
                            d="M4.6875 5.33337H6.6875V6.00004H4.6875V5.33337Z"
                            fill="#22BE0D"
                          />
                          <path
                            d="M9.23064 5.99999H7.35556V6.33332C7.35556 6.51752 7.20642 6.66666 7.02222 6.66666H4.35556C4.17135 6.66666 4.02222 6.51752 4.02222 6.33332V5.99999H2.14714C1.71615 5.99999 1.33498 5.72525 1.19852 5.3164L0 1.72021V8.99999C0 9.55138 0.448611 9.99999 1 9.99999H10.3778C10.9292 9.99999 11.3778 9.55138 11.3778 8.99999V1.72048L10.1792 5.3164C10.0428 5.72525 9.66163 5.99999 9.23064 5.99999Z"
                            fill="#22BE0D"
                          />
                          <path
                            d="M7.02292 0H4.35625C3.80486 0 3.35625 0.448611 3.35625 1V1.33333H0.574219L1.83142 5.10547C1.877 5.24184 2.00425 5.33333 2.14783 5.33333H4.02292V5C4.02292 4.8158 4.17205 4.66667 4.35625 4.66667H7.02292C7.20712 4.66667 7.35625 4.8158 7.35625 5V5.33333H9.23134C9.37491 5.33333 9.50217 5.24184 9.54774 5.10547L10.805 1.33333H8.02292V1C8.02292 0.448611 7.57431 0 7.02292 0ZM4.02292 1.33333V1C4.02292 0.816059 4.17231 0.666667 4.35625 0.666667H7.02292C7.20686 0.666667 7.35625 0.816059 7.35625 1V1.33333H4.02292Z"
                            fill="#22BE0D"
                          /></svg>{{ __('translate.Job type') }}: <span>
                            @if ($job_post->job_type == 'Hourly')
                                    {{ __('translate.Hourly') }}
                                @elseif ($job_post->job_type == 'Daily')
                                {{ __('translate.Daily') }}
                                @elseif ($job_post->job_type == 'Monthly')
                                {{ __('translate.Monthly') }}
                                @elseif ($job_post->job_type == 'Yearly')
                                {{ __('translate.Yearly') }}
                                @endif
                          </span>
                      </p>
                      <h3 class="job-post-title fw-bold mb-1">
                        {{ html_decode($job_post->title) }}
                      </h3>
                      <p class="job-company mb-2">{{ html_decode($job_post?->user?->name) }}</p>
                      <div class="d-flex gap-3 mt-3">
                        <span class="job-post-date"
                          ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="11"
                            height="11"
                            viewBox="0 0 11 11"
                            fill="none"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M3.81482 0.513554C3.81482 0.298962 3.64085 0.125 3.42626 0.125C3.21167 0.125 3.03771 0.298962 3.03771 0.513554V1.7167C2.1876 2.14527 1.51131 2.86822 1.14274 3.75163H9.85443C9.48587 2.86823 8.80959 2.14529 7.95951 1.71672V0.513554C7.95951 0.298962 7.78555 0.125 7.57095 0.125C7.35636 0.125 7.1824 0.298962 7.1824 0.513554V1.4222C6.85642 1.33638 6.51416 1.29067 6.16124 1.29067H4.83594C4.48302 1.29067 4.14078 1.33638 3.81482 1.42219V0.513554ZM0.835938 5.29067C0.835938 5.03013 0.860848 4.7754 0.908418 4.52874H10.0888C10.1363 4.7754 10.1612 5.03013 10.1612 5.29068V6.87501C10.1612 9.08415 8.37038 10.875 6.16124 10.875H4.83594C2.6268 10.875 0.835938 9.08415 0.835938 6.87501V5.29067ZM5.49857 7.76653C5.7847 7.76653 6.01664 7.53458 6.01664 7.24846C6.01664 6.96234 5.7847 6.73039 5.49857 6.73039C5.21245 6.73039 4.9805 6.96234 4.9805 7.24846C4.9805 7.53458 5.21245 7.76653 5.49857 7.76653ZM8.08868 7.24846C8.08868 7.53458 7.85673 7.76653 7.5706 7.76653C7.28448 7.76653 7.05253 7.53458 7.05253 7.24846C7.05253 6.96234 7.28448 6.73039 7.5706 6.73039C7.85673 6.73039 8.08868 6.96234 8.08868 7.24846ZM3.42623 7.76653C3.71235 7.76653 3.9443 7.53458 3.9443 7.24846C3.9443 6.96234 3.71235 6.73039 3.42623 6.73039C3.1401 6.73039 2.90815 6.96234 2.90815 7.24846C2.90815 7.53458 3.1401 7.76653 3.42623 7.76653Z"
                              fill="#22BE0D"
                            /></svg>{{ $job_post->created_at->diffForHumans() }}</span
                        >
                        <span class="job-location">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="10"
                            height="11"
                            viewBox="0 0 10 11"
                            fill="none"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M5.15385 11C6.89904 11 9.80769 7.58895 9.80769 4.88889C9.80769 2.18883 7.72409 0 5.15385 0C2.5836 0 0.5 2.18883 0.5 4.88889C0.5 7.58895 3.40865 11 5.15385 11ZM5.15371 6.59992C6.01046 6.59992 6.70499 5.86119 6.70499 4.94992C6.70499 4.03865 6.01046 3.29992 5.15371 3.29992C4.29696 3.29992 3.60243 4.03865 3.60243 4.94992C3.60243 5.86119 4.29696 6.59992 5.15371 6.59992Z"
                              fill="#13544E"
                            /></svg>{{ $job_post?->city?->name }}</span
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    @auth('web')
                        <a
                        href="#"
                        type="button"
                        class="header-btn apply-now-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#jobDetailsModal"
                        >
                        {{ __('translate.Apply Now') }}
                        </a>
                    @else
                        <a
                        href="javascript:;"
                        type="button"
                        class="header-btn beforeLogin"

                        >
                        {{ __('translate.Apply Now') }}
                        </a>
                    @endauth

                    <h3 class="job-wage fw-bold mt-4">{{ __('translate.From') }} - {{ currency($job_post->regular_price) }}</h3>
                  </div>
                </div>
                <div class="pt-5 border-top">
                  <div class="content-details">
                    {!! clean(html_decode($job_post->description)) !!}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="bg-white company-profile-card">
                <div
                  class="d-flex gap-3 align-items-center company-profile-card-header"
                >
                  <div class="company-profile-card-icon">
                    @if ($job_post?->user?->image)
                    <img src="{{ asset($job_post?->user?->image) }}" class="rounded-circle" alt="buyer" />
                    @else
                    <img src="{{ asset($general_setting->default_avatar) }}" alt="buyer" class="rounded-circle" />
                    @endif

                  </div>
                  <div>
                    <a href="{{ route('buyers', $job_post?->user?->username) }}" class="company-profile-card-title fw-bold">
                      {{ $job_post?->user?->name }}
                    </a>
                    <p class="company-profile-card-desc">{{ $job_post?->user?->address }}</p>
                  </div>
                </div>
                <ul class="company-card-list">
                  <li
                    class=" d-flex justify-content-between gap-3 text-dark-200 company-card-list align-items-center"
                  >
                    <div class="d-flex gap-3 align-items-center">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="20"
                        viewBox="0 0 24 20"
                        fill="none"
                      >
                        <path
                          d="M20.7083 19H3.29167C2.0285 19 1 17.878 1 16.5V3.5C1 2.122 2.0285 1 3.29167 1H20.7083C21.9715 1 23 2.122 23 3.5V16.5C23 17.878 21.9715 19 20.7083 19ZM3.29167 2C2.53358 2 1.91667 2.673 1.91667 3.5V16.5C1.91667 17.327 2.53358 18 3.29167 18H20.7083C21.4664 18 22.0833 17.327 22.0833 16.5V3.5C22.0833 2.673 21.4664 2 20.7083 2H3.29167Z"
                          fill="#22BE0D"
                          stroke="#22BE0D"
                          stroke-width="0.4"
                        />
                        <path
                          d="M7.86589 10C6.60272 10 5.57422 8.878 5.57422 7.5C5.57422 6.122 6.60272 5 7.86589 5C9.12905 5 10.1576 6.122 10.1576 7.5C10.1576 8.878 9.12905 10 7.86589 10ZM7.86589 6C7.1078 6 6.49089 6.673 6.49089 7.5C6.49089 8.327 7.1078 9 7.86589 9C8.62397 9 9.24089 8.327 9.24089 7.5C9.24089 6.673 8.62397 6 7.86589 6Z"
                          fill="#22BE0D"
                          stroke="#22BE0D"
                          stroke-width="0.4"
                        />
                        <path
                          d="M11.5378 15C11.2848 15 11.0794 14.776 11.0794 14.5V13.5C11.0794 12.673 10.4625 12 9.70443 12H6.03776C5.27968 12 4.66276 12.673 4.66276 13.5V14.5C4.66276 14.776 4.45743 15 4.20443 15C3.95143 15 3.74609 14.776 3.74609 14.5V13.5C3.74609 12.122 4.77459 11 6.03776 11H9.70443C10.9676 11 11.9961 12.122 11.9961 13.5V14.5C11.9961 14.776 11.7908 15 11.5378 15Z"
                          fill="#22BE0D"
                          stroke="#22BE0D"
                          stroke-width="0.4"
                        />
                        <path
                          d="M19.7904 7H14.2904C14.0374 7 13.832 6.776 13.832 6.5C13.832 6.224 14.0374 6 14.2904 6H19.7904C20.0434 6 20.2487 6.224 20.2487 6.5C20.2487 6.776 20.0434 7 19.7904 7Z"
                          fill="#22BE0D"
                          stroke="#22BE0D"
                          stroke-width="0.4"
                        />
                        <path
                          d="M19.7904 11H14.2904C14.0374 11 13.832 10.776 13.832 10.5C13.832 10.224 14.0374 10 14.2904 10H19.7904C20.0434 10 20.2487 10.224 20.2487 10.5C20.2487 10.776 20.0434 11 19.7904 11Z"
                          fill="#22BE0D"
                          stroke="#22BE0D"
                          stroke-width="0.4"
                        />
                        <path
                          d="M19.7904 15H14.2904C14.0374 15 13.832 14.776 13.832 14.5C13.832 14.224 14.0374 14 14.2904 14H19.7904C20.0434 14 20.2487 14.224 20.2487 14.5C20.2487 14.776 20.0434 15 19.7904 15Z"
                          fill="#22BE0D"
                          stroke="#22BE0D"
                          stroke-width="0.4"
                        />
                      </svg>
                      {{ __('translate.Member Since') }}
                    </div>
                    <span class="text-dark-200 fs-6">{{ $job_post->created_at->format('Y') }}</span>
                  </li>
                  <li
                    class=" d-flex justify-content-between gap-3 text-dark-200 company-card-list align-items-center"
                  >
                    <div class="align-items-center d-flex gap-3">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                      >
                        <path
                          d="M12.25 3.25C12.25 2.00736 13.2574 1 14.5 1H16.75C17.9926 1 19 2.00736 19 3.25V5.5C19 6.74264 17.9926 7.75 16.75 7.75H14.5C13.2574 7.75 12.25 6.74264 12.25 5.5V3.25Z"
                          stroke="#22BE0D"
                          stroke-width="1.4"
                        />
                        <path
                          d="M1 14.5C1 13.2574 2.00736 12.25 3.25 12.25H5.5C6.74264 12.25 7.75 13.2574 7.75 14.5V16.75C7.75 17.9926 6.74264 19 5.5 19H3.25C2.00736 19 1 17.9926 1 16.75V14.5Z"
                          stroke="#22BE0D"
                          stroke-width="1.4"
                        />
                        <path
                          d="M1 3.25C1 2.00736 2.00736 1 3.25 1H5.5C6.74264 1 7.75 2.00736 7.75 3.25V5.5C7.75 6.74264 6.74264 7.75 5.5 7.75H3.25C2.00736 7.75 1 6.74264 1 5.5V3.25Z"
                          stroke="#22BE0D"
                          stroke-width="1.4"
                        />
                        <path
                          d="M12.25 14.5C12.25 13.2574 13.2574 12.25 14.5 12.25H16.75C17.9926 12.25 19 13.2574 19 14.5V16.75C19 17.9926 17.9926 19 16.75 19H14.5C13.2574 19 12.25 17.9926 12.25 16.75V14.5Z"
                          stroke="#22BE0D"
                          stroke-width="1.4"
                        />
                      </svg>
                      {{ __('translate.Category') }}
                    </div>
                    <div>
                      <span class="text-dark-200 fs-6">{{ $job_post?->category?->name }}</span>
                    </div>
                  </li>
                  <li
                    class=" d-flex justify-content-between gap-3 text-dark-200 company-card-list align-items-center"
                  >
                    <div
                      class="d-flex gap-3 text-dark-200 align-items-center"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="21"
                        height="21"
                        viewBox="0 0 21 21"
                        fill="none"
                      >
                        <mask
                          class="mask-type"
                          id="mask0_426_8309"
                          maskUnits="userSpaceOnUse"
                          x="0"
                          y="0"
                          width="21"
                          height="21"
                        >
                          <path
                            d="M20.0167 20.0167V0.65H0.65V20.0167H20.0167Z"
                            fill="white"
                            stroke="white"
                            stroke-width="1.3"
                          />
                        </mask>
                        <g mask="url(#mask0_426_8309)">
                          <path
                            d="M12.1536 5.08931H18.3243C19.3943 5.08931 20.2618 5.95675 20.2618 7.02682V17.5183C20.2618 18.5883 19.3943 19.4558 18.3243 19.4558H2.33985C1.26978 19.4558 0.402344 18.5883 0.402344 17.5183V7.02682C0.402344 5.95675 1.26978 5.08931 2.33985 5.08931H8.52078"
                            stroke="#22BE0D"
                            stroke-width="1.3"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M20.2618 8.31406C20.2618 10.448 18.5319 12.1779 16.398 12.1779H4.26614C2.13221 12.1779 0.402344 10.448 0.402344 8.31406"
                            stroke="#22BE0D"
                            stroke-width="1.3"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M10.3425 14.6929C9.49532 14.6929 8.80859 14.0061 8.80859 13.159V10.9162C8.80859 10.6315 9.03936 10.4008 9.32405 10.4008H11.3609C11.6455 10.4008 11.8763 10.6315 11.8763 10.9162V13.159C11.8763 14.0061 11.1896 14.6929 10.3425 14.6929Z"
                            stroke="#22BE0D"
                            stroke-width="1.3"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M5.32812 5.08936V3.1485C5.32812 2.07843 6.19556 1.21099 7.26563 1.21099H13.4011C14.4711 1.21099 15.3386 2.07843 15.3386 3.1485V5.08936"
                            stroke="#22BE0D"
                            stroke-width="1.3"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M5.32812 3.14856H15.3386"
                            stroke="#22BE0D"
                            stroke-width="1.3"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </g>
                      </svg>
                      {{ __('translate.Total Job') }}
                    </div>
                    <div>
                      <span class="text-dark-200 fs-6">{{ $total_job_by_author }}</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Job Grid End -->
  </main>
  <!-- Main End -->


  <!-- Modal -->
  <div
  class="modal fade"
  id="jobDetailsModal"
  tabindex="-1"
  aria-labelledby="jobDetailsModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="bg-white p-lg-5 rounded-3">
          <div class="proposal-container">
            <div class="proposal-header">
              <h3 class="text-dark-300 text-24 fw-bold">{{ __('translate.Submit Proposal') }}</h3>
            </div>
            <form method="POST" enctype="multipart/form-data" action="{{ route('seller.apply-job', $job_post->id) }}">
                @csrf
              <div class="d-flex flex-column gap-4">



                <div class="proposal-input-container">
                  <label for="time" class="proposal-form-label"
                    >{{ __('translate.Write your proposal') }}*</label
                  >
                  <textarea
                    placeholder="{{ __('translate.Write your proposal') }}"
                    class="form-textarea shadow-none"
                    name="description"

                  >{{ old('description') }}</textarea>
                </div>

                @if($general_setting->recaptcha_status==1)
                    <div class="proposal-input-container">
                        <div class="g-recaptcha" data-sitekey="{{ $general_setting->recaptcha_site_key }}"></div>
                    </div>
                @endif


                <div
                  class="d-flex gap-4 align-items-center justify-content-end"
                >
                  <button class="w-btn-gray-sm" type="button" data-bs-dismiss="modal">
                    {{ __('translate.Cancel') }}
                  </button>
                  <button type="submit" class="w-btn-secondary-sm">
                    {{ __('translate.Submit Proposal') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection




@push('js_section')

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
