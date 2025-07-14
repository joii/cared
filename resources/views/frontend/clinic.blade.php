@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')

@section('content')

    <div class="section section-banner">
        @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
        @endforeach
    </div>

    <div class="section">
        <div class="container">
            <div class="hgroup text-center" data-aos="fade-in">
                <h3><span class="fw-600 highlight">CARE•D</span> Clinic</h3>
                <h2 class="py-1">One Day Surgery</h2>
                <p class="fs-25 fw-500">ศูนย์ผ่าตัดเล็ก โดยไม่ต้องพักฟื้น ดูแลโดยแพทย์เฉพาะทาง</p>
            </div>

            <h3 class="d-flex py-xl-4">
                <span class="highlight mx-auto" data-aos>ผ่าตัดเล็ก ปลอดภัย กลับบ้านได้ในวันเดียว</span>
            </h3>

            <div class="p-xl-5 p-4"></div>

            <div class="boxed" style="--width:650px" data-aos="fade-in">
                <h3 class="title-main highlight text-center mb-sm-4 mb-2" data-aos>ดูแลเคสเฉพาะทาง</h3>

                <ul class="nav check-list normal">
                    <li>ผ่าตัดเส้นเลือดเพื่อฟอกไต (AV Fistula / Graft)</li>
                    <li>รักษาแผลกดทับขนาดใหญ่ / ซับซ้อน</li>
                    <li>แผลติดเชื้อจากเบาหวาน (Diabetic Wound)</li>
                    <li>แผลเรื้อรังจากเส้นเลือดอุดตัน หรือการไหลเวียนเลือดผิดปกติ</li>
                    <li>ทำหัตถการแผล-เนื้อเยื่อเฉพาะทางอื่น ๆ ตามดุลยพินิจแพทย์</li>
                </ul>
            </div>

            <div class="p-xl-5 p-4"></div>

            <div class="article text-center boxed" style="--width:850px" data-aos="fade-in">
                <h3 class="title-main highlight text-center mb-2" data-aos>โดยทีมแพทย์ผู้เชี่ยวชาญเฉพาะทาง</h3>

                <p>ดำเนินการโดยศัลยแพทย์หลอดเลือด (Vascular Surgeon) และทีมพยาบาลวิชาชีพ
                    มีประสบการณ์ตรง พร้อมอุปกรณ์ครบครัน</p>
            </div>

            <div class="p-4"><span class="m-xl-2"></span></div>

            <div class="article-boxed boxed w-690" style="--width:690px" data-aos="fade-in">
                <div class="article-header"></div>
                <div class="article-body article">
                    <div class="hgroup">
                        <h2 class="text-center text-gold">จุดเด่นของเรา</h2>
                    </div>

                    <ol class="list-numbered list-brown">
                        <li>ไม่ต้องนอนโรงพยาบาล – ผ่าตัดเสร็จ กลับบ้านได้</li>
                        <li>ลดค่าใช้จ่าย แต่ยังได้มาตรฐานการรักษา</li>
                        <li>ให้คำปรึกษา ติดตามผลหลังการผ่าตัดอย่างใกล้ชิด</li>
                        <li>สะดวก ปลอดภัย ในบรรยากาศคลินิกเฉพาะทาง</li>
                    </ol>

                    <div class="p-sm-5 p-4"></div>
                </div>
            </div>
        </div><!--container-->
    </div><!--section-->

       <div class="section">
         <div id="s_review" class="section-target"></div>
        <div class="container">
            <div class="hgroup text-center">
                <h2 data-aos="fade-up">รีวิวจากลูกค้าของเรา</h2>
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


@endsection
