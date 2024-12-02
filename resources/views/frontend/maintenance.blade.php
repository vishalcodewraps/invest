@extends('frontend.layouts.main-layout')

@section('seo')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
    <meta name="keywords" content="{{ $seo_setting->seo_keyword }}">
@endsection

@section('content')
    <!-- section start -->
    

    <!-- section end -->
    @endsection