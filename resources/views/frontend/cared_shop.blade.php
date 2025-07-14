@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')


@section('content')
<div class="section section-banner">
        @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
        @endforeach
    </div>
    <div class="section bg-white">
        <div class="container">
            <div class="hgroup flex-column text-center">
                <img class="icons w-165 d-block" src="{{ asset('frontend/assets/img/icons/logo-home-shop.svg') }}" alt="CareD Home Care">
                <img class="icons h-102 d-block" src="{{ asset('frontend/assets/img/icons/icon-home-shop.svg')}}" alt="CareD Home Care">
                <h1 class="fs-54 pt-3">

                    ร้านจำหน่ายผลิตภัณฑ์และเครื่องมือแพทย์
                </h1>
            </div>
            <div class="row">


            </div>

        </div><!--container-->
    </div><!--section-->

@endsection
