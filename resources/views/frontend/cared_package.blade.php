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
                <img class="icons w-165 d-block" src="{{ asset('frontend/assets/img/icons/logo-home-care.svg') }}" alt="CareD Home Care">
                <img class="icons h-102 d-block" src="{{ asset('frontend/assets/img/icons/icon-home-care.svg')}}" alt="CareD Home Care">
                <h1 class="fs-54 pt-3">
                    <span class="text-gold">Care•D Package</span>
                </h1>
            </div>
            <div class="row">
                @foreach ($packages as $item)
                <div class="col-md-4 pb-4">
                    <div class="card card-home-care">
                        <div class="card-body">
                            <a href="{{ route('frontend.package_detail_page', [$item->id,$item->slug_th]) }}">
                            <img class="icons w-100 h-100" src="{{ asset($item->image_path) }}" alt="CareD Home Care">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div><!--container-->
    </div><!--section-->

@endsection
