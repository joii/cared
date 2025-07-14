@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')
@section('content')
 <div class="section section-banner main">
        <div class="swiper-container swiper-banner">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <img class="w-100" src="{{ asset($banner->image_path) }}" alt="">
                    <div class="captions {{ $banner->theme }}">
                        <div class="textgroup">
                            <h3>{!! $banner->title1_en!!}</h3>
                            <p>{!! $banner->title2_en!!}</p>
                        </div>

                        <h2>{!! $banner->title3_en!!}<br>
                            {!! $banner->title4_en!!}</h2>
                    </div>
                </div>
                @endforeach


            </div>
        </div><!--swiper-container-->

        {{-- <div class="swiper-pagination banner main"></div> --}}
    </div>

    <div class="section section-intro p-0" data-aos="fade-up" style="z-index: 10;">
        <div class="container">
            <div class="article-boxed boxed experience" style="--width:1040px">
                <div class="article-header"></div>
                <div class="article-body">
                    <div class="article intro">
                        <div class="logo">
                            <img class="w-100" src="{{ asset('frontend/assets/img/logo-3.svg')}}" alt="">
                        </div>

                        <!-- Homepage Content Section About-->
                        {!! $home_contents[0]->detail_th !!}

                        <div class="buttons pb-2 my-3">
                            <a href="{{ route('frontend.about_us') }}" class="btn btn-secondary">
                                <span class="px-4">{!! $home_contents[0]->name_th !!}</span>
                            </a>
                        </div>
                    </div><!--article-->

                    <img class="img-expert" src="{{ asset('frontend/assets/img/thumb/photo-1200x534.png')}}" alt="">
                </div>
            </div>
        </div><!--container-->
    </div><!--section-->

    <div class="section">
        <div class="container">
            <div class="card-whyus" data-aos="fade-up">
                <div class="col-left">
                    <div class="card-photo">
                        <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x1020.jpg')}});"></div>
                    </div>
                    <div class="card-info">
                        <h3>Care at heart</h3>
                        <p>ส่งต่อความสุขจากผู้ดูแล สู่ผู้รับการดูแล สัมผัสได้จากความใส่ใจที่แท้จริง</p>

                        <img class="icons" src="{{ asset('frontend/assets/img/thumb/heart-outline.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-right">
                    <div class="card-body">
                        {!! $home_contents[1]->detail_th !!}
                    </div>
                </div>
            </div><!--card-whyus-->
        </div><!--container-->
    </div><!--section-->

    <div class="section bg-white">
        <div class="container">
            <div class="hgroup px-2 text-center" data-aos="fade-in">
                 {!! $home_contents[2]->detail_th !!}
            </div>

            <div class="row gx-4 gy-5 pt-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="card-service" data-aos="fade-in">
                        <a href="{{ route('frontend.nursing_home_page') }}" class="card-link"></a>
                        <div class="card-photo">
                            <img src="{{ asset('frontend/assets/img/thumb/photo-340x425--1.png')}}" alt="">
                        </div>
                        <div class="card-body">
                            <h3>ศูนย์ดูแลผู้สูงอายุ<br>
                                ระยะสั้นและระยะยาว</h3>
                            <p>พร้อมทีมแพทย์พยาบาล<br>
                                และนักกายภาพบำบัดดูแล<br>
                                ตลอด 24 ชม.</p>

                            <div class="buttons">

                                <span class="btn">
                                    อ่านต่อ
                                    <span class="icons icon-next"></span>
                                </span>

                            </div>
                        </div>
                    </div><!--card-service-->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-service" data-aos="fade-in">
                        <a href="{{ route('frontend.stroke_center_page') }}" class="card-link"></a>
                        <div class="card-photo">
                            <img src="{{ asset('frontend/assets/img/thumb/photo-340x425--2.png')}}" alt="">
                        </div>
                        <div class="card-body">
                            <h3>ดูแลฟื้นฟูผู้ป่วย<br>
                                โรคหลอดเลือดสมอง</h3>
                            <p>ด้วยโปรแกรมฟื้นฟูเฉพาะบุคคล<br>
                                เน้นการฟื้นคืนคุณภาพชีวิต<br>
                                อย่างมีประสิทธิภาพ</p>

                            <div class="buttons">
                                <span class="btn">
                                    อ่านต่อ
                                    <span class="icons icon-next"></span>
                                </span>
                            </div>
                        </div>
                    </div><!--card-service-->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-service" data-aos="fade-in">
                        <a href="{{ route('frontend.home_care_page') }}" class="card-link"></a>
                        <div class="card-photo">
                            <img src="{{ asset('frontend/assets/img/thumb/photo-340x425--3.png')}}" alt="">
                        </div>
                        <div class="card-body">
                            <h3>บริการจัดส่งผู้ดูแล<br>
                                ไปดูแลที่บ้าน</h3>
                            <p>บริการส่ง Caregiver และทีมดูแลมืออาชีพ
                                ถึงบ้าน สำหรับผู้สูงอายุที่ต้องการการดูแลใน
                                สิ่งแวดล้อมที่คุ้นเคย</p>

                            <div class="buttons">
                                <span class="btn">
                                    อ่านต่อ
                                    <span class="icons icon-next"></span>
                                </span>
                            </div>
                        </div>
                    </div><!--card-service-->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-service" data-aos="fade-in">
                        <a href="{{ route('frontend.cared_shop_page') }}" class="card-link"></a>
                        <div class="card-photo">
                            <img src="{{ asset('frontend/assets/img/thumb/photo-340x425--4.png')}}" alt="">
                        </div>
                        <div class="card-body">
                            <h3>ร้านจำหน่ายผลิตภัณฑ์<br>
                                และเครื่องมือแพทย์</h3>
                            <p>ร้านจำหน่ายอุปกรณ์และเครื่องมือแพทย์
                                สำหรับผู้สูงอายุแบบครบครัน
                                พร้อมคำแนะนำจากผู้เชี่ยวชาญ</p>

                            <div class="buttons">
                                <span class="btn">
                                    อ่านต่อ
                                    <span class="icons icon-next"></span>
                                </span>
                            </div>
                        </div>
                    </div><!--card-service-->
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--section-->

    <div class="section bg-green" data-aos="fade-in">
        <div class="container py-3">
            <div class="article fs-25 text-center">
                <div class="hgroup mb-3">
                    <h3><span class="highlight fw-600">CARE•D</span> Clinic</h3>
                    <h2>One Day Surgery</h2>
                </div>

                 {!! $home_contents[3]->detail_th !!}

                <div class="buttons">
                    <a href="{{ route('frontend.clinic_page') }}" class="btn btn-42 btn-secondary">
                        <span class="fw-600">  {!! $home_contents[3]->name_th !!}</span>
                    </a>
                </div>
            </div>
        </div><!--container-->
    </div>

    <div class="section section-price-packages">
        <div class="background d-none d-md-block" style="background-image: url({{ asset('frontend/assets/img/thumb/price-packages-bg.png')}});"></div>
        <img class="bg d-block d-md-none" src="{{ asset('frontend/assets/img/thumb/price-packages-bg-2.png')}}" alt="">
        <div class="container">
            <div class="article" data-aos="fade-left">
                <h2>
                    CARE•D Price and Packages<br>
                    ค่าบริการและแพ็กเกจ
                </h2>

                {!! $home_contents[4]->detail_th !!}

                <div class="buttons">
                    <a class="btn btn-dark next me-auto" href="{{ route('frontend.package_page') }}">
                       {!! $home_contents[4]->name_th !!}
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-branch" data-aos="fade-in">
        <div class="background" style="background-image: url({{ asset('frontend/assets/img/thumb/bg.jpg')}});"></div>
        <div class="container">
            <div class="article text-center boxed">
                 {!! $home_contents[5]->detail_th !!}

                  <div class="buttons">
                    <a class="btn btn-dark" href="{{ route('frontend.branch_page') }}">
                       {!! $home_contents[5]->name_th !!}
                    </a>
                </div>
            </div>
        </div><!--container-->
    </div><!--section-->

   <div class="section section-award">
        <div class="container">
            <div class="hgroup d-block d-sm-none text-center">
                <h2 data-aos="fade-up"> {!! $home_contents[5]->name_th !!}</h2>
            </div>
            <div class="boxed-award boxed" data-aos="fade-in">
                <div class="card-header">
                    <img class="w-100" src="{{ asset('frontend/assets/img/thumb/photo-1200x510.jpg')}}" alt="">
                    <h2 class="card-title textrow d-none d-sm-block">
                        <span data-aos="fade-up" data-aos-delay="100">{!! $home_contents[6]->name_th !!}</span>
                    </h2>
                </div>

                <div class="card-body">
                    <div class="row gy-4">
                        @foreach ($awards as $award)
                        <div class="col-lg-6">
                            <div class="card-award">
                                <div class="card-photo">
                                     <img src="{{ asset($award->image_path)}}" alt="{!! $award->name_th !!}">
                                </div>
                                <div class="card-body">
                                    <h3>{!! $award->name_th !!}</h3>
                                    <p>{!! $award->description_th =='-'?'':$award->description_th !!} </p>
                                    <p><small>{!! $award->field_th !!}</small></p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div><!--row-->
                </div><!--card-body-->
            </div><!--boxed-award-->

        </div><!--container-->
    </div>

    <div class="section">
        <div class="container">
            <div class="hgroup text-center">
                <h2 data-aos="fade-up">{!! $home_contents[7]->name_th !!}</h2>
            </div>

            <div class="swiper-overflow" data-aos="fade-in">
                <div class="swiper-container swiper-review">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $item)
                        <div class="swiper-slide">
                            <div class="card-review">
                                <div class="card-header">
                                    <img class="avatar" src="{{ asset($item->image_path)}}" alt="{{ $item->name_th }}">
                                    <div>
                                        <h3>{{ $item->name_th }}</h3>
                                        <p>สาขาที่ได้รับบริการ: {{ $item->branch_th }}</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-limit">
                                   {!! $item->description_th !!}
                                    </div>
                                    @if(strlen($item->description_th) > 2500)
                                    <p class="text-end">
                                        <span class="seemore">
                                            อ่านเพิ่มเติม
                                        </span>
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                         @endforeach


                    </div>

                </div><!--swiper-container-->
                <div class="swiper-pagination"></div>
            </div>

        </div><!--container-->
    </div><!--section-->

    <div class="section section-partner" data-aos="fade-in">
        <div class="container">
            <div class="article">
                {!! $home_contents[8]->detail_th !!}
            </div>

            <div class="buttons pt-0 mb-4">
                <a href="https://www.agyhero.com" target="_blank" class="btn btn-secondary">
                    {!! $home_contents[8]->name_th !!}
                </a>
            </div>
        </div>
    </div>

@endsection
