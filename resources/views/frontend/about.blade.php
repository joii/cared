@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')

@section('content')
 <div class="section section-banner">
    @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
     @endforeach
</div>

    <div class="section section-vistion">
        <div id="s_vision_mission" class="section-target"></div>
        <div class="container">
            <div class="article vistion">
                <div class="hgroup" data-aos="fade-in">
                    <h3 class="textrow"><span data-aos="fade-up">Vision & Mission</span></h3>
                    <h4 class="py-md-3 py-1"><span class="fw-600 highlight">CARE•D</span> ก่อตั้งขึ้นบนพื้นฐานของความเชื่อที่ว่า</h4>
                    <h2 class="fs-54">
                        “การดูแลที่ดีที่สุด <br class="d-block d-sm-none">
                        <span class="highlight">เริ่มต้นจากหัวใจที่เข้าใจ</span>”
                    </h2>
                </div>

                <p data-aos="fade-in">ด้วยประสบการณ์การดูแลกว่า 20 ปีที่ผ่านมา เรารวบรวมทีมผู้เชี่ยวชาญจากหลากหลายสาขา ทั้งแพทย์ พยาบาล นักกายภาพบำบัด นักกิจกรรมบำบัด และ Caregiver ผู้มีใจรักการดูแลเพื่อร่วมกันสร้างมาตรฐานใหม่ของการดูแลผู้สูงอายุในประเทศไทย
                    ทุกคนในทีมของเราได้รับการฝึกอบรมอย่างต่อเนื่อง<br class="d-none d-sm-block"> ทั้งในด้านทักษะการดูแลและความเข้าใจในจิตใจของผู้สูงอายุ เพราะเราเชื่อว่า</p>

                <h3 class="pt-md-4 pt-2" data-aos="fade-in">“เมื่อผู้ดูแลมีความสุข <br class="d-block d-sm-none"><span class="highlight">ผู้รับการดูแลจะสัมผัสได้ถึงความใส่ใจที่แท้จริง”</span></h3>

                <div class="banner" data-aos="fade-in">
                    <img class="w-100" src="{{ asset('frontend/assets/img/thumb/photo-1500x949.png')}}" alt="">
                </div>
            </div><!--article-->

        </div><!--container-->
    </div><!--section-->

    <div class="section section-whyus">
        <div id="s_whyus" class="section-target"></div>
        <div class="container">
            <div class="article-boxed boxed whyus" style="--width:1040px">
                <div class="article-header"></div>
                <div class="article-body">
                    <div class="hgroup text-center" data-aos="fade-up">
                        <h2 class="fs-58">ทำไมต้อง <span class="highlight fw-600">CARE•D</span></h2>
                        <h4>เพราะเราเชื่อว่าการดูแลที่ดี เริ่มต้นจากใจที่เข้าใจ</h4>
                    </div>
                    <div class="boxed" style="--width:700px" data-aos="fade-up" data-aos-delay="200">
                        <ul class="nav check-list">
                            <li>
                                <h4>ประสบการณ์มากกว่า 20 ปี</h4>
                                <p>ดูแลผู้สูงอายุกว่า 10,000 ครอบครัวทั่วประเทศ</p>
                            </li>
                            <li>
                                <h4>บริการดูแลครบวงจร</h4>
                                <p>ทั้งศูนย์ดูแลผู้สูงอายุ ศูนย์ฟื้นฟูโรคหลอดเลือดสมอง การดูแลที่บ้าน และร้านอุปกรณ์ทางการแพทย์</p>
                            </li>
                            <li>
                                <h4>ทีมผู้ดูแลมืออาชีพ</h4>
                                <p>ประกอบด้วยแพทย์ พยาบาล นักกายภาพบำบัด และผู้ดูแลที่ผ่านการอบรมอย่างต่อเนื่อง</p>
                            </li>
                            <li>
                                <h4>แนวทางการดูแลแบบองค์รวม</h4>
                                <p>ใส่ใจทั้งด้านร่างกาย จิตใจ และคุณภาพชีวิตทางสังคม</p>
                            </li>
                            <li>
                                <h4>ใส่ใจผู้ดูแลเป็นหัวใจสำคัญ</h4>
                                <p>เราดูแลคนดูแล เพราะเชื่อว่าผู้ดูแลที่มีความสุขจะส่งต่อพลังบวกให้กับผู้รับการดูแล</p>
                            </li>
                            <li>
                                <h4>มีเครือข่ายบริการมากกว่า 10 สาขา</h4>
                                <p>เข้าถึงง่าย ครอบคลุมหลายพื้นที่</p>
                            </li>
                            <li>
                                <h4>นำนวัตกรรมและเทคโนโลยีมาใช้ในการดูแล</h4>
                                <p>เพื่อเพิ่มประสิทธิภาพและความสะดวกในการบริการ</p>
                            </li>
                            <li>
                                <h4>ทางเลือกที่หลากหลาย ทั้งประหยัดงบและ Full Option</h4>
                                <p>ไม่ว่าคุณจะมองหาการดูแลที่มีคุณภาพในราคาที่เข้าถึงได้ หรือบริการแบบครบวงจรระดับพรีเมียม <br>เรามีแพ็กเกจที่เหมาะกับทุกความต้องการ และทุกงบประมาณ</p>
                            </li>
                        </ul>

                        <div class="p-sm-4 p-2"></div>
                    </div><!--boxed-->
                </div><!--article-body-->
            </div><!--article-boxed-->

            <div class="hgroup text-center pt-5 mt-md-5 mt-4 mb-0" data-aos="fade-up">
                <h2 class="fs-54 px-4"><span class="fw-600 highlight">CARE•D</span> ไม่ใช่แค่สถานดูแลผู้สูงอายุ<br class="d-none d-sm-block">
                    แต่คือเครือข่ายแห่งการดูแลที่คุณวางใจได้</h2>
            </div>
        </div><!--container-->
    </div><!--section-->

     <div class="section section-award">
         <div id="s_award" class="section-target"></div>
        <div class="container">
            <div class="hgroup d-block d-sm-none text-center">
                <h2 data-aos="fade-up">รางวัลของเรา</h2>
            </div>
            <div class="boxed-award boxed" data-aos="fade-in">
                <div class="card-header">
                    <img class="w-100" src="{{ asset('frontend/assets/img/thumb/photo-1200x510.jpg')}}" alt="">
                    <h2 class="card-title textrow d-none d-sm-block">
                        <span data-aos="fade-up" data-aos-delay="100">รางวัลของเรา</span>
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

    <div class="section section-partner" data-aos="fade-in">
        <div id="s_partner" class="section-target"></div>
        <div class="container">
            <div class="article">
                <div class="hgroup text-center">
                    <h3 class="highlight mb-sm-3 mb-2 textrow">
                        <span data-aos="fade-up">Become a Partner</span>
                    </h3>
                    <h3>ร่วมเป็นพันธมิตรกับ <span class="fw-600">CARE•D</span> <br>
                        เปิดโอกาสให้คุณเติบโตไปกับธุรกิจดูแลผู้สูงอายุหากคุณคือหนึ่งในกลุ่มเหล่านี้</h3>
                </div>

                <ol class="list-numbered list-brown">
                    <li>เจ้าของอาคารหรืออสังหาริมทรัพย์ที่ยังไม่ได้ใช้ประโยชน์</li>
                    <li>ผู้บริหาร Nursing Home ที่ต้องการลดภาระและเพิ่มประสิทธิภาพ</li>
                    <li>นักลงทุนที่สนใจธุรกิจดูแลผู้สูงอายุ แต่ยังไม่มีประสบการณ์หรือทีมงาน</li>
                </ol>

                <div class="hgroup text-center">
                    <h3>CARE•D พร้อมเป็นพันธมิตรในการต่อยอดความมั่นคงและยั่งยืนด้วย 3 โมเดลธุรกิจให้เลือก</h3>
                </div>

                <ol class="list-numbered list-brown">
                    <li>
                        <span class="highlight d-block d-sm-inline">CareEstate</span>
                        <span class="d-none d-sm-inline">–</span>
                         ใช้ประโยชน์จากอสังหาริมทรัพย์ให้เกิดรายได้
                    </li>
                    <li>
                        <span class="highlight d-block d-sm-inline">CareInvest</span>
                        <span class="d-none d-sm-inline">–</span>
                        ร่วมลงทุนกับระบบที่พร้อมดำเนินการ
                    </li>
                    <li>
                        <span class="highlight d-block d-sm-inline">CareDrive</span>
                        <span class="d-none d-sm-inline">–</span>
                        ขยายบริการด้วยระบบการบริหารจาก CARE•D
                    </li>
                </ol>

                <div class="hgroup" data-aos="fade-in">
                    <h2 class="text-center">
                        ร่วมสร้างอนาคตที่มั่นคง<br>
                        พร้อมดูแลสังคมผู้สูงวัยไปกับเรา
                    </h2>
                </div>
            </div><!--article-->

            <div class="buttons">
                <a href="https://agyhero.com/" target="_blank" class="btn btn-secondary">
                    Become a Partner
                </a>
            </div>
        </div>
    </div>

    <div class="section section-academy" data-aos="fade-in">
        <div id="s_academy" class="section-target"></div>
        <div class="container">
            <div class="article text-center">
                <img class="logo" src="{{ asset('frontend/assets/img/thumb/logo-nursing-home-academy.svg')}}" alt="">

                <h3 class="text-gradient mb-3">ศูนย์ฝึกอบรมด้านธุรกิจ<br class="d-block d-sm-none">และบริการผู้สูงอายุโดยเฉพาะ</h3>

                <p>Nursing Home Academy คือแหล่งเรียนรู้ครบวงจร สำหรับผู้ที่ต้องการเติบโตในธุรกิจดูแลผู้สูงอายุ ครอบคลุมทั้งด้านการบริหารจัดการ และการให้บริการอย่างมืออาชีพ ผ่านหลักสูตรที่ออกแบบมาอย่างตรงจุด</p>
            </div>

            <ul class="nav check-list text-black">
                <li>
                    <h4>หลักสูตรผู้ประกอบการและการจัดทำแผนธุรกิจ</h4>
                    <p>เรียนรู้การเริ่มต้นธุรกิจ Nursing Home อย่างเป็นระบบ พร้อมวางแผนธุรกิจให้ยั่งยืน</p>
                </li>

                <li>
                    <h4>หลักสูตรผู้ดำเนินการ (130 ชั่วโมง)</h4>
                    <p>สำหรับผู้ที่ต้องการขึ้นทะเบียนเป็น “ผู้ดำเนินการสถานดูแล” ตามเกณฑ์ของภาครัฐ</p>
                </li>

                <li>
                    <h4>หลักสูตรผู้ดูแล (Caregiver) 420 ชั่วโมง</h4>
                    <p>พัฒนาความรู้และทักษะที่จำเป็นในการดูแลผู้สูงอายุแบบมืออาชีพตามเกณฑ์ภาครัฐ</p>
                </li>

                <li>
                    <h4>หลักสูตรผู้จัดการศูนย์ Nursing Home</h4>
                    <p>เสริมความสามารถในการบริหารจัดการสถานดูแลอย่างมีประสิทธิภาพ</p>
                </li>

                <li>
                    <h4>หลักสูตรระยะสั้นพัฒนาทักษะผู้ดูแลมืออาชีพ</h4>
                    <p>อัปสกิลเฉพาะทางสำหรับผู้ที่มีประสบการณ์ เพื่อยกระดับคุณภาพการบริการ</p>
                </li>
            </ul>

            <h2 class="text-center" data-aos="fade-up">เตรียมพร้อมสู่ความสำเร็จในธุรกิจดูแลผู้สูงอายุ<br> เรียนรู้จากผู้เชี่ยวชาญตัวจริง</h2>

            <div class="buttons mt-sm-4" data-aos="fade-up" data-aos-delay="100">
                <a class="btn btn-purple" href="https://agyhero.com/" target="_blank">
                    <span class="px-3">สมัครโครงการ</span>
                </a>
            </div>
        </div><!--container-->

        <img class="w-100 bg" data-aos="fade-up" src="{{ asset('frontend/assets/img/thumb/photo-1920x1660.jpg')}}" alt="">
    </div><!--section-->
@endsection
