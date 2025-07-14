@extends('frontend.master')
@section('title', $branch->meta_title)
@section('meta_description', $branch->meta_description)

@section('content')
 <div class="section section-banner">
    @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($branch->image_path) }});"></div>
     @endforeach
</div>

<div class="section section-branch-detail">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Care•D Nursing Home</a></li>
            <li class="breadcrumb-item"><a href="/branches">สาขา</a></li>
            <li class="breadcrumb-item active">{{ $branch->subtitle_th }} {{ $branch->address_th }}</li>
        </ol>

        <div class="branch-details">
            <div class="hgroup">
                <img class="logo" src="{{ asset($branch->logo_path) }}" alt="{{ $branch->name_th }}" title="{{ $branch->name_th }}">
                <h2>{{ $branch->name_th }}</h2>
                <h3>บริหารโดย <span class="fw-600">CARE•D</span> {{ $branch->address_th }}</h3>
            </div>

            <div class="row gallery-row pt-xl-4">
                <div class="col-xl-6">
                     <div class="gallery-boxed">
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    @foreach ($galleries as $item)
                                    <div class="swiper-slide">
                                        <a class="photo" data-fancybox="g" href="{{ asset($item->image_path) }}" style="background-image: url({{ asset($item->image_path)}});">
                                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x67.png')}}" alt="{{ $branch->name_th }}">
                                        </a>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    @foreach ($galleries as $item)
                                    <div class="swiper-slide">
                                        <div class="photo" style="background-image: url({{ asset($item->image_path) }});">
                                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x67.png') }}" alt="{{ $item->title_th }}">
                                        </div>
                                    </div>
                                     @endforeach
                                </div>
                            </div>
                        </div><!--gallery-boxed-->

                </div><!--col-xl-6-->

                <div class="col-xl-6">
                    <div class="branch-infos">
                        <h4>ประเภทห้องพัก</h4>
                        <div class="row g-0">
                            <div class="col-sm-5">
                                <ol class="list-numbered list-brown list-small">
                                    <li>ห้องรวมขนาด 6 เตียง</li>
                                    <li>ห้องคู่ 2 เตียง</li>
                                </ol>
                            </div>
                            <div class="col-sm-7">
                                <ol class="list-numbered list-brown list-small" start="3">
                                    <li>ห้องเดี่ยว</li>
                                </ol>
                            </div>
                        </div>

                        <h4 class="mt-4">สิ่งอำนวยความสะดวก</h4>
                        <div class="row g-0">
                            <div class="col-sm-5">
                                <ul class="list-icons facilities">
                                    <li>
                                        <span class="icon-circle">
                                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-tv.svg') }}" alt="{{ $branch->name_th }}">
                                        </span>
                                        โทรทัศน์
                                    </li>

                                    <li>
                                        <span class="icon-circle">
                                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-wifi.svg')}}" alt="{{ $branch->name_th }}">
                                        </span>
                                        อินเตอร์เน็ต
                                    </li>

                                    <li>
                                        <span class="icon-circle">
                                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-air-conditioner.svg')}}" alt="{{ $branch->name_th }}">
                                        </span>
                                        เครื่องปรับอากาศ
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-7">
                                <ul class="list-icons facilities">
                                    <li>
                                        <span class="icon-circle">
                                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-bed.svg')}}" alt="{{ $branch->name_th }}">
                                        </span>
                                        เตียงปรับระดับสำหรับผู้ป่วย
                                    </li>

                                    <li>
                                        <span class="icon-circle">
                                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-cctv.svg')}}" alt="{{ $branch->name_th }}">
                                        </span>
                                        กล้องวงจรปิด
                                    </li>

                                    <li>
                                        <span class="icon-circle">
                                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-water-heater.svg')}}" alt="{{ $branch->name_th }}">
                                        </span>
                                        เครื่องทำน้ำอุ่น
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mb-1 mt-4">สถานที่และโรงพยาบาลใกล้เคียง</h4>
                        <p>{!! $branch->nearby_th !!}</p>

                        <h4 class="pt-2">เริ่มต้น</h4>
                        <div class="price-block">
                            <h3 class="price">{!! number_format($branch->price_range) !!}</h3>
                            <p>บาท/เดือน</p>
                        </div>
                    </div><!--branch-infos-->
                </div>
            </div><!--row-->
        </div>


    </div><!--container-->
</div><!--section-->

<div class="section pt-md-4 pt-0">
    <div class="container">
        <div class="hgroup text-center">
            <h3 class="title-main textrow">
                <span data-aos="fade-up">ภาพบรรยากาศภายในที่พัก</span>
            </h3>
        </div>
    </div>

    <div class="swiper-overflow" data-aos="fade-in">
        <div class="swiper-container swiper-gallery branch">
            <div class="swiper-wrapper">
                @foreach ($vibe_galleries as $item)
                <div class="swiper-slide">
                    <a class="photo" data-fancybox href="{{ asset($item->image_path) }}" style="background-image: url({{ asset($item->image_path)}});">
                        <img src="{{ asset('frontend/assets/img/thumb/frame-100x67.png')}}" alt="{{ $item->title_th }}">
                    </a>
                </div>
                @endforeach


            </div>
        </div><!--swiper-container-->

        <div class="swiper-button swiper-button-prev w-46"><span class="icons"></span></div>
        <div class="swiper-button swiper-button-next w-46"><span class="icons"></span></div>
    </div><!--swiper-overflow-->
</div><!--section-->

<div class="section pt-md-4 pt-0">
<div class="container">
    <div class="hgroup text-center">
        <h3 class="title-main textrow">
            <span data-aos="fade-up">อัตราค่าบริการ</span>
        </h3>
    </div>

    <div class="table-responsive">
        <table class="table table-package table-program text-center">
            <thead>
                <tr>
                    <th>Program</th>
                    <th>ระยะเวลา</th>
                    <th>ห้องรวม</th>
                    <th>ห้องคู่</th>
                    <th>ห้องเดี่ยว</th>
                    @if ($has_detached_house==true)
                    <th style="font-size: smaller;">บ้านเดี่ยว<br/>/ห้องเดี่ยว VIP</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr class="tr-line">
                    <td colspan="{{ $has_detached_house==false?'5':'6' }}"></td>
                </tr>
                <tr>
                    <td rowspan="{{ $has_detached_house==false?'4':'5' }}" class="text-center border-0" style="background-color: #CFDAD1;">
                        <h4>Standard</h4>
                    </td>
                    <td class="text-black">รายวัน</td>
                    @foreach ($rate_card_standard as $item)
                       @if($item->period_id==1)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="")<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach


                </tr>

                <tr>
                    <td class="text-black">รายสัปดาห์ <br class="d-blok d-sm-none">(7 วัน)</td>
                    @foreach ($rate_card_standard as $item)
                       @if($item->period_id==2)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true )<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>

                <tr>
                    <td class="text-black">รายครึ่งเดือน <br class="d-blok d-sm-none">(15 วัน)</td>
                   @foreach ($rate_card_standard as $item)
                       @if($item->period_id==3)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>

                <tr class="border-0">
                    <td class="text-black">รายเดือน <br class="d-blok d-sm-none">(30 วัน)</td>
                    @foreach ($rate_card_standard as $item)
                       @if($item->period_id==4)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                         @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>

                <tr class="tr-line">
                    <td colspan="5"></td>
                </tr>
                 @if(array_sum($rehab_period)>0)
                 <tr>
                   <td rowspan="{{ array_sum($rehab_period) }}" class="text-center border-0" style="background-color: #E7E0D7;">
                        <h4>Rehab</h4>
                        <p class="m-0 fs-18">*โปรแกรมฟื้นฟู<br>โรคหลอดเลือดสมอง</p>
                    </td>
                   @if ($head_table_rehab==1 )
                        <td class="text-black">รายวัน</td>
                         @foreach ($rate_card_rehab as $item)
                            @if($item->period_id==1)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @elseif ($head_table_rehab==2)
                        <td class="text-black">รายสัปดาห์ <br class="d-blok d-sm-none">(7 วัน)</td>
                         @foreach ($rate_card_rehab as $item)
                            @if($item->period_id==2)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @elseif ($head_table_rehab==3)
                        <td class="text-black">รายครึ่งเดือน <br class="d-blok d-sm-none">(15 วัน)</td>
                         @foreach ($rate_card_rehab as $item)
                            @if($item->period_id==3)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                     @elseif ($head_table_rehab==4)
                        <td class="text-black">รายเดือน <br class="d-blok d-sm-none">(30 วัน)</td>
                         @foreach ($rate_card_rehab as $item)
                            @if($item->period_id==4)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @endif



                </tr>
                @if($rehab_period[1] > 0 && $head_table_rehab!=2)
                <tr>
                    <td class="text-black">รายสัปดาห์ <br class="d-blok d-sm-none">(7 วัน)</td>
                    @foreach ($rate_card_rehab as $item)
                       @if($item->period_id==2)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                         @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true )<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                 @endif
               @if($rehab_period[2] > 0 && $head_table_rehab!=3)
                <tr>
                    <td class="text-black">รายครึ่งเดือน <br class="d-blok d-sm-none">(15 วัน)</td>
                   @foreach ($rate_card_rehab as $item)
                       @if($item->period_id==3)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                @endif
                @if($rehab_period[3] > 0 && $head_table_rehab!=4)
                <tr class="border-0">
                    <td class="text-black">รายเดือน <br class="d-blok d-sm-none">(30 วัน)</td>
                    @foreach ($rate_card_rehab as $item)
                       @if($item->period_id==4)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                @endif

                <tr class="tr-line">
                    <td colspan="5"></td>
                </tr>
                @endif
                 @if(array_sum($happylike_period)>0)
                  <tr>
                   <td rowspan="{{ array_sum($happylike_period) }}" class="text-center border-0" style="background-color: #CFDAD1;">
                        <h4>Happy Like</h4>

                    </td>
                   @if ($head_table_happylike==1 )
                        <td class="text-black">รายวัน</td>
                         @foreach ($rate_card_happylike as $item)
                            @if($item->period_id==1)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @elseif ($head_table_happylike==2)
                        <td class="text-black">รายสัปดาห์ <br class="d-blok d-sm-none">(7 วัน)</td>
                         @foreach ($rate_card_happylike as $item)
                            @if($item->period_id==2)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @elseif ($head_table_happylike==3)
                        <td class="text-black">รายครึ่งเดือน <br class="d-blok d-sm-none">(15 วัน)</td>
                         @foreach ($rate_card_happylike as $item)
                            @if($item->period_id==3)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                     @elseif ($head_table_happylike==4)
                        <td class="text-black">รายเดือน <br class="d-blok d-sm-none">(30 วัน)</td>
                         @foreach ($rate_card_happylike as $item)
                            @if($item->period_id==4)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @endif



                </tr>
                 @if($happylike_period[1] > 0 && $head_table_happylike!=2)
                <tr>
                    <td class="text-black">รายสัปดาห์ <br class="d-blok d-sm-none">(7 วัน)</td>
                    @foreach ($rate_card_happylike as $item)
                       @if($item->period_id==2)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true )<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                 @endif
                @if($happylike_period[2] > 0 && $head_table_happylike!=3)
                <tr>
                    <td class="text-black">รายครึ่งเดือน <br class="d-blok d-sm-none">(15 วัน)</td>
                   @foreach ($rate_card_happylike as $item)
                       @if($item->period_id==3)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                @endif

                @if($happylike_period[3] > 0 && $head_table_happylike!=4)
                <tr class="border-0">
                    <td class="text-black">รายเดือน <br class="d-blok d-sm-none">(30 วัน)</td>
                    @foreach ($rate_card_happylike as $item)
                       @if($item->period_id==4)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                @endif

                <tr class="tr-line">
                    <td colspan="5"></td>
                </tr>
                @endif


                  @if(array_sum($rehab2_period)>0)
                  <tr>
                   <td rowspan="{{ array_sum($rehab2_period) }}" class="text-center border-0" style="background-color: #CFDAD1;">
                        <h4>Rehab2</h4>

                    </td>
                   @if ($head_table_rehab2==1 )
                        <td class="text-black">รายวัน</td>
                         @foreach ($rate_card_rehab2 as $item)
                            @if($item->period_id==1)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @elseif ($head_table_rehab2==2)
                        <td class="text-black">รายสัปดาห์ <br class="d-blok d-sm-none">(7 วัน)</td>
                         @foreach ($rate_card_rehab2 as $item)
                            @if($item->period_id==2)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @elseif ($head_table_rehab2==3)
                        <td class="text-black">รายครึ่งเดือน <br class="d-blok d-sm-none">(15 วัน)</td>
                         @foreach ($rate_card_rehab2 as $item)
                            @if($item->period_id==3)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                     @elseif ($head_table_rehab2==4)
                        <td class="text-black">รายเดือน <br class="d-blok d-sm-none">(30 วัน)</td>
                         @foreach ($rate_card_rehab2 as $item)
                            @if($item->period_id==4)
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                                @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                                @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                            @endif
                        @endforeach
                    @endif



                </tr>
                 @if($rehab2_period[1] > 0 && $head_table_rehab2!=2)
                <tr>
                    <td class="text-black">รายสัปดาห์ <br class="d-blok d-sm-none">(7 วัน)</td>
                    @foreach ($rate_card_rehab2 as $item)
                       @if($item->period_id==2)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                         @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true )<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                 @endif
                @if($rehab2_period[2] > 0 && $head_table_rehab2!=3)
                <tr>
                    <td class="text-black">รายครึ่งเดือน <br class="d-blok d-sm-none">(15 วัน)</td>
                   @foreach ($rate_card_rehab2 as $item)
                       @if($item->period_id==3)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" || $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                @endif

                @if($rehab2_period[3] > 0 && $head_table_rehab2!=4)
                <tr class="border-0">
                    <td class="text-black">รายเดือน <br class="d-blok d-sm-none">(30 วัน)</td>
                    @foreach ($rate_card_rehab2 as $item)
                       @if($item->period_id==4)
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->dormitory_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ $item->double_room_price==0?'-':number_format($item->double_room_price) }}</td>@endif
                          @if($item->dormitory_room_price!="")<td>{{ number_format($item->single_room_price) }}</td>@endif
                          @if($item->detached_house_price!="" | $has_detached_house==true)<td>{{ number_format($item->detached_house_price) }}</td>@endif
                        @endif
                    @endforeach
                </tr>
                @endif

                <tr class="tr-line">
                    <td colspan="5"></td>
                </tr>
                @endif

            </tbody>
        </table>
    </div><!--table-responsive-->
</div><!--container-->
</div><!--section-->

<div class="section pt-md-4 pt-0" data-aos="fade-in">
    <div class="container">
        <div class="hgroup text-center">
            <h3 class="title-main textrow">
                <span data-aos="fade-up">รายการบริการในโปรแกรม</span>
            </h3>
            <h5 class="text-gold fs-20">*เงื่อนไขอาจแตกต่างกันไปตามประเภทของโปรแกรมที่เข้ารับบริการ</h5>
        </div><!--hgroup-->

         {!! $branch->detail_th !!}
    </div><!--container-->
</div><!--section-->


<div class="section" data-aos="fade-in">
    <div class="container">
        <div class="hgroup text-center">
            <h2>สถานที่ตั้งและข้อมูลติดต่อ</h2>
            <h3 class="mt-2 fw-600"> {!! $branch->address_th !!}</h3>
            <h5 class="fs-25"> {!! $branch->nearby_th !!}</h5>
        </div><!--hgroup-->

        <div class="followus">
            @if ($branch->line_url !='')
                 <a href="{{ $branch->line_url }}" target="_blank">
                <span class="icons icon-line"></span>
                <p>Line</p>
            </a>
            @endif

            @if ($branch->facebook_url !='')
            <a href="{{ $branch->facebook_url }}" target="_blank">
                <span class="icons icon-facebook"></span>
                <p>Facebook</p>
            </a>
            @endif

             @if ($branch->pnone_no !='')
            <a href="tel:{{ $branch->pnone_no }}" target="_blank">
                <span class="icons icon-phone"></span>
                <p>Call Us</p>
            </a>
            @endif
            @if ($branch->gmap_url !='')
            <a href="{{ $branch->gmap_url }}" target="_blank">
                <span class="icons icon-map"></span>
                <p>Google Map</p>
            </a>
            @endif
        </div>

        <div class="buttons button-contact">
            <a class="btn btn-xl btn-gold" href="#" target="_blank">Download PDF</a>
            <a class="btn btn-xl btn-green" href="tel:{{ $branch->call_center_no==''?'0655022166':$branch->call_center_no }}" target="_blank">สายด่วน Care Advisor {{ $branch->call_center_no==''?'065-502-2166':$branch->call_center_no }}</a>
        </div>
    </div><!--container-->
</div><!--section-->

@endsection
