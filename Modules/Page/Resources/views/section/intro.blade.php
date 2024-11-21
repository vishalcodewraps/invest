@extends('admin.master_layout')
@section('title')
    <title>{{ __('translate.Intro Section') }}</title>
@endsection

@section('body-header')
    <h3 class="crancy-header__title m-0">Manage Banner</h3>
    <p class="crancy-header__text">{{ __('translate.Manage Section') }} >> Manage Banner</p>
@endsection

@section('body-content')

    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">
                    <div class="crancy-body">
                        <!-- Dashboard Inner -->
                        <div class="crancy-dsinner">
                            <form action="{{  route('admin.add-intro-section') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ isset(Request()->id) ?  $banner->id : '' }}">

                                <div class="row">
                                    <div class="col-12 mg-top-30">
                                        <!-- Product Card -->
                                        <div class="crancy-product-card">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="crancy__item-form--group w-100 h-100">
                                                                <label class="crancy__item-label">{{ __('translate.Image') }} </label>
                                                                <div class="crancy-product-card__upload crancy-product-card__upload--border">
                                                                    <input type="file" class="btn-check" name="intro_banner_one" id="input-img1" autocomplete="off" onchange="previewImage(event)">
                                                                    <label class="crancy-image-video-upload__label" for="input-img1">
                                                                        @if(isset(Request()->id))
                                                                        <img id="view_img" src="{{ isset(Request()->id) ? asset($banner->image) : '' }}" class="intro_imagee">
                                                                        @else
                                                                        <img id="view_img" class="intro_imagee">
                                                                        @endif
                                                                        <h4 class="crancy-image-video-upload__title">{{ __('translate.Click here to') }} <span class="crancy-primary-color">{{ __('translate.Choose File') }}</span> {{ __('translate.and upload') }} </h4>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="crancy__item-form--group mg-top-form-20">
                                                        <label class="crancy__item-label">Text * </label>
                                                        <input class="crancy__item-input" type="text" name="intro_title" id="intro_title" value="{{ isset(Request()->id) ?  $banner->text : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="crancy-btn mg-top-25" type="submit">{{isset(Request()->id) ? 'Update' : 'Add'}} Banner</button>
                                        </div>
                                        <!-- End Product Card -->
                                        <div id="crancy-table__main_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                            <table class="crancy-table__main crancy-table__main-v3 dataTable no-footer" id="dataTable">
                                                <!-- crancy Table Head -->
                                                <thead class="crancy-table__head">
                                                    <tr>
                                                        <th class="crancy-table__column-2 crancy-table__h2 sorting" >
                                                            {{ __('translate.Serial') }}
                                                        </th>
        
                                                        <th class="crancy-table__column-2 crancy-table__h2 sorting" >
                                                            Text
                                                        </th>
        
        
        
                                                        <th class="crancy-table__column-2 crancy-table__h2 sorting" >
                                                            Image
                                                        </th>
        
                                                        <th class="crancy-table__column-3 crancy-table__h3 sorting">
                                                            {{ __('translate.Action') }}
                                                        </th>
        
                                                    </tr>
                                                </thead>
                                                <!-- crancy Table Body -->
                                                <tbody class="crancy-table__body">
                                                 @foreach ($banner_list as $key => $res)
                                                     <tr>
                                                        <td>{{++$key}}</td>
                                                        <td>{{$res->text}}</td>
                                                        <td> <img src="{{ asset($res->image) }}" style="height: 100px"></td>
                                                        <td>
                                                            <a href="{{ url('admin/intro-section?id='.$res->id) }}" class="crancy-btn"><i class="fas fa-edit"></i> {{ __('translate.Edit') }}</a>

                                                        <a href="{{ url('admin/delete-intro-section?id='.$res->id) }}" class="crancy-btn delete_danger_btn"><i class="fas fa-trash"></i> {{ __('translate.Delete') }}</a>
                                                        </td>
                                                     </tr>
                                                 @endforeach
        
                                                </tbody>
                                                <!-- End crancy Table Body -->
                                            </table>
                                        </div>
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

@push('js_section')
    <script>
        "use strict"

        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('view_img');
                output.src = reader.result;
            }

            reader.readAsDataURL(event.target.files[0]);
        };

        function previewImage2(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('view_img2');
                output.src = reader.result;
            }

            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endpush
