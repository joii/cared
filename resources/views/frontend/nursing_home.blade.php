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
            <div class="hgroup flex-column text-center">
                <img class="icons w-165 d-block" src="{{ asset('frontend/assets/img/logo.svg') }}" alt="CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร">
                <img class="icons h-102 d-block" src="{{ asset('frontend/assets/img/icons/icon-elder-couple.svg')}}" alt="CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร">
                <h1 class="fs-54">ศูนย์ดูแลผู้สูงอายุระยะสั้น<br class="d-block d-sm-none">และระยะยาว</h1>
                <h4 class="pt-2">พร้อมทีมแพทย์พยาบาล<br class="d-block d-sm-none">และนักกายภาพบำบัดดูแลตลอด 24 ชม.</h4>
            </div>


            <h3 class="text-center py-md-4 py-2">เหมาะสำหรับ</h3>
            <div class="boxed article" style="--width:800px">
                <ol class="list-numbered list-brown">
                    <li>ผู้สูงอายุที่ต้องการฟื้นฟูหลังผ่าตัด หรือเจ็บป่วย</li>
                    <li>ผู้ป่วยติดเตียง / ภาวะพึ่งพิง</li>
                    <li>ครอบครัวที่ต้องการผู้ดูแลระยะสั้นขณะติดภารกิจ</li>
                    <li>ผู้สูงอายุที่ต้องการพักอาศัยในสภาพแวดล้อมที่ปลอดภัยและมีคุณภาพชีวิต</li>
                </ol>

            </div><!--boxed-->

            <div class="p-5"></div>

            <div class="d-block" data-aos="fade-in" style="position: relative;">
                <h2 class="table-header">
                    ราคาบริการ Nursing Home 
                </h2>

                <div class="table-responsive d-none d-md-block" style="border-radius: 0 0 30px 30px;">
                    <table class="table table-package nursing-home table-hover">
                        <tbody>
                            <tr class="tr-header border-bottom-0">
                                <td class="td-20 text-start">
                                    <h3>ประเภทห้อง</h3>
                                </td>
                                <td class="td-26">
                                    <h3 class="text-black">Happy Like Package</h3>
                                    <p><small>เฉพาะสาขาที่ร่วมโครงการ <span class="nowrap">ติดต่อเจ้าหน้าที่</span></small></p>
                                </td>
                                <td class="td-26">
                                    <h3 class="text-black">Standard Package</h3>
                                </td>
                                <td class="td-26">
                                    <h3 class="text-black">
                                        Rehab <br>ราคาแพคเกจฟื้นฟู<br class="d-block d-sm-none">โรคหลอดเลือดสมอง
                                    </h3>
                                    <p><small>กายภาพบำบัด 1 ครั้งต่อวัน</small></p>
                                </td>
                            </tr>

                            <tr class="tr-title bg-green-light border-bottom-0">
                                <td>ห้องรวม</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>30 วัน</td>
                                <td>19,000</td>
                                <td>30,000-39,000</td>
                                <td>37,000-85,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>15 วัน</td>
                                <td>13,000</td>
                                <td>17,500-32,000</td>
                                <td>28,000-47,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>7 วัน</td>
                                <td>8,500</td>
                                <td>10,000-18,000</td>
                                <td>15,500-25,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>1 วัน</td>
                                <td>1,500</td>
                                <td>2,000-3,600</td>
                                <td>2,500-5,000</td>
                            </tr>

                            <tr class="tr-title bg-green-light border-bottom-0">
                                <td>ห้องคู่</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>30 วัน</td>
                                <td>25,000</td>
                                <td>35,000-45,000</td>
                                <td>42,000-90,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>15 วัน</td>
                                <td>15,000</td>
                                <td>22,500-37,500</td>
                                <td>30,000-52,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>7 วัน</td>
                                <td>9,500</td>
                                <td>12,000-21,000</td>
                                <td>16,500-28,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>1 วัน</td>
                                <td>2,000</td>
                                <td>2,500-4,500</td>
                                <td>3,500-5,500</td>
                            </tr>

                            <tr class="tr-title bg-green-light border-bottom-0">
                                <td>ห้องเดี่ยว</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>30 วัน</td>
                                <td>30,000</td>
                                <td>40,000-75,000</td>
                                <td>50,000-100,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>15 วัน</td>
                                <td>20,000</td>
                                <td>27,500-42,500</td>
                                <td>35,000-58,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>7 วัน</td>
                                <td>11,000</td>
                                <td>16,000-24,000</td>
                                <td>18,000-31,000</td>
                            </tr>

                            <tr class="border-bottom-0">
                                <td>1 วัน</td>
                                <td>2,500</td>
                                <td>3,000-5,000</td>
                                <td>3,500-6,000</td>
                            </tr>

                            <tr class="tr-title bg-brown-light border-bottom-0">
                                <td>บริการที่จะได้</td>
                                <td>Happy Like Package</td>
                                <td>Standard Package</td>
                                <td>Rehab</td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>ห้องพัก พร้อมเครื่องปรับอากาศ
                                        น้ำอุ่นและเฟอร์นิเจอร์ครบชุด</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>การบริการช่วยเหลือกิจวัตรประจำวัน
                                        และดูเเลทางการพยาบาล
                                        ตลอด 24 ชั่วโมง (อัตรากำลัง 1:5)</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>เเพทย์ตรวจร่างกายเเรกรับ
                                        และตรวจเยี่ยมเดือนละ
                                        1 ครั้ง / ให้คำปรึกษาด้วยระบบ
                                        Tele Consult</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>กิจกรรมระหว่างวัน<br>
                                        (Day Activities)</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>อาหาร 3 มื้อ และอาหารว่าง 2 มื้อ<br>
                                        (ไม่รวมอาหารทางสายยาง)</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>บริการทำความสะอาดห้องพัก
                                        และซักรีดเสื้อผ้า</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>ของใช้ส่วนบุคคลได้เเก่ เสื้อผ้า
                                        ชุดเครื่องนอน, สบู่, เเชมพู 
                                        แปรงสีฟัน, ยาสีฟัน, โลชั่น เป็นต้น</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>การรายงานอาการทางกลุ่มไลน์
                                        ครอบครัว วันละ 2 ครั้ง</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>ระบบปรึกษากับ Care Advisor</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>ตรวจประเมินความสามารถการ
                                        ดำเนินกิจวัตรประจำวัน<br>
                                        (ADL : Activities of Daily Living)</small>
                                </td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>เวชภัณฑ์ทางการแพทย์ ได้เเก่ ถุงมือ
                                        หน้ากากอนามัย เป็นต้น
                                        </small>
                                </td>
                                <td></td>
                                <td><span class="circle"></span></td>
                                <td><span class="circle"></span></td>
                            </tr>

                            <tr class="td-border-bottom">
                                <td>
                                    <small>การบริการกายภาพบำบัด โดยเจ้าหน้าที่
                                        กายภาพบำบัด (PTA) วันละ  30 นาที
                                        ทุกวันจันทร์-เสาร์ (ยกเว้นวันอาทิตย์
                                        เเละนักขัตฤกษ์ตามประกาศบริษัท)
                                        </small>
                                </td>
                                <td></td>
                                <td><span class="circle"></span></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <small>การบริการกายภาพบำบัด
                                        โดยนักกายภาพบำบัดระดับวิชาชีพ (PT)
                                        วันละ 60 นาทีทุกวันจันทร์-เสาร์ <br>
                                        (ยกเว้นวันอาทิตย์ เเละนักขัตฤกษ์ตาม
                                        ประกาศบริษัท)
                                        </small>
                                </td>
                                <td></td>
                                <td></td>
                                <td><span class="circle"></span></td>
                            </tr>

                        </tbody>
                    </table>
                </div><!--table-responsive-->

                <div class="swiper-overflow table-infos d-block d-md-none">
                    <div class="swiper-container swiper-table-infos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <table class="table table-package nursing-home">
                                    <tbody>
                                        <tr class="tr-header border-bottom-0">
                                            <td class="td-20 text-start">
                                                <h3>ประเภทห้อง</h3>
                                            </td>
                                            <td class="td-26">
                                                <h3 class="text-black">Happy Like Package</h3>
                                                <p><small>เฉพาะสาขาที่ร่วมโครงการ <span class="nowrap">ติดต่อเจ้าหน้าที่</span></small></p>
                                            </td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องรวม</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>19,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>13,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>8,500</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>1,500</td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องคู่</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>25,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>15,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>9,500</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>2,000</td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องเดี่ยว</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>30,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>20,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>11,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>2,500</td>
                                        </tr>

                                        <tr class="tr-title bg-brown-light border-bottom-0">
                                            <td>บริการที่จะได้</td>
                                            <td>Happy Like Package</td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ห้องพัก พร้อมเครื่องปรับอากาศ
                                                    น้ำอุ่นและเฟอร์นิเจอร์ครบชุด</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การบริการช่วยเหลือกิจวัตรประจำวัน
                                                    และดูเเลทางการพยาบาล
                                                    ตลอด 24 ชั่วโมง (อัตรากำลัง 1:5)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>เเพทย์ตรวจร่างกายเเรกรับ
                                                    และตรวจเยี่ยมเดือนละ
                                                    1 ครั้ง / ให้คำปรึกษาด้วยระบบ
                                                    Tele Consult</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>กิจกรรมระหว่างวัน<br>
                                                    (Day Activities)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>อาหาร 3 มื้อ และอาหารว่าง 2 มื้อ<br>
                                                    (ไม่รวมอาหารทางสายยาง)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>บริการทำความสะอาดห้องพัก
                                                    และซักรีดเสื้อผ้า</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ของใช้ส่วนบุคคลได้เเก่ เสื้อผ้า
                                                    ชุดเครื่องนอน, สบู่, เเชมพู 
                                                    แปรงสีฟัน, ยาสีฟัน, โลชั่น เป็นต้น</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การรายงานอาการทางกลุ่มไลน์
                                                    ครอบครัว วันละ 2 ครั้ง</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ระบบปรึกษากับ Care Advisor</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ตรวจประเมินความสามารถการ
                                                    ดำเนินกิจวัตรประจำวัน<br>
                                                    (ADL : Activities of Daily Living)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>เวชภัณฑ์ทางการแพทย์ ได้เเก่ ถุงมือ
                                                    หน้ากากอนามัย เป็นต้น
                                                    </small>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การบริการกายภาพบำบัด โดยเจ้าหน้าที่
                                                    กายภาพบำบัด (PTA) วันละ  30 นาที
                                                    ทุกวันจันทร์-เสาร์ (ยกเว้นวันอาทิตย์
                                                    เเละนักขัตฤกษ์ตามประกาศบริษัท)
                                                    </small>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small>การบริการกายภาพบำบัด
                                                    โดยนักกายภาพบำบัดระดับวิชาชีพ (PT)
                                                    วันละ 60 นาทีทุกวันจันทร์-เสาร์ <br>
                                                    (ยกเว้นวันอาทิตย์ เเละนักขัตฤกษ์ตาม
                                                    ประกาศบริษัท)
                                                    </small>
                                            </td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div><!--swiper-slide-->

                            <div class="swiper-slide">
                                <table class="table table-package nursing-home">
                                    <tbody>
                                        <tr class="tr-header border-bottom-0">
                                            <td class="td-20 text-start">
                                                <h3>ประเภทห้อง</h3>
                                            </td>

                                            <td class="td-26">
                                                <h3 class="text-black">Standard Package</h3>
                                            </td>

                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องรวม</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>30,000-39,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>17,500-32,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>10,000-18,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>2,000-3,600</td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องคู่</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>35,000-45,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>22,500-37,500</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>12,000-21,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>2,500-4,500</td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องเดี่ยว</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>40,000-75,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>27,500-42,500</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>16,000-24,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>3,000-5,000</td>
                                        </tr>

                                        <tr class="tr-title bg-brown-light border-bottom-0">
                                            <td>บริการที่จะได้</td>
                                            <td>Standard Package</td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ห้องพัก พร้อมเครื่องปรับอากาศ
                                                    น้ำอุ่นและเฟอร์นิเจอร์ครบชุด</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การบริการช่วยเหลือกิจวัตรประจำวัน
                                                    และดูเเลทางการพยาบาล
                                                    ตลอด 24 ชั่วโมง (อัตรากำลัง 1:5)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>เเพทย์ตรวจร่างกายเเรกรับ
                                                    และตรวจเยี่ยมเดือนละ
                                                    1 ครั้ง / ให้คำปรึกษาด้วยระบบ
                                                    Tele Consult</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>กิจกรรมระหว่างวัน<br>
                                                    (Day Activities)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>อาหาร 3 มื้อ และอาหารว่าง 2 มื้อ<br>
                                                    (ไม่รวมอาหารทางสายยาง)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>บริการทำความสะอาดห้องพัก
                                                    และซักรีดเสื้อผ้า</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ของใช้ส่วนบุคคลได้เเก่ เสื้อผ้า
                                                    ชุดเครื่องนอน, สบู่, เเชมพู 
                                                    แปรงสีฟัน, ยาสีฟัน, โลชั่น เป็นต้น</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การรายงานอาการทางกลุ่มไลน์
                                                    ครอบครัว วันละ 2 ครั้ง</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ระบบปรึกษากับ Care Advisor</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ตรวจประเมินความสามารถการ
                                                    ดำเนินกิจวัตรประจำวัน<br>
                                                    (ADL : Activities of Daily Living)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>เวชภัณฑ์ทางการแพทย์ ได้เเก่ ถุงมือ
                                                    หน้ากากอนามัย เป็นต้น
                                                    </small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การบริการกายภาพบำบัด โดยเจ้าหน้าที่
                                                    กายภาพบำบัด (PTA) วันละ  30 นาที
                                                    ทุกวันจันทร์-เสาร์ (ยกเว้นวันอาทิตย์
                                                    เเละนักขัตฤกษ์ตามประกาศบริษัท)
                                                    </small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small>การบริการกายภาพบำบัด
                                                    โดยนักกายภาพบำบัดระดับวิชาชีพ (PT)
                                                    วันละ 60 นาทีทุกวันจันทร์-เสาร์ <br>
                                                    (ยกเว้นวันอาทิตย์ เเละนักขัตฤกษ์ตาม
                                                    ประกาศบริษัท)
                                                    </small>
                                            </td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div><!--swiper-slide-->

                            <div class="swiper-slide">
                                <table class="table table-package nursing-home">
                                    <tbody>
                                        <tr class="tr-header border-bottom-0">
                                            <td class="td-20 text-start">
                                                <h3>ประเภทห้อง</h3>
                                            </td>

                                            <td class="td-26">
                                                <h3 class="text-black">
                                                    Rehab ราคาแพคเกจฟื้นฟู<br>โรคหลอดเลือดสมอง
                                                </h3>
                                                <p><small>กายภาพบำบัด 1 ครั้งต่อวัน</small></p>
                                            </td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องรวม</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>37,000-85,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>28,000-47,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>15,500-25,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>2,500-5,000</td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องคู่</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>42,000-90,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>30,000-52,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>16,500-28,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>3,500-5,500</td>
                                        </tr>

                                        <tr class="tr-title bg-green-light border-bottom-0">
                                            <td>ห้องเดี่ยว</td>
                                            <td></td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>30 วัน</td>
                                            <td>50,000-100,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>15 วัน</td>
                                            <td>35,000-58,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>7 วัน</td>
                                            <td>18,000-31,000</td>
                                        </tr>

                                        <tr class="border-bottom-0">
                                            <td>1 วัน</td>
                                            <td>3,500-6,000</td>
                                        </tr>

                                        <tr class="tr-title bg-brown-light border-bottom-0">
                                            <td>บริการที่จะได้</td>
                                            <td>Rehab</td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ห้องพัก พร้อมเครื่องปรับอากาศ
                                                    น้ำอุ่นและเฟอร์นิเจอร์ครบชุด</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การบริการช่วยเหลือกิจวัตรประจำวัน
                                                    และดูเเลทางการพยาบาล
                                                    ตลอด 24 ชั่วโมง (อัตรากำลัง 1:5)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>เเพทย์ตรวจร่างกายเเรกรับ
                                                    และตรวจเยี่ยมเดือนละ
                                                    1 ครั้ง / ให้คำปรึกษาด้วยระบบ
                                                    Tele Consult</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>กิจกรรมระหว่างวัน<br>
                                                    (Day Activities)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>อาหาร 3 มื้อ และอาหารว่าง 2 มื้อ<br>
                                                    (ไม่รวมอาหารทางสายยาง)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>บริการทำความสะอาดห้องพัก
                                                    และซักรีดเสื้อผ้า</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ของใช้ส่วนบุคคลได้เเก่ เสื้อผ้า
                                                    ชุดเครื่องนอน, สบู่, เเชมพู 
                                                    แปรงสีฟัน, ยาสีฟัน, โลชั่น เป็นต้น</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การรายงานอาการทางกลุ่มไลน์
                                                    ครอบครัว วันละ 2 ครั้ง</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ระบบปรึกษากับ Care Advisor</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>ตรวจประเมินความสามารถการ
                                                    ดำเนินกิจวัตรประจำวัน<br>
                                                    (ADL : Activities of Daily Living)</small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>เวชภัณฑ์ทางการแพทย์ ได้เเก่ ถุงมือ
                                                    หน้ากากอนามัย เป็นต้น
                                                    </small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                        <tr class="td-border-bottom">
                                            <td>
                                                <small>การบริการกายภาพบำบัด โดยเจ้าหน้าที่
                                                    กายภาพบำบัด (PTA) วันละ  30 นาที
                                                    ทุกวันจันทร์-เสาร์ (ยกเว้นวันอาทิตย์
                                                    เเละนักขัตฤกษ์ตามประกาศบริษัท)
                                                    </small>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small>การบริการกายภาพบำบัด
                                                    โดยนักกายภาพบำบัดระดับวิชาชีพ (PT)
                                                    วันละ 60 นาทีทุกวันจันทร์-เสาร์ <br>
                                                    (ยกเว้นวันอาทิตย์ เเละนักขัตฤกษ์ตาม
                                                    ประกาศบริษัท)
                                                    </small>
                                            </td>
                                            <td><span class="circle"></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div><!--swiper-slide-->
                        </div>
                    </div><!--swiper-container-->

                    <div class="swiper-pagination pt-3"></div>
                    <div class="swiper-button swiper-button-prev"><span class="icons"></span></div>
                    <div class="swiper-button swiper-button-next"><span class="icons"></span></div>
                </div><!--swiper-overflow-->
            </div>
        </div><!--container-->
    </div><!--section-->

    <div class="section pt-md-4 pt-0">
        <div class="container">
            <div class="hgroup text-center" data-aos="fade-in">
                <h3 class="title-main textrow">
                    <span data-aos="fade-up">ประเภทห้องพัก</span>
                </h3>
            </div>

            <div class="row g-lg-4 g-3">
                <div class="col-md-4 col-sm-6">
                    <div class="card-room" data-aos="fade-in">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x450--1.jpg')}});">
                                <img src="{{ asset('frontend/assets/img/thumb/frame-100x56.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>ห้องรวม</h3>
                            <p>Shared Room</p>
                        </div>
                    </div><!--card-room-->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-room" data-aos="fade-in">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x450--2.jpg')}});">
                                <img src="{{ asset('frontend/assets/img/thumb/frame-100x56.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>ห้องคู่</h3>
                            <p>Twin Room</p>
                        </div>
                    </div><!--card-room-->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-room" data-aos="fade-in">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x450--3.jpg')}});">
                                <img src="{{ asset('frontend/assets/img/thumb/frame-100x56.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>ห้องเดี่ยว</h3>
                            <p>Private Room</p>
                        </div>
                    </div><!--card-room-->
                </div>
            </div><!--row-->
        </div>
    </div><!--section-->

    <div class="section pt-md-4 pt-0">
        <div class="container">
            <div class="hgroup text-center" data-aos="fade-in">
                <h3 class="title-main textrow">
                    <span data-aos="fade-up">ภาพกิจกรรมของเรา</span>
                </h3>
            </div>
        </div>

        <div class="swiper-overflow" data-aos="fade-in">
            <div class="swiper-container swiper-gallery branch">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x535--1.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x67.png')}}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x535--2.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x67.png')}}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x535--3.jpg')}});">
                            <img src="{{ asset('frontend/assets/img/thumb/frame-100x67.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div><!--swiper-container-->

            <div class="swiper-button swiper-button-prev"><span class="icons"></span></div>
            <div class="swiper-button swiper-button-next"><span class="icons"></span></div>
        </div><!--swiper-overflow-->
    </div><!--section-->

    <div class="section section-branch-banner" data-aos="fade-in">
        <div class="background" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-1920x936--2.jpg')}});"></div>
        <div class="container">
            <div class="caption" data-aos="fade-up">
                <h3><span class="text-gold">11</span> สาขารองรับ <span class="text-gold">500</span> เตียง<br>
                    เปิดให้บริการใกล้บ้านคุณ</h3>

                <div class="buttons">
                    <a class="btn btn-dark next" href="{{ route('frontend.branch_page') }}">
                        ดูรายละเอียดสาขา
                        <span class="icons icon-next"></span>
                    </a>
                </div>
            </div>
        </div><!--container-->
    </div><!--section-->



@endsection
