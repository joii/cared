@extends('frontend.master')
@section('title', 'CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง')
@section('meta_description', 'ศูนย์ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมองด้วยโปรแกรมฟื้นฟูเฉพาะบุคคล เน้นการฟื้นคืนคุณภาพชีวิตอย่างมีประสิทธิภาพ')

@section('content')
<div class="section section-banner">
        @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
        @endforeach
    </div>
 <div class="section bg-white">
        <div class="container">
            <div class="hgroup flex-column text-center" data-aos="fade-in" >
                <img class="icons w-165 d-block" src="{{ asset('frontend/assets/img/icons/logo-home-care.svg') }}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                <img class="icons h-102 d-block" src="{{ asset('frontend/assets/img/icons/icon-stroke-center.svg')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                <h1 class="fs-54 pt-3">
                    ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง
                </h1>
                <h4>ด้วยโปรแกรมฟื้นฟูเฉพาะบุคคล เน้นการฟื้นคืนคุณภาพชีวิตอย่างมีประสิทธิภาพ</h4>
            </div>

            <div class="boxed mt-md-5 mt-4 pt-md-3" style="--width:1040px" data-aos="fade-in">
                <h3 class="title-main text-center mb-sm-4 mb-3">เหมาะสำหรับ</h3>

                <ol class="list-numbered list-brown fs-25">
                    <li>
                        ผู้ป่วยหลังโรคหลอดเลือดสมอง (Stroke)

                        <ul>
                            <li>ทั้งแบบหลอดเลือดสมองแตก ตีบ หรือ ตันที่เพิ่งออกจากโรงพยาบาล<br> และต้องการการฟื้นฟูอย่างต่อเนื่อง ทั้งด้านการเคลื่อนไหว การพูด และการใช้ชีวิตประจำวัน</li>
                        </ul>
                    </li>
                    <li>
                        ผู้ที่มีภาวะอัมพฤกษ์ อัมพาตบางส่วน
                        <ul>
                            <li>ต้องการกายภาพบำบัดเพื่อเพิ่มการเคลื่อนไหวและลดภาวะแทรกซ้อน</li>
                        </ul>
                    </li>
                    <li>
                        ผู้ป่วยที่มีปัญหาการพูด การกลืน หรือการสื่อสาร
                        <ul>
                            <li>หลังโรคหลอดเลือดสมอง และต้องการฝึกพูดหรือฟื้นฟูสมองด้านภาษา</li>
                        </ul>
                    </li>
                    <li>
                        ครอบครัวที่ต้องการผู้ช่วยดูแลมืออาชีพ
                        <ul>
                            <li>เพื่อให้คนที่คุณรักได้รับการดูแลอย่างถูกวิธี ปลอดภัย และมีทีมผู้เชี่ยวชาญดูแลตลอดการฟื้นฟู</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div><!--container-->
    </div><!--section-->

    <div class="section" style="background-color: #E7E0D7;" data-aos="fade-in">
        <div class="container">
            <div class="boxed pt-2" style="--width:1040px">
                <h3 class="title-main text-center mb-4">
                    บริการ <span class="fw-600">CARE•D</span> Stroke Center
                </h3>

                <ol class="list-numbered list-brown fs-25">
                    <li>
                        กายภาพบำบัดโดยนักกายภาพบำบัดวิชาชีพและทีมสหวิชาชีพ (Physical Rehabilitation)

                        <ul>
                            <li>กายภาพบำบัด</li>
                            <li>อุปกรณ์ช่วยเดิน / อุปกรณ์ฟื้นฟูการเคลื่อนไหว</li>
                        </ul>
                    </li>

                    <li>
                        การฟื้นฟูการพูดและการสื่อสาร (Speech Therapy)

                        <ul>
                            <li>ฝึกการพูดและกลืนสำหรับผู้ป่วยหลัง Stroke</li>
                            <li>การกระตุ้นสมองเพื่อฟื้นคืนการสื่อสาร</li>
                        </ul>
                    </li>

                    <li>
                        ผู้ดูแล 24 ชั่วโมง (24 Hours care giver)  

                        <ul>
                            <li>ทีมผู้ดูแลประจำ 24 ชั่วโมง</li>
                            <li>การประเมินและติดตามอาการต่อเนื่อง</li>
                        </ul>
                    </li>

                    <li>
                        ดูแลด้านจิตใจและพฤติกรรม (Psychosocial Support)

                        <ul>
                            <li>นักจิตวิทยา / นักกิจกรรมบำบัด</li>
                            <li>การดูแลภาวะซึมเศร้าหลังโรคหลอดเลือดสมอง</li>
                        </ul>
                    </li>

                    <li>
                        ที่พักและสิ่งอำนวยความสะดวก (Accommodation & Facilities)

                        <ul>
                            <li>อุปกรณ์ฟื้นฟูสมรรถภาพทันสมัย</li>
                            <li>ห้องพักและพื้นที่ฝึกฟื้นฟู</li>
                            <li>อาหารและโภชนาการ</li>
                            <li>ซักรีดเสื้อผ้า</li>
                            <li>แม่บ้านทำความสะอาด</li>
                        </ul>
                    </li>

                </ol>
            </div><!--boxed-->
        </div><!--container-->
    </div><!--section-->

    <div class="section mt-4">
        <div class="container">
            <div class="hgroup text-center" data-aos="fade-in">
                <h3 class="title-main textrow">
                    <span data-aos="fade-up">ภาพกิจกรรมพร้อมด้วยผู้เชี่ยวชาญ<br class="d-block d-sm-none">และอุปกรณ์มาตรฐาน</span>
                </h3>
            </div>
        </div>

        <div class="swiper-overflow" data-aos="fade-in">
            <div class="swiper-container swiper-gallery event">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-1.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-1.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-2.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-2.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-3.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-3.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-4.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-4.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-5.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-5.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-6.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-6.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-7.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-7.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-8.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-8.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a class="photo" data-fancybox href="{{ asset('frontend/assets/img/thumb/photo-gallery-9.jpg')}}" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-gallery-9.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x150.png')}}" alt="CARE•D : Stroke Center :  ดูแลฟื้นฟูผู้ป่วยโรคหลอดเลือดสมอง">
                        </a>
                    </div>
                </div>
            </div><!--swiper-container-->

            <div class="swiper-button swiper-button-prev w-46"><span class="icons"></span></div>
            <div class="swiper-button swiper-button-next w-46"><span class="icons"></span></div>
        </div><!--swiper-overflow-->
    </div><!--section-->

    <div class="section">
        <div class="container">
            <div class="hgroup text-center" data-aos="fade-in">
                <h3 class="title-main mb-2 textrow">
                    <span data-aos="fade-up">อัตราค่าบริการ</span>
                </h3>
                <h4> โปรแกรมฟื้นฟูเข้มข้น ด้วยกายภาพบำบัดวิชาชีพ วันละ 1 ครั้ง พร้อมที่พักและผู้ดูแล 24 ชั่วโมง</h4>
                <p class="text-gold fs-20">*** ราคาบริการแตกต่างตามแต่ละสาขา กรุณาติดต่อเจ้าหน้าที่ฝ่ายขาย</p>
            </div>

            <div class="table-responsive d-none d-md-block" data-aos="fade-in">
                <table class="table table-package text-center">
                    <thead>
                        <tr>
                            <th style="width: 30%;">ระยะเวลา</th>
                            <th style="width: 23%;">ราคาห้องรวม</th>
                            <th style="width: 23%;">ราคาห้องคู่</th>
                            <th style="width: 23%;">ราคาห้องเดี่ยว</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-line">
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td class="text-black">30 วัน</td>
                            <td>37,000-85,000</td>
                            <td>42,000-90,000</td>
                            <td>50,000-100,000</td>
                        </tr>

                        <tr>
                            <td class="text-black">15 วัน</td>
                            <td>28,000-47,000</td>
                            <td>30,000-52,500</td>
                            <td>35,000-58,000</td>
                        </tr>

                        <tr>
                            <td class="text-black">7 วัน</td>
                            <td>15,500-25,000</td>
                            <td>16,500-28,000</td>
                            <td>18,000-31,000</td>
                        </tr>

                        <tr class="border-bottom-0">
                            <td class="text-black">1 วัน</td>
                            <td>2500-5,000</td>
                            <td>3,500-5500</td>
                            <td>3500-6,000</td>
                        </tr>

                        <tr class="tr-title bg-green-light border-bottom-0">
                            <td colspan="4">บริการที่จะได้รับ</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ห้องพัก พร้อมเครื่องปรับอากาศ น้ำอุ่น และเฟอร์นิเจอร์ครบชุด</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">การบริการช่วยเหลือกิจวัตรประจำวัน และดูแล
                                    ทางการพยาบาล  ตลอด 24 ชั่วโมง (อัตรากำลัง 1:5)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">แพทย์ตรวจร่างกายแรกรับ  และตรวจเยี่ยม
                                    เดือนละ 1 ครั้ง / ให้คำปรึกษาด้วยระบบ Tele Consult</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">กิจกรรมระหว่างวัน (Day Activities)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">อาหาร 3 มื้อ และอาหารว่าง 2 มื้อ (ไม่รวมอาหารทางสายยาง) </small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-3">บริการทำความสะอาดห้องพัก และซักรีดเสื้อผ้า</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ของใช้ส่วนบุคคล  ได้แก่ เสื้อผ้า ชุดเครื่องนอน สบู่ 
                                    แชมพู  แปรงสีฟัน ยาสีฟัน  โลชั่น เป็นต้น</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">การรายงานอาการทางกลุ่มไลน์ครอบครัว วันละ 2 ครั้ง</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ระบบปรึกษากับ Care Advisor</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ตรวจประเมินความสามารถการดำเนินกิจวัตรประจำวัน <br>(ADL : Activities of Daily Living)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">เวชภัณฑ์ทางการแพทย์ ได้แก่ ถุงมือ
                                    หน้ากากอนามัย เป็นต้น</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">การบริการกายภาพบำบัด โดยนักกายภาพบำบัด
                                    ระดับวิชาชีพ (PT) วันละ 60 นาทีทุกวันจันทร์ - เสาร์ (ยกเว้นวันอาทิตย์ และนักขัตฤกษ์ตามประกาศบริษัท)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive d-block d-md-none" >

                <table class="table table-package mobile text-center mb-0">
                    <thead>
                        <tr>
                            <th>ระยะเวลา</th>
                            <th>ราคาห้องรวม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-black">30 วัน</td>
                            <td>37,000-85,000</td>
                        </tr>

                        <tr>
                            <td class="text-black">15 วัน</td>
                            <td>28,000-47,000</td>
                        </tr>

                        <tr>
                            <td class="text-black">7 วัน</td>
                            <td>15,500-25,000</td>
                        </tr>

                        <tr class="border-bottom-0">
                            <td class="text-black">1 วัน</td>
                            <td>2500-5,000</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-package mobile text-center mb-0">
                    <thead>
                        <tr>
                            <th>ระยะเวลา</th>
                            <th>ราคาห้องคู่</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-black">30 วัน</td>
                            <td>42,000-90,000</td>
                        </tr>

                        <tr>
                            <td class="text-black">15 วัน</td>
                            <td>30,000-52,500</td>
                        </tr>

                        <tr>
                            <td class="text-black">7 วัน</td>
                            <td>16,500-28,000</td>
                        </tr>

                        <tr class="border-bottom-0">
                            <td class="text-black">1 วัน</td>
                            <td>3,500-5500</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-package mobile text-center mb-0">
                    <thead>
                        <tr>
                            <th>ระยะเวลา</th>
                            <th>ราคาห้องเดี่ยว</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-black">30 วัน</td>
                            <td>50,000-100,000</td>
                        </tr>

                        <tr>
                            <td class="text-black">15 วัน</td>
                            <td>35,000-58,000</td>
                        </tr>

                        <tr>
                            <td class="text-black">7 วัน</td>
                            <td>18,000-31,000</td>
                        </tr>

                        <tr class="border-bottom-0">
                            <td class="text-black">1 วัน</td>
                            <td>3500-6,000</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-package mobile text-center mb-0">
                    <tbody>
                        <tr class="tr-title bg-green-light border-bottom-0">
                            <td colspan="4">บริการที่จะได้รับ</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ห้องพัก พร้อมเครื่องปรับอากาศ น้ำอุ่น และเฟอร์นิเจอร์ครบชุด</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">การบริการช่วยเหลือกิจวัตรประจำวัน และดูแล
                                    ทางการพยาบาล  ตลอด 24 ชั่วโมง (อัตรากำลัง 1:5)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">แพทย์ตรวจร่างกายแรกรับ  และตรวจเยี่ยม
                                    เดือนละ 1 ครั้ง / ให้คำปรึกษาด้วยระบบ Tele Consult</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">กิจกรรมระหว่างวัน (Day Activities)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">อาหาร 3 มื้อ และอาหารว่าง 2 มื้อ (ไม่รวมอาหารทางสายยาง) </small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small>บริการทำความสะอาดห้องพัก และซักรีดเสื้อผ้า</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ของใช้ส่วนบุคคล ได้แก่ เสื้อผ้า ชุดเครื่องนอน สบู่
                                    แชมพู แปรงสีฟัน ยาสีฟัน โลชั่น เป็นต้น</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">การรายงานอาการทางกลุ่มไลน์ครอบครัว วันละ 2 ครั้ง</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ระบบปรึกษากับ Care Advisor</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">ตรวจประเมินความสามารถการดำเนินกิจวัตรประจำวัน <br>(ADL : Activities of Daily Living)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">เวชภัณฑ์ทางการแพทย์  ได้แก่ ถุงมือ
                                    หน้ากากอนามัย เป็นต้น</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>

                        <tr>
                            <td class="text-black text-start">
                                <small class="ps-xl-3 ps-md-2">การบริการกายภาพบำบัด โดยนักกายภาพบำบัด
                                    ระดับวิชาชีพ (PT) วันละ 60 นาทีทุกวันจันทร์ - เสาร์ (ยกเว้นวันอาทิตย์ และนักขัตฤกษ์ตามประกาศบริษัท)</small>
                            </td>
                            <td class="text-green" colspan="3">/</td>
                        </tr>
                    </tbody>
                </table>
            </div><!--table-responsive-->

            <div class="p-5"></div>
        </div><!--container-->
    </div><!--section-->

    <div class="section section-branch-banner" data-aos="fade-in">
        <div class="background" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-1920x936--1.jpg')}});"></div>
        <div class="container">
            <div class="caption" data-aos="fade-up">
                <h3><span class="text-gold">11</span> สาขารองรับ <span class="text-gold">500</span> เตียง<br>
                    เปิดให้บริการใกล้บ้านคุณ</h3>

                <div class="buttons">
                    <a class="btn btn-dark next" href="/branches">
                        ดูรายละเอียดสาขา
                        <span class="icons icon-next"></span>
                    </a>
                </div>
            </div>
        </div><!--container-->
    </div><!--section-->
@endsection
