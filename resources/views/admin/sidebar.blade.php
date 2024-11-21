<!-- Main Menu -->
<div class="admin-menu__one crancy-sidebar-padding mg-top-20">
    <h4 class="admin-menu__title">{{ __('translate.Main Menu') }}</h4>
    <!-- Nav Menu -->
    <div class="menu-bar">
        <ul id="CrancyMenu" class="menu-bar__one crancy-dashboard-menu">

            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.dashboard') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z"  stroke-width="1.5"/>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Dashboard') }}</span></span></a>
            </li>



            <li class="{{ Route::is('admin.orders') || Route::is('admin.order') || Route::is('admin.active-orders') || Route::is('admin.awaiting-orders') || Route::is('admin.reject-orders') || Route::is('admin.cancel-orders') || Route::is('admin.complete-orders') || Route::is('admin.pending-payment-orders') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__order"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H16M8 14H16M6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>


                </span>

                <span class="menu-bar__name">{{ __('translate.Manage Order') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.orders') || Route::is('admin.order') || Route::is('admin.active-orders') || Route::is('admin.awaiting-orders') || Route::is('admin.reject-orders') || Route::is('admin.cancel-orders') || Route::is('admin.complete-orders') || Route::is('admin.pending-payment-orders') ? 'show' : '' }}" id="menu-item__order"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">


                        <li><a href="{{ route('admin.orders') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.All Orders') }}</span></span></a></li>
{{-- 
                        <li><a href="{{ route('admin.active-orders') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Active Orders') }}</span></span></a></li>

                        <li><a href="{{ route('admin.awaiting-orders') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Awaiting Orders') }}</span></span></a></li>

                        <li><a href="{{ route('admin.reject-orders') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Rejected Orders') }}</span></span></a></li>

                        <li><a href="{{ route('admin.cancel-orders') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Cancel Orders') }}</span></span></a></li>

                        <li><a href="{{ route('admin.complete-orders') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Complete Orders') }}</span></span></a></li>

                        <li><a href="{{ route('admin.pending-payment-orders') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Pending Payment Order') }}</span></span></a></li> --}}

                    </ul>
                </div>
            </li>

            <li class="{{ Route::is('admin.category.*') || Route::is('admin.city*') || Route::is('admin.listings*') || Route::is('admin.select-listing-purpose') || Route::is('admin.featured-listing') || Route::is('admin.awaiting-listing') || Route::is('admin.review-list') || Route::is('admin.review-detail') ||  Route::is('admin.job-posts')  ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__car_list"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H16M8 14H16M6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>


                </span>

                <span class="menu-bar__name">{{ __('translate.Manage Service') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.category.*') || Route::is('admin.sub-category.*')  || Route::is('admin.listings*') || Route::is('admin.featured-listings') || Route::is('admin.awaiting-listings') || Route::is('admin.review-list') || Route::is('admin.review-detail') ? 'show' : '' }}" id="menu-item__car_list"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.category.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Category List') }}</span></span></a></li>

                        <li><a href="{{ route('admin.sub-category.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Sub Category List') }}</span></span></a></li>

                         <li><a href="{{ route('admin.listings.create') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Create Service') }}</span></span></a></li>

                        <li><a href="{{ route('admin.listings.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.All Services') }}</span></span></a></li>

                        <li><a href="{{ route('admin.awaiting-listings') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Awaiting Service') }}</span></span></a></li>

                        <li><a href="{{ route('admin.featured-listings') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Featured Service') }}</span></span></a></li>

                        <li><a href="{{ route('admin.review-list') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Review List') }}</span></span></a></li> 
                    </ul>
                </div>
            </li>


            {{-- <li class="{{ Route::is('admin.jobpost.*') || Route::is('admin.city*') || Route::is('admin.job-post-applicants') || Route::is('admin.awaiting-jobpost') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__jobpost"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H16M8 14H16M6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>


                </span>

                <span class="menu-bar__name">{{ __('translate.Manage Job Post') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.jobpost.*') || Route::is('admin.job-post-applicants') || Route::is('admin.awaiting-jobpost') || Route::is('admin.city*') ? 'show' : '' }}" id="menu-item__jobpost"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.city.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.City List') }}</span></span></a></li>

                        <li><a href="{{ route('admin.jobpost.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.All Job Post') }}</span></span></a></li>

                        <li><a href="{{ route('admin.awaiting-jobpost') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Awaiting Job Post') }}</span></span></a></li>


                    </ul>
                </div>
            </li> --}}


            {{-- @if (checkModule('Refund'))
            @include('refund::admin.sidebar')
            @endif

            @if (checkModule('Subscription'))
                @include('subscription::admin.sidebar')
            @endif

            @if (checkModule('KYC'))
            @include('kyc::admin.sideber')
            @endif --}}

            <li class="{{ Route::is('admin.withdraw-methods.*') || Route::is('admin.withdraw-list.*') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__withdraw_list"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H16M8 14H16M6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>


                </span>

                <span class="menu-bar__name">{{ __('translate.Manage Withdraw') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.withdraw-methods.*') || Route::is('admin.withdraw-list.*') ? 'show' : '' }}" id="menu-item__withdraw_list"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.withdraw-methods.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Withdraw Method') }}</span></span></a></li>

                        <li><a href="{{ route('admin.withdraw-list.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Withdraw List') }}</span></span></a></li>

                    </ul>
                </div>
            </li>


            <li class="{{ Route::is('admin.seller-list') || Route::is('admin.pending-seller') || Route::is('admin.seller-show') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__seller"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="11.7778" cy="18.1111" rx="7.77778" ry="3.88889" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/>
                        <circle cx="11.7775" cy="6.44444" r="4.44444" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Manage Seller') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.seller-list') || Route::is('admin.pending-seller')  || Route::is('admin.seller-show') ? 'show' : '' }}" id="menu-item__seller"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.seller-list') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Seller List') }}</span></span></a></li>

                        <li><a href="{{ route('admin.pending-seller') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Pending Seller') }}</span></span></a></li>



                    </ul>
                </div>
            </li>




            <li class="{{ Route::is('admin.user-list') || Route::is('admin.pending-user') || Route::is('admin.user-show') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__users"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="11.7778" cy="18.1111" rx="7.77778" ry="3.88889" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/>
                        <circle cx="11.7775" cy="6.44444" r="4.44444" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Manage Buyer') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.user-list') || Route::is('admin.pending-user')  || Route::is('admin.user-show') ? 'show' : '' }}" id="menu-item__users"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.user-list') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Buyer List') }}</span></span></a></li>

                        <li><a href="{{ route('admin.pending-user') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Pending Buyer') }}</span></span></a></li>



                    </ul>
                </div>
            </li>


            <li class="{{ Route::is('admin.contact-message') || Route::is('admin.show-message') ? 'active' : '' }}""><a class="collapsed" href="{{ route('admin.contact-message') }}">
                <span class="menu-bar__text">
                    <span class="crancy-menu-icon crancy-svg-icon__v1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 8L9.7812 10.5208C11.1248 11.4165 12.8752 11.4165 14.2188 10.5208L18 8M6 21H18C20.2091 21 22 19.2091 22 17V7C22 4.79086 20.2091 3 18 3H6C3.79086 3 2 4.79086 2 7V17C2 19.2091 3.79086 21 6 21Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </span>
                    <span class="menu-bar__name">{{ __('translate.Contact Message') }}</span>
                </span>

                </a>
            </li>

            <h4 class="admin-menu__title pt-2">{{ __('translate.CMS & Blogs') }}</h4>

            <li class="{{ Route::is('admin.blog.*') || Route::is('admin.blog-category.*') || Route::is('admin.comment-list') || Route::is('admin.show-comment') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__blog"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10.0002H17M7 14.0002H17M7 18.0002H12M7 6.00019L10.5858 2.4144C11.3668 1.63335 12.6332 1.63335 13.4142 2.4144L17 6.00019M6 22.0002H18C20.2091 22.0002 22 20.2093 22 18.0002V10.0002C22 7.79105 20.2091 6.00019 18 6.00019H6C3.79086 6.00019 2 7.79105 2 10.0002V18.0002C2 20.2093 3.79086 22.0002 6 22.0002Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Manage Blog') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.blog.*') || Route::is('admin.blog-category.*') || Route::is('admin.comment-list') || Route::is('admin.show-comment') ? 'show' : '' }}" id="menu-item__blog"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        

                        <li><a href="{{ route('admin.blog.create') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Create Blog') }}</span></span></a></li>

                        <li><a href="{{ route('admin.blog.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Blog List') }}</span></span></a></li>

                       


                    </ul>
                </div>
            </li>


            <li class="{{ Route::is('admin.team.*') || Route::is('admin.team-list.*') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__team"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10.0002H17M7 14.0002H17M7 18.0002H12M7 6.00019L10.5858 2.4144C11.3668 1.63335 12.6332 1.63335 13.4142 2.4144L17 6.00019M6 22.0002H18C20.2091 22.0002 22 20.2093 22 18.0002V10.0002C22 7.79105 20.2091 6.00019 18 6.00019H6C3.79086 6.00019 2 7.79105 2 10.0002V18.0002C2 20.2093 3.79086 22.0002 6 22.0002Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <span class="menu-bar__name">Manage Team</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.team.*') || Route::is('admin.team-list.*') ? 'show' : '' }}" id="menu-item__team"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">     

                        <li><a href="{{ route('admin.teamcreate') }}"><span class="menu-bar__text"><span class="menu-bar__name">Create Team</span></span></a></li>

                        <li><a href="{{ route('admin.team-list') }}"><span class="menu-bar__text"><span class="menu-bar__name">Team List</span></span></a></li>

                    </ul>
                </div>
            </li>


            <li class="{{ Route::is('admin.terms-conditions') || Route::is('admin.privacy-policy') || Route::is('admin.faq.*') || Route::is('admin.custom-page.*') || Route::is('admin.contact-us') || Route::is('admin.about-us') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__pages"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 15V6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V15M2 15C2 17.2091 3.79086 19 6 19H18C20.2091 19 22 17.2091 22 15M2 15H22M12 19V22M12 22H9M12 22H15M7 7H12M7 11H17" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Manage Pages') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.terms-conditions') || Route::is('admin.privacy-policy') || Route::is('admin.faq.*') || Route::is('admin.custom-page.*') || Route::is('admin.contact-us') || Route::is('admin.about-us') ? 'show' : '' }}" id="menu-item__pages"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.about-us', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.About Us') }}</span></span></a></li>

                        <li><a href="{{ route('admin.contact-us', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Contact Us') }}</span></span></a></li>

                        <li><a href="{{ route('admin.terms-conditions', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Terms and Conditions') }}</span></span></a></li>

                        <li><a href="{{ route('admin.privacy-policy', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Privacy Policy') }}</span></span></a></li>

                        <li><a href="{{ route('admin.faq.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.FAQ') }}</span></span></a></li>


                        <li><a href="{{ route('admin.custom-page.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Custom Page') }}</span></span></a></li>

                    </ul>
                </div>
            </li>


            <li class="{{ Route::is('admin.intro-section') || Route::is('admin.intro2-section') || Route::is('admin.join-seller') || Route::is('admin.working-step') || Route::is('admin.counter') || Route::is('admin.testimonial.*') || Route::is('admin.footer') || Route::is('admin.explore-section') || Route::is('admin.our-feature') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__for_section"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H16M8 14H16M6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Manage Section') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.intro-section') || Route::is('admin.intro2-section') || Route::is('admin.join-seller') || Route::is('admin.working-step') || Route::is('admin.counter') || Route::is('admin.testimonial.*') || Route::is('admin.footer') || Route::is('admin.explore-section') || Route::is('admin.our-feature') ? 'show' : '' }}" id="menu-item__for_section"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.intro-section', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">Manage Banner</span></span></a></li>

                        <li><a href="{{ route('admin.intro2-section', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Intro Section') }}({{ __('translate.Home-2') }})</span></span></a></li>

                        <li><a href="{{ route('admin.working-step', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Working Step') }}</span></span></a></li>

                        <li><a href="{{ route('admin.our-feature', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Our Feature') }}</span></span></a></li>


                        <li><a href="{{ route('admin.join-seller', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Join Seller') }}</span></span></a></li>


                        <li><a href="{{ route('admin.explore-section', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Explore Us') }}</span></span></a></li>


                        <li><a href="{{ route('admin.footer', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Footer Info') }}</span></span></a></li>


                        <li><a href="{{ route('admin.testimonial.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Testimonial') }}</span></span></a></li>

                    </ul>
                </div>
            </li>


            

        

            

        </ul>
    </div>
    <!-- End Nav Menu -->
</div>


<div class="crancy-sidebar-padding pd-btm-40 pb-btm2">
    <h4 class="admin-menu__title">{{ __('translate.Others') }}</h4>
    <!-- Nav Menu -->
    <div class="menu-bar">
        <ul class="menu-bar__one crancy-dashboard-menu" id="CrancyMenu">
            <li class="{{ Route::is('admin.newsletter-list') || Route::is('admin.newsletter-email') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__apps_newsletter"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 9H12M8 13H16M8 17H16M15.9995 2V5M7.99951 2V5M7 3.5H17C19.2091 3.5 21 5.29086 21 7.5V18C21 20.2091 19.2091 22 17 22H7C4.79086 22 3 20.2091 3 18V7.5C3 5.29086 4.79086 3.5 7 3.5Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Newsletter') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.newsletter-list') || Route::is('admin.newsletter-email') ? 'show' : '' }}" id="menu-item__apps_newsletter"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.newsletter-list') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Subscriber List') }}</span></span></a></li>

                        <li><a href="{{ route('admin.newsletter-email') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Send Mail') }}</span></span></a></li>

                    </ul>
                </div>
            </li>

            <li><a class="collapsed" href="{{ route('admin.cache-clear') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.6805 5.42846C21.3463 5.19352 20.8912 5.2823 20.6635 5.62676L19.1708 7.88444C18.783 6.02074 17.8848 4.30822 16.5482 2.92959C14.7168 1.04041 12.2819 0 9.69185 0C7.10188 0 4.66687 1.04041 2.83548 2.92959C-0.945161 6.82953 -0.945161 13.1752 2.83548 17.075C4.72581 19.025 7.20883 20 9.69185 20C12.1749 20 14.6579 19.025 16.5482 17.075C16.834 16.7802 16.834 16.3022 16.5482 16.0073C16.2624 15.7125 15.799 15.7125 15.5133 16.0073C12.3033 19.3185 7.08051 19.3185 3.87061 16.0073C0.660715 12.6962 0.660715 7.30837 3.87061 3.99718C5.42555 2.39328 7.49289 1.50989 9.69195 1.50989C11.891 1.50989 13.9584 2.39328 15.5133 3.99728C16.7134 5.23519 17.4956 6.79068 17.7908 8.47934L15.1929 6.65157C14.859 6.41663 14.4037 6.50541 14.176 6.84987C13.9482 7.19432 14.0343 7.664 14.3682 7.89894L18.2435 10.6255C18.2437 10.6256 18.2439 10.6258 18.2441 10.626C18.3054 10.6691 18.3707 10.7008 18.438 10.7224C18.44 10.7231 18.442 10.7242 18.444 10.7248C18.4554 10.7285 18.467 10.7299 18.4786 10.7329C18.5371 10.748 18.5964 10.7573 18.6558 10.7573C18.8896 10.7573 19.1194 10.6419 19.2611 10.4277L21.8727 6.47763C22.1004 6.13307 22.0144 5.66339 21.6805 5.42846Z" fill="white"/>
                </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Cache Clear') }}</span></span></a>
            </li>

            <li><a href="javascript:;" onclick="event.preventDefault();
                document.getElementById('admin-sidebar-logout').submit();" class="collapsed"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none">
                        <path d="M19 11L20.2929 9.70711C20.6834 9.31658 20.6834 8.68342 20.2929 8.29289L19 7" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 9H12M5 17C2.79086 17 1 15.2091 1 13V5C1 2.79086 2.79086 1 5 1M5 17C7.20914 17 9 15.2091 9 13V5C9 2.79086 7.20914 1 5 1M5 17H13C15.2091 17 17 15.2091 17 13M5 1H13C15.2091 1 17 2.79086 17 5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Logout') }}</span></span></a>
            </li>

            <form id="admin-sidebar-logout" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </ul>
    </div>
    <!-- End Nav Menu -->
    <!-- Support Card -->
   <p class=" crancy-ybcolor mg-top-20">{{ __('translate.Version') }} : {{ $general_setting->app_version }}</p>
    <!-- End Support Card -->
</div>
