<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Site Title -->
		<title>{{ __('translate.Login') }}</title>

		<!-- Fav Icon -->
		<link rel="icon" href="{{ asset($general_setting->favicon) }}">

        <!--  Stylesheet -->
		<link rel="stylesheet" href="{{ asset('/backend/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/css/slick.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/css/font-awesome-all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/css/nice-select.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/css/dev.css') }}">
        <link rel="stylesheet" href="{{ asset('global/toastr/toastr.min.css') }}">


	</head>
	<body id="crancy-dark-light">

		<div class="body-bg">

			<section class="crancy-wc crancy-wc__full crancy-bg-cover">
				<div class="crancy-wc__form">
					<!-- Welcome Banner -->
					<div class="crancy-wc__form--middle">
						<div class="crancy-wc__form-inner-flex">
						<div class="crancy-wc__form-inner">
							<div class="crancy-wc__logo">
								<a href="{{ route('home') }}"><img src="{{ asset($general_setting->logo) }}" alt="#"></a>
							</div>

							<div class="crancy-wc__form-inside-df">
							<div class="crancy-wc__form-inside">
								<div class="crancy-wc__form-middle">
									<div class="crancy-wc__form-top">
										<div class="crancy-wc__heading pd-btm-20">
											<h3 class="crancy-wc__form-title crancy-wc__form-title__one m-0">{{ __('translate.Login Here') }}</h3>
										</div>
										<!-- Sign in Form -->
										<form class="crancy-wc__form-main" action="{{ route('admin.store-login') }}" method="post">
											@csrf
											<div class="row">
												<div class="col-12">
													<!-- Form Group -->
													<div class="form-group">
														<div class="form-group__input">
															<input class="crancy-wc__form-input" type="email" name="email" placeholder="{{ __('translate.Email') }}">
														</div>
													</div>
												</div>
												<div class="col-12">
													<!-- Form Group -->
													<div class="form-group">
														<div class="form-group__input">
															<input class="crancy-wc__form-input" placeholder="{{ __('translate.Password') }}" id="password-field" type="password" name="password">
															<span class="crancy-wc__toggle"><i class="fas fa-eye-slash" id="toggle-icon"></i></span>
														</div>
													</div>
												</div>
											</div>

											<!-- Form Group -->
											<div class="form-group mg-top-30">
												<div class="crancy-wc__button">
													<button class="ntfmax-wc__btn" type="submit">{{ __('translate.Login Now') }}</button>
												</div>
											</div>

										</form>
										<!-- End Sign in Form -->
									</div>

								</div>
							</div>
							</div>

						</div>
						</div>

						<div class="crancy-wc__banner crancy-bg-cover">
							<div class="crancy-wc__banner--img">
								<img src="{{ asset($general_setting->admin_login) }}" alt="#">
							</div>
							<div class="crancy-wc__slider">
								<!-- Sinlge Slider -->
								<div class="single-slider">
									<div class="crancy-wc__slider--single">
										<div class="crancy-wc__slider--content">
											<h4 class="crancy-wc__slider--title">{{ __('translate.Welcome to WorkZone') }}</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Welcome Banner -->
				</div>
			</section>

		</div>

		<!--  Scripts -->
		<script src="{{ asset('global/js/jquery-3.7.1.min.js') }}"></script>
		<script src="{{ asset('backend/js/jquery-migrate.js') }}"></script>
		<script src="{{ asset('backend/js/popper.min.js') }}"></script>
		<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('backend/js/nice-select.min.js') }}"></script>
		<script src="{{ asset('backend/js/main.js') }}"></script>
        <script src="{{ asset('global/toastr/toastr.min.js') }}"></script>

        <script>
            @if(Session::has('message'))
            var type="{{Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
            @endif
        </script>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <script>
                    toastr.error('{{ $error }}');
                </script>
            @endforeach
        @endif

	</body>
</html>
