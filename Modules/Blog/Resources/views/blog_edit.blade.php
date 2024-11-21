@extends('admin.master_layout')
@section('title')
    <title>{{ __('translate.Edit Blog') }}</title>
@endsection

@section('body-header')
    <h3 class="crancy-header__title m-0">{{ __('translate.Edit Blog') }}</h3>
    <p class="crancy-header__text">{{ __('translate.Manage Blog') }} >> {{ __('translate.Edit Blog') }}</p>
@endsection

@section('body-content')


    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show" style="margin-top: 10px;">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">
                    <div class="crancy-body">
                        <!-- Dashboard Inner -->
                        <div class="crancy-dsinner">
                            <form action="{{ route('admin.blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="translate_id" value="{{ $blog_translate->id }}">
                                <input type="hidden" name="lang_code" value="{{ $blog_translate->lang_code }}">

                                <div class="row">
                                    <div class="col-12">
                                        <!-- Product Card -->
                                        <div class="crancy-product-card">
                                            <div class="create_new_btn_inline_box">
                                                <h4 class="crancy-product-card__title">{{ __('translate.Edit Blog') }}</h4>

                                                <a href="{{ route('admin.blog.index') }}" class="crancy-btn "><i class="fa fa-list"></i> {{ __('translate.Blog List') }}</a>
                                            </div>


                                            <div class="row">

                                                @if (admin_lang() == request()->get('lang_code'))
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="crancy__item-form--group w-100 h-100">
                                                                <label class="crancy__item-label">{{ __('translate.Image') }} </label>
                                                                <div class="crancy-product-card__upload crancy-product-card__upload--border">
                                                                    <input type="file" class="btn-check" name="image" id="input-img1" autocomplete="off" onchange="previewImage(event)">
                                                                    <label class="crancy-image-video-upload__label" for="input-img1">
                                                                        <img id="view_img" src="{{ asset($blog->image) }}">
                                                                        <h4 class="crancy-image-video-upload__title">{{ __('translate.Click here to') }} <span class="crancy-primary-color">{{ __('translate.Choose File') }}</span> {{ __('translate.and upload') }} </h4>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                @endif

                                                <div class="col-12">
                                                    <div class="crancy__item-form--group mg-top-form-20">
                                                        <label class="crancy__item-label">{{ __('translate.Title') }} * </label>
                                                        <input class="crancy__item-input" type="text" name="title" id="title" value="{{ $blog_translate->title }}">
                                                    </div>
                                                </div>

                                                @if (admin_lang() == request()->get('lang_code'))

                                                    <div class="col-12">
                                                        <div class="crancy__item-form--group mg-top-form-20">
                                                            <label class="crancy__item-label">{{ __('translate.Slug') }} * </label>
                                                            <input class="crancy__item-input" type="text" name="slug" id="slug" value="{{ $blog->slug }}">
                                                        </div>
                                                    </div>

                                                   

                                                @endif

                                                <div class="col-12">
                                                    <div class="crancy__item-form--group mg-top-form-20">
                                                        <label class="crancy__item-label">{{ __('translate.Description') }} * </label>

                                                        <textarea class="crancy__item-input crancy__item-textarea summernote"  name="description" id="description">{!! clean($blog_translate->description) !!}</textarea>

                                                    </div>
                                                </div>

                                                @if (admin_lang() == request()->get('lang_code'))


                                                    <div class="col-12">
                                                        <div class="crancy__item-form--group mg-top-form-20">
                                                            <label class="crancy__item-label">{{ __('translate.Visibility Status') }} </label>
                                                            <div class="crancy-ptabs__notify-switch  crancy-ptabs__notify-switch--two">
                                                                <label class="crancy__item-switch">
                                                                <input {{ $blog->status == 1 ? 'checked' : '' }} name="status" type="checkbox" >
                                                                <span class="crancy__item-switch--slide crancy__item-switch--round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="crancy__item-form--group mg-top-form-20">
                                                            <label class="crancy__item-label">{{ __('translate.Tags') }} </label>
                                                            <input class="crancy__item-input tags" type="text" name="tags" value="{{ $blog->tags }}">
                                                        </div>
                                                    </div>

                                                @endif

                                                <div class="col-12">
                                                    <div class="crancy__item-form--group mg-top-form-20">
                                                        <label class="crancy__item-label">{{ __('translate.SEO Title') }} </label>
                                                        <input class="crancy__item-input" type="text" name="seo_title" id="seo_title" value="{{ $blog_translate->seo_title }}">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="crancy__item-form--group mg-top-form-20">
                                                        <label class="crancy__item-label">{{ __('translate.SEO Description') }} </label>

                                                        <textarea class="crancy__item-input crancy__item-textarea seo_description_box"  name="seo_description" id="seo_description">{{ $blog_translate->seo_description }}</textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <button class="crancy-btn mg-top-25" type="submit">{{ __('translate.Update') }}</button>

                                        </div>
                                        <!-- End Product Card -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Dashboard Inner -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->
@endsection

@push('style_section')
    <link rel="stylesheet" href="{{ asset('global/tagify/tagify.css') }}">

    <style>
        .tox .tox-promotion,
        .tox-statusbar__branding{
            display: none !important;
        }
    </style>
@endpush

@push('js_section')

    <script src="{{ asset('global/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('global/tagify/tagify.js') }}"></script>

    <script>
        (function($) {
            "use strict"
            $(document).ready(function () {
                $("#title").on("keyup",function(e){
                    let inputValue = $(this).val();
                    let slug = inputValue.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
                    $("#slug").val(slug);
                })

                tinymce.init({
                    selector: '.summernote',
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    mergetags_list: [
                        { value: 'First.Name', title: 'First Name' },
                        { value: 'Email', title: 'Email' },
                    ]
                });

                $('.tags').tagify();

            });
        })(jQuery);

        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('view_img');
                output.src = reader.result;
            }

            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endpush
