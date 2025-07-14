@extends('frontend.master')
@section('title', 'CARE•D : Home Care : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'บริการส่ง Caregiver และทีมดูแลมืออาชีพถึงบ้านสำหรับผู้สูงอายุที่ต้องการการดูแลในสิ่งแวดล้อมที่คุ้นเคย')

@section('content')
<div class="section section-banner h-auto">
    <div class="swiper-container swiper-banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="w-100" src="{{ asset('frontend/assets/img/thumb/photo-1920x1065.jpg') }}" alt="CARE•D : Home Care บริการส่ง Caregiver และทีมดูแลมืออาชีพถึงบ้าน">
            </div>
            <div class="swiper-slide">
                <img class="w-100" src="{{ asset('frontend/assets/img/thumb/photo-1920x1065.jpg') }}" alt="CARE•D : Home Care บริการส่ง Caregiver และทีมดูแลมืออาชีพถึงบ้าน">
            </div>
            <div class="swiper-slide">
                <img class="w-100" src="{{ asset('frontend/assets/img/thumb/photo-1920x1065.jpg') }}" alt="CARE•D : Home Care บริการส่ง Caregiver และทีมดูแลมืออาชีพถึงบ้าน">
            </div>
        </div>
    </div><!--swiper-container-->

    <div class="swiper-pagination banner"></div>
</div>

    <div class="section">
        <div class="container">
            <div class="hgroup flex-column text-center">
                <img class="icons w-165 d-block" src="{{ asset('frontend/assets/img/icons/logo-home-care.svg')}}" alt="">
                <img class="icons h-102 d-block" src="{{ asset('frontend/assets/img/icons/icon-home-care.svg')}}" alt="">
                <h1 class="fs-54 pt-3">
                    We Care
                </h1>
                <h3 class="text-gold">เคสแบบไหนเราพร้อมดูแล</h3>
            </div>

            <div class="boxed pt-4" style="--width:1150px">
                <div class="row card-we-care-list g-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-we-care" data-aos="fade-in">
                            <div class="card-icon">
                                <img src="{{ asset('frontend/assets/img/icons/icon-wecare-1.svg')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h3>ผู้ป่วยหรือผู้สูงอายุติดเตียง</h3>
                                <p>Elderly or bedridden patients</p>
                            </div>
                        </div><!--card-we-care-->
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="card-we-care" data-aos="fade-in">
                            <div class="card-icon">
                                <img src="{{ asset('frontend/assets/img/icons/icon-wecare-2.svg')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h3>ผู้ป่วยหลังผ่าตัด</h3>
                                <p>Post-surgery patients</p>
                            </div>
                        </div><!--card-we-care-->
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="card-we-care" data-aos="fade-in">
                            <div class="card-icon">
                                <img src="{{ asset('frontend/assets/img/icons/icon-wecare-3.svg')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h3>ผู้สูงอายุที่ต้องการผู้ดูแล<br>
                                    กิจวัตรประจำวัน</h3>
                                <p>Elderly requiring assistance
                                    with daily activities</p>
                            </div>
                        </div><!--card-we-care-->
                    </div>
                </div><!--row-->
            </div><!--boxed-->

            <div class="boxed pt-5 mt-sm-4" style="--width:1100px">
                <div class="hgroup text-center">
                    <h3 class="title-main textrow">
                        <span data-aos="fade-up">ประสบการณ์การดูแล<br class="d-block d-sm-none">ครอบคลุมทุกมิติ</span>
                    </h3>
                </div>

                <div class="row g-0 fs-25" data-aos="fade-in">
                    <div class="col-sm-4">
                        <ol class="list-numbered list-brown">
                            <li>ให้อาหารทางสายยาง</li>
                            <li>ดูดเสมหะ</li>
                            <li>ให้ออกซิเจน</li>
                            <li>ฉีดอินซูลิน</li>
                        </ol>
                    </div>

                    <div class="col-sm-4">
                        <ol class="list-numbered list-brown" start="5">
                            <li>กายภาพบำบัดพื้นฐาน</li>
                            <li>ประเมินสัญญาณชีพ</li>
                            <li>สวนปัสสาวะทิ้ง</li>
                            <li>ทำแผล</li>
                        </ol>
                    </div>

                    <div class="col-sm-4">
                        <ol class="list-numbered list-brown" start="9">
                            <li>ดูแลอาหารและยาตามเวลา</li>
                            <li>ดูแลป้องกันแผลกดทับ</li>
                            <li>ดูแลสุขอนามัยผู้ป่วย</li>
                            <li>พาพบแพทย์ตามนัด</li>
                        </ol>
                    </div>
                </div><!--row-->
            </div><!--boxed-->

            <div class="p-md-5 p-4"></div>

            <div class="row gx-4 gy-sm-5 gy-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="card-infos mw-320" data-aos="fade-in">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-600x630--1.jpg')}});">
                                <img src="{{ asset('frontend/assets/img/thumb/frame-100x105.png')}}" alt="">
                            </div>
                        </div>

                        <div class="card-body">
                            <p>ให้อาหารทางสายยาง<br>Tube feeding</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-infos mw-320" data-aos="fade-in">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-600x630--2.jpg')}});">
                                <img src="{{ asset('frontend/assets/img/thumb/frame-100x105.png')}}" alt="">
                            </div>
                        </div>

                        <div class="card-body">
                            <p>ประเมินวัดค่าสัญญาณชีพ<br>Vital Sign</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-infos mw-320" data-aos="fade-in">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-600x630--3.jpg')}});">
                                <img src="{{ asset('frontend/assets/img/thumb/frame-100x105.png')}}" alt="">
                            </div>
                        </div>

                        <div class="card-body">
                            <p>ดูดเสมหะในปาก หรือผ่านทางท่อช่วยหายใจ<br>Tracheostomy tube</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-infos mw-320" data-aos="fade-in">
                        <div class="card-photo">
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-600x630--4.jpg')}});">
                                <img src="{{ asset('frontend/assets/img/thumb/frame-100x105.png')}}" alt="">
                            </div>
                        </div>

                        <div class="card-body">
                            <p>ดูแลให้ Oxygen<br>Oxygen therapy</p>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--section-->

    <div class="section">
        <div class="container">
            <div class="hgroup text-center" data-aos="fade-in">
                <h2 class="mb-2 textrow">
                    <span data-aos="fade-up">Exclusive care team</span>
                </h2>
                <h3 class="text-gold">ดูแลอย่างมืออาชีพถึงบ้านคุณ</h3>
                <p class="fs-25">บริการ Homecare ของเราให้ความสำคัญกับการดูแลที่มีคุณภาพและความปลอดภัยสูงสุด<br>

                    ทีมจึงถูกพัฒนาขึ้นมาเพื่อตอบโจทย์ครอบครัวที่ต้องการการดูแลผู้สูงอายุหรือผู้ป่วยอย่างใกล้ชิด โดยไม่ต้องออกจากบ้าน</p>
            </div>

            <div class="boxed" style="--width:980px">
                <ul class="nav check-list normal">
                    <li class="mb-sm-3">
                        ทีมผู้ดูแลผ่านการอบรมตามมาตรฐานภาครัฐ<br>
                        <span class="fw-400">ผู้ดูแลทุกคนผ่านการอบรมและได้รับใบรับรองจากหลักสูตรที่กระทรวงสาธารณสุขกำหนด มีความรู้และทักษะในการดูแลผู้สูงอายุ ผู้ป่วยติดเตียง และผู้ที่ต้องการฟื้นฟูสุขภาพที่บ้าน</span>
                    </li>

                    <li class="mb-sm-3">
                        Care Manager ดูแลควบคุมอย่างใกล้ชิด<br>
                        <span class="fw-400">เพื่อให้การดูแลเป็นไปอย่างปลอดภัยและมีคุณภาพ ทีมผู้ดูแลจะได้รับการกำกับและประเมินโดย
                            Care Manager ที่ทำหน้าที่เป็น ซึ่งจะติดตามอาการ ประเมินแผนการดูแล และให้คำแนะนำแก่ญาติอย่างสม่ำเสมอ</span>
                    </li>

                    <li class="mb-sm-3">
                        ทำงานร่วมกับทีมสหวิชาชีพ<br>
                        <span class="fw-400">เรามีเครือข่ายทีมสหวิชาชีพ เช่น  ทั้งนักกายภาพบำบัด นักกิจกรรมบำบัด แพทย์
                            พยาบาล ร่วมดูแลให้คำปรึกษา</span>
                    </li>
                </ul>
            </div><!--boxed-->

        </div><!--container-->

        <img class="w-100" data-aos="fade-in" style="margin-top: -22vw;" src="{{ asset('frontend/assets/img/thumb/photo-1920x1592.jpg')}}" alt="">
    </div><!--section-->

    <div class="section py-md-5 py-2">
        <div class="container">
            <div class="card-package" data-aos="fade-in">
                <div class="card-header">
                    <h3>Hot package Home Care</h3>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                        <div class="col-sm-6 border-right">
                            <div class="package-block">
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
        </div><!--container-->
    </div><!--section-->

    <div class="section py-5">
        <div class="container">
            <div class="hgroup text-center mb-3 mb-sm-4 mb-xxl-5">
                <h2 class="textrow">
                    <span data-aos="fade-up">อัตราค่าบริการ</span>
                </h2>
            </div>

            <div class="boxed" style="--width:1150px">
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
                    <a class="btn px-5" href="{{ route('frontend.package_detail_page',[5,'ค่าบริการนักบริบาล']) }}"">
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
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x500.jpg')}});"></div>
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
                            <div class="photo" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-800x640.jpg')}});"></div>
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
                                        <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-100x100--1.png')}}" alt="">
                                        <p>ทีมชข่วยเหลือ<br>
                                            สหวิชาชีพมีใบรับรอง</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="info-row fs-17">
                                        <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-100x100--2.png')}}" alt="">
                                        <p>พร้อมด้วยอุปกรณ์<br>
                                            ช่วยเหลือ</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="info-row fs-17">
                                        <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-100x100--3.png')}}" alt="">
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
                        <img class="w-160" src="{{ asset('frontend/assets/img/icons/logo-home-care-2.svg')}}" alt="">
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

    <div class="section section-branch-banner h-md-auto" data-aos="fade-in">
        <div class="background d-none d-md-block" style="background-image: url({{ asset('frontend/assets/img/thumb/photo-1920x936--3.jpg')}});"></div>
        <img class="w-100 d-block d-md-none" src="{{ asset('frontend/assets/img/thumb/photo-1920x936--3.jpg')}}" alt="">

        <div class="container">
            <div class="caption text-start" data-aos="fade-in">
                <h2>ขั้นตอนการรับบริการ</h2>

                <ol class="list-numbered list-brown fs-25">
                    <li>แจ้งวันที่ต้องการรับบริการ</li>
                    <li>ชำระมัดจำก่อนเริ่มงาน</li>
                    <li>ส่งโปรไฟล์และนัดสัมภาษณ์</li>
                    <li>ชำระค่าบริการส่วนที่เหลือ</li>
                    <li>เริ่มงาน</li>
                </ol>

                <div class="buttons">
                    <a class="btn btn-dark  w-100 next me-auto" href="{{ route('frontend.service_process_page') }}">
                        ดูรายละเอียดขั้นตอนการรับบริการ
                        <span class="icons icon-next"></span>
                    </a>
                </div>
            </div>
        </div><!--container-->
    </div><!--section-->
@endsection
