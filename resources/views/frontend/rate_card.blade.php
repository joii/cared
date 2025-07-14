@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')


@section('content')
 <div class="section section-banner">
    @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
     @endforeach
</div>

    <div class="section pb-0">
        <div class="background price-packaging" style="background-image: url({{ asset('frontend/assets/img/thumb/bg-price-packaging.jpg') }});"></div>
        <div class="container">
            <div class="hgroup text-center">
                <h3 class="textrow title-main">
                    <span data-aos="fade-up">Promotion</span>
                </h3>
            </div>

            <div class="boxed" style="--width:995px" data-aos="fade-in">
                <div class="swiper-container swiper-promotion">
                    <div class="swiper-wrapper">
                        @foreach ($packages as $item)
                        <div class="swiper-slide">
                            <a href="{{ $item->external_url !=''? $item->external_url : route('frontend.package_detail_page', [$item->id,$item->slug_th]) }}">
                            <img class="w-100" src="{{ asset($item->image_path) }}" alt="{{ $item->name_th }}">
                            </a>
                        </div>
                        @endforeach

                      </div>
                </div><!--swiper-container-->

                <div class="swiper-pagination"></div>
            </div><!--boxed-->


            <div class="boxed mt-5 pt-md-4" style="--width:1190px">
                <div class="hgroup text-center">
                    <h3 class="textrow title-main">
                        <span data-aos="fade-up">Hot package</span>
                    </h3>
                </div>

                <div class="card-package hot-package" data-aos="fade-in">
                    <div class="card-header">
                        <div class="row g-0">
                            <div class="col-6">
                                <h5>Happy Like<br>
                                    Package</h5>

                                <h2 class="price" data-aos><span class="highlight">19,000</span></h2>
                            </div>
                            <div class="col-6">
                                <h5>Happy Like Combo care<br>
                                    (Feed+Suction)</h5>

                                <h2 class="price" data-aos><span class="highlight">25,000</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center mb-3">การันตีคุณภาพ</h3>

                        <ol class="list-numbered list-black fs-30">
                            <li>การันตีบริการ ทดลองอยู่ฟรี 3 วัน</li>
                            <li>จองในวันเยี่ยมชมได้รับเป็นส่วนลดเพิ่มในเดือนแรก</li>
                        </ol>
                    </div>

                    <hr>

                    <div class="card-body">
                        <h3 class="text-center mb-3">Standard</h3>

                        <ol class="list-numbered list-outline fs-17">
                            <li>ห้องพัก พร้อมเครื่องปรับอากาศ น้ำอุ่น และเฟอร์นิเจอร์ครบชุด</li>
                            <li>การบริการช่วยเหลือกิจวัตรประจำวัน และดูเเลทางการพยาบาล  ตลอด 24 ชั่วโมง (อัตรากำลัง 1:5)</li>
                            <li>เพทย์ตรวจร่างกายเเรกรับ  และตรวจเยี่ยมเดือนละ 1 ครั้ง / ให้คำปรึกษาด้วยระบบ Tele Consult </li>
                            <li>กิจกรรมระหว่างวัน (Day Activities)</li>
                            <li>อาหาร 3 มื้อ และอาหารว่าง 2 มื้อ (ไม่รวมอาหารทางสายยาง) </li>
                            <li>บริการทำความสะอาดห้องพัก และซักรีดเสื้อผ้า</li>
                            <li>ของใช้ส่วนบุคคล  ได้เเก่ เสื้อผ้า ชุดเครื่องนอน  สบู่  เเชมพู  แปรงสีฟัน ยาสีฟัน  โลชั่น เป็นต้น</li>
                            <li>เวชภัณฑ์ทางการเเพทย์  ได้เเก่ ถุงมือ หน้ากากอนามัย เป็นต้น</li>
                            <li>การรายงานอาการทางกลุ่มไลน์ครอบครัว วันละ 2 ครั้ง</li>
                            <li>ระบบปรึกษากับ Care Advisor </li>
                            <li>ตรวจประเมินความสามารถการดำเนินกิจวัตรประจำวัน (ADL : Activities of Daily Living)</li>
                            <li>การบริการกายภาพบำบัด โดยเจ้าหน้าที่กายภาพบำบัด (PTA) วันละ  30 นาทีทุกวันจันทร์-เสาร์ <br>(ยกเว้นวันอาทิตย์ เเละนักขัตฤกษ์ตามประกาศบริษัท)</li>
                        </ol>
                    </div>
                </div><!--card-->
            </div><!--boxed-->


            <div class="d-block mt-5 pt-md-4" data-aos="fade-in" style="position: relative;">
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

    <div class="section pt-0">
        <div class="container">
            <div class="boxed mt-5 pt-md-4" style="--width:1150px">
                <div class="card-package" data-aos="fade-in">
                    <div class="card-header">
                        <h3>Hot package Home Care</h3>
                    </div>
                     <div class="card-body py-0">
                        <div class="row">
                            <div class="col-sm-6 border-right">
                                <div class="package-block" style="min-height: 300px;">
                                    <h4>แพคเกจทดลองใช้</h4>
                                    <p>
                                        <span class="fs-85 highlight">7</span>
                                        <span class="fs-52">วัน</span>
                                    </p>
                                     <a class="btn btn-secondary" href="{{ route('frontend.package_detail_page',[3,'ทดลองใช้_7_วัน']) }}">
                                        อ่านรายละเอียด
                                        <span class="icons icon-next"></span>
                                    </a>

                                </div>
                            </div>

                           <div class="col-sm-6">
                                <div class="package-block">
                                    <h4>แพคเกจอยู่เป็นเพื่อน</h4>
                                    <p class="fs-70">
                                        <span class="highlight">ราย</span>เดือน
                                    </p>
                                     <a class="btn btn-secondary" href="{{ route('frontend.package_detail_page',[4,'Care-D_Home_Care_แพคเกจอยู่เป็นเพื่อน_รายเดือน']) }}">
                                        อ่านรายละเอียด
                                        <span class="icons icon-next"></span>
                                    </a>
                                </div>
                            </div>

                        </div><!--row-->
                    </div><!--card-body-->

                </div><!--card-package-->
            </div><!--boxed-->

            <div class="boxed mt-5 pt-md-4" style="--width:1150px">
                <h2 class="table-header fs-25" style="--bg:#0F3B3C;">ค่าบริการจัดส่งพนักงานดูแลผู้ป่วย และผู้สูงอายุที่บ้าน หรือ เผ้าไข้ที่โรงพยาบาล</h2>

                <div class="table-responsive" style="border-radius: 0 0 10px 10px;">
                    <table class="table table-package table-price">
                        <tbody>
                            <tr class="tr-title bg-green-light">
                                <td>
                                    <h4>นักบริบาล (NA/CG)</h4>
                                </td>
                                <td>
                                    ดูแล 12 ชั่วโมงต่อวัน
                                    <br class="d-block d-sm-none">
                                    <span class="label">ไป-กลับ</span>
                                </td>
                                <td>
                                    ดูแล 24 ชั่วโมงต่อวัน
                                    <br class="d-block d-sm-none">
                                    <span class="label">พักค้างคืน</span>
                                </td>
                            </tr>
                            <tr class="empty">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1 วัน</td>
                                <td>1,800</td>
                                <td>3,000</td>
                            </tr>

                            <tr>
                                <td>7 วัน</td>
                                <td>12,000</td>
                                <td>17,000</td>
                            </tr>

                            <tr>
                                <td>15 วัน</td>
                                <td>24,000</td>
                                <td>30,000</td>
                            </tr>

                            <tr>
                                <td>
                                    1 เดือน (30 วัน)<br>
                                    <span class="text-note">ปฏิบัติงาน 26 วันต่อเดือน</span>
                                </td>
                                <td>35,000</td>
                                <td>48,000</td>
                            </tr>

                            <tr class="empty">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

                <div class="buttons mt-sm-2">
                    <a class="btn px-5" href="{{ route('frontend.package_detail_page',[5,'ค่าบริการนักบริบาล']) }}">
                        อ่านรายละเอียด <span class="icons icon-next"></span>
                    </a>
                </div>

            </div><!--boxed-->

            <div class="boxed mt-5 pt-md-4" style="--width:1150px">
                <h2 class="table-header fs-25" style="--bg:#0F3B3C;">ค่าบริการจัดส่งพนักงานดูแลผู้ป่วย และผู้สูงอายุที่บ้าน หรือ เผ้าไข้ที่โรงพยาบาล</h2>

                <div class="table-responsive" style="border-radius: 0 0 10px 10px;">
                    <table class="table table-package table-price">
                        <tbody>
                            <tr class="tr-title bg-green-light">
                                <td>
                                    <h4>ผู้ช่วยพยาบาล (PN)</h4>
                                </td>
                                <td>
                                    ดูแล 12 ชั่วโมงต่อวัน
                                    <br class="d-block d-sm-none">
                                    <span class="label">ไป-กลับ</span>
                                </td>
                                <td>
                                    ดูแล 24 ชั่วโมงต่อวัน
                                    <br class="d-block d-sm-none">
                                    <span class="label">พักค้างคืน</span>
                                </td>
                            </tr>
                            <tr class="empty">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1 วัน</td>
                                <td>2,400</td>
                                <td>3,500</td>
                            </tr>

                            <tr>
                                <td>7 วัน</td>
                                <td>14,000</td>
                                <td>22,000</td>
                            </tr>

                            <tr>
                                <td>15 วัน</td>
                                <td>27,000</td>
                                <td>45,000</td>
                            </tr>

                            <tr>
                                <td>
                                    1 เดือน (30 วัน)<br>
                                    <span class="text-note">ปฏิบัติงาน 26 วันต่อเดือน</span>
                                </td>
                                <td>45,000</td>
                                <td>60,000</td>
                            </tr>

                            <tr class="empty">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

                <div class="buttons mt-sm-2">
                    <a class="btn px-5" href="{{ route('frontend.package_detail_page',[6,'ผู้ช่วยพยาบาล_PN']) }}">
                        อ่านรายละเอียด <span class="icons icon-next"></span>
                    </a>
                </div>

            </div><!--boxed-->

            <div class="boxed mt-5 pt-md-4" style="--width:1150px">
                <h2 class="table-header fs-25" style="--bg:#0F3B3C;">ค่าบริการจัดส่งพนักงานดูแลผู้ป่วย และผู้สูงอายุที่บ้าน หรือ เผ้าไข้ที่โรงพยาบาล</h2>

                <div class="table-responsive" style="border-radius: 0 0 10px 10px;">
                    <table class="table table-package table-price">
                        <tbody>
                            <tr class="tr-title bg-green-light">
                                <td>
                                    <h4>พยาบาลวิชาชีพ (RN)</h4>
                                </td>
                                <td>
                                    ดูแล 12 ชั่วโมงต่อวัน
                                    <br class="d-block d-sm-none">
                                    <span class="label">ไป-กลับ</span>
                                </td>
                                <td>
                                    ดูแล 24 ชั่วโมงต่อวัน
                                    <br class="d-block d-sm-none">
                                    <span class="label">พักค้างคืน</span>
                                </td>
                            </tr>
                            <tr class="empty">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1 วัน</td>
                                <td>3,500</td>
                                <td>6,500</td>
                            </tr>

                            <tr>
                                <td>7 วัน</td>
                                <td>24,500</td>
                                <td>45,500</td>
                            </tr>

                            <tr>
                                <td>15 วัน</td>
                                <td>52,500</td>
                                <td>97,500</td>
                            </tr>

                            <tr>
                                <td>
                                    1 เดือน (30 วัน)<br>
                                    <span class="text-note">ปฏิบัติงาน 26 วันต่อเดือน</span>
                                </td>
                                <td>91,000</td>
                                <td>169,000</td>
                            </tr>

                            <tr class="empty">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

                <div class="buttons mt-sm-2">
                    <a class="btn px-5" href="{{ route('frontend.package_detail_page',[7,'พยาบาลวิชาชีพ_RN']) }}">
                        อ่านรายละเอียด <span class="icons icon-next"></span>
                    </a>
                </div>

            </div><!--boxed-->

            <div class="boxed mt-5 pt-md-4" style="--width:1150px">

                <div class="d-block" data-aos="fade-in">
                    <h2 class="table-header" style="--bg: #AA8D68;">
                        ราคาบริการเช่าเตียงไฟฟ้า
                    </h2>
                    <div class="card-product">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x500.jpg') }});"></div>
                        </div>
                        <div class="card-body">
                            <h3>5,000 บาท/เดือน (ขั้นต่ำ 2 เดือน)</h3>
                        </div>
                    </div>
                </div>
            </div><!--boxed-->

            <div class="boxed mt-5 pt-md-5" style="--width:1150px">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card-package normal" data-aos="fade-in">
                            <div class="card-header" style="--bg:#49744F;">
                                <h4 class="py-1">
                                    Package<br>
                                    บริการกายภาพบำบัด
                                </h4>
                            </div>

                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>1 ครั้ง</td>
                                        <td>1,500</td>
                                    </tr>
                                    <tr>
                                        <td>10 ครั้ง</td>
                                        <td>14,250</td>
                                    </tr>
                                    <tr>
                                        <td>20 ครั้ง</td>
                                        <td>27,000</td>
                                    </tr>
                                    <tr>
                                        <td>30 ครั้ง</td>
                                        <td>38,250</td>
                                    </tr>
                                </table>
                                <div class="buttons">
                                    <a href="{{ route('frontend.package_detail_page',[8,'cared_home_care_บริการกายภาพบำบัด']) }}" class="btn">
                                        อ่านรายละเอียด
                                        <span class="icons icon-next"></span>
                                    </a>
                                </div>
                            </div>
                        </div><!--card-package-->
                    </div>

                    <div class="col-md-4">
                        <div class="card-package normal" data-aos="fade-in">
                            <div class="card-header" style="--bg:#0F3B3C;">
                                <h4 class="py-1">
                                    Package<br>
                                    บริการกิจกรรมบำบัด
                                </h4>
                            </div>

                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>1 ครั้ง</td>
                                        <td>1,500</td>
                                    </tr>
                                    <tr>
                                        <td>10 ครั้ง</td>
                                        <td>14,250</td>
                                    </tr>
                                    <tr>
                                        <td>20 ครั้ง</td>
                                        <td>27,000</td>
                                    </tr>
                                    <tr>
                                        <td>30 ครั้ง</td>
                                        <td>38,250</td>
                                    </tr>
                                </table>
                                <div class="buttons">
                                    <a href="{{ route('frontend.package_detail_page',[9,'cared_home_care_บริการกิจกรรมบำบัด']) }}" class="btn">
                                        อ่านรายละเอียด
                                        <span class="icons icon-next"></span>
                                    </a>
                                </div>
                            </div>
                        </div><!--card-package-->
                    </div>

                    <div class="col-md-4">
                        <div class="card-package normal" data-aos="fade-in">
                            <div class="card-header">
                                <h4 class="py-1">
                                    Package<br>
                                    บริการนวดแผนไทย
                                </h4>
                            </div>

                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>1 ครั้ง</td>
                                        <td>1,500</td>
                                    </tr>
                                    <tr>
                                        <td>10 ครั้ง</td>
                                        <td>14,250</td>
                                    </tr>
                                    <tr>
                                        <td>20 ครั้ง</td>
                                        <td>27,000</td>
                                    </tr>
                                    <tr>
                                        <td>30 ครั้ง</td>
                                        <td>38,250</td>
                                    </tr>
                                </table>
                                <div class="buttons">
                                    <a href="{{ route('frontend.package_detail_page',[10,'care_d_home_care_บริการนวดแผนไทย']) }}" class="btn">
                                        อ่านรายละเอียด
                                        <span class="icons icon-next"></span>
                                    </a>
                                </div>
                            </div>
                        </div><!--card-package-->
                    </div>
                </div><!--row-->
            </div><!--boxed-->

            <div class="boxed mt-sm-5 mt-4 pt-md-5" style="--width:1150px">

                <div class="d-block" data-aos="fade-in">
                    <h2 class="table-header" style="--bg: #AA8D68;">
                        บริการรถรับ-ส่ง
                    </h2>
                    <div class="card-product shuttle-service">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x640.jpg') }});"></div>
                        </div>
                        <div class="card-body">
                            <div class="info-row">
                                <span class="icons icon-arrow"></span>
                                <p>เที่ยวเดียว <span class="text-gold">2,000</span> บาท/ครั้ง</p>
                            </div>

                            <div class="info-row">
                                <span class="icons icon-arrow"></span>
                                <p>ไป-กลับ <span class="text-gold">3,000</span> บาท/ครั้ง</p>
                            </div>

                            <div class="row gx-2 py-2">
                                <div class="col-md-4">
                                    <div class="info-row fs-17">
                                        <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-100x100--1.png') }}" alt="Care-D Nursing Home">
                                        <p>ทีมชข่วยเหลือ<br>
                                            สหวิชาชีพมีใบรับรอง</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="info-row fs-17">
                                        <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-100x100--2.png') }}" alt="Care-D Nursing Home">
                                        <p>พร้อมด้วยอุปกรณ์<br>
                                            ช่วยเหลือ</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="info-row fs-17">
                                        <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-100x100--3.png') }}" alt="Care-D Nursing Home">
                                        <p>รับ-ส่งนัดหมายได้<br><span class="text-gold fs-20">7/24</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons">
                                <a href="{{ route('frontend.package_detail_page',[11,'cared_home_care_บริการรถรับ-ส่ง']) }}" class="btn me-auto">
                                    อ่านรายละเอียด
                                    <span class="icons icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--boxed-->

            <div class="boxed my-sm-5 my-4 p-md-5 d-flex">
                <div class="card-we-care main" data-aos="fade-up">
                    <div class="card-icon h-auto pt-3">
                        <img class="w-160" src="{{ asset('frontend/assets/img/icons/logo-home-care-2.svg') }}" alt="Care-D Nursing Home">
                    </div>
                    <div class="card-body pt-4">
                        <h3>บริการ รายงานและติดตาม</h3>
                        <h2>อาการผู้ป่วย</h2>

                        <div class="buttons">
                            <a class="btn btn-secondary" href="{{ route('frontend.package_detail_page',[12,'cared_home_care_ให้บริการรายงานและติดตามผลผู้ป่วย']) }}">
                                อ่านรายละเอียด
                                <span class="icons icon-next"></span>
                            </a>
                        </div>
                    </div>
                </div><!--card-we-care-->
            </div>
        </div><!--container-->
    </div><!--section-->

@endsection
