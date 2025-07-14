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
                    <span class="text-gold">ขั้นตอน</span>การรับบริการ
                </h1>
            </div>

            <div class="boxed mt-md-5 mt-4 pt-md-2" style="--width:1040px">
                    <img class="w-100" src="{{ asset('frontend/assets/img/thumb/service_process.png')}}" alt="ขั้นตอนการรับบริการ Care-D Nursing Home">
            </div>
            <div class="buttons pt-5">
                <a href="{{ route('frontend.cared_shop_page') }}"  class="btn btn-secondary">
                    ดูแพคเกจทั้งหมด
                </a>
            </div>
        </div><!--container-->
    </div><!--section-->
    </div>

@endsection
