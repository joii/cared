@extends('frontend.master')
@section('title', $package->meta_title)
@section('meta_description', $package->meta_description)

@section('content')
    <div class="section section-banner">
        @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
        @endforeach
    </div>
    <div class="section bg-white">
        <div class="container">
            <div class="hgroup flex-column text-center">
                <img class="icons w-165 d-block" src="{{ asset('frontend/assets/img/icons/logo-home-care.svg') }}" alt="CareD Home Care">
                <img class="icons h-102 d-block" src="{{ asset('frontend/assets/img/icons/icon-home-care.svg')}}" alt="CareD Home Care">
                <h1 class="fs-54 pt-3">
                    <span class="text-gold">Package</span> <br class="d-block d-sm-none">{{ $package->name_th }}
                </h1>
            </div>

            <div class="boxed mt-md-5 mt-4 pt-md-2" style="--width:1040px">
                <a data-fancybox href="{{ asset($package->image_path)}}">
                    <img class="w-100" src="{{ asset($package->image_path)}}" alt="{{ $package->name_th }}">
                </a>
            </div>
            <div class="buttons pt-5">
                <a href="/Care•D_package"  class="btn btn-secondary">
                    ดูแพคเกจทั้งหมด
                </a>
            </div>
        </div><!--container-->
    </div><!--section-->

@endsection
