@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')


@section('content')
 <div class="section section-banner">
    @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
     @endforeach
</div>
    <div class="section section-contact">
        <div class="container">
            <div class="hgroup text-center">
                <h3 class="textrow"><span data-aos="fade-up">Contact Us</span></h3>
            </div>

            <div class="card-contact-list">
                <div class="card-contact" data-aos="fade-in">
                    <div class="card-icon">
                        <img class="icons svg-js" data-aos="fade-up" src="{{ asset('frontend/assets/img/icons/icon-home.svg') }}" alt="Care-D Nursing Home">
                    </div>
                    <h3>Address:</h3>
                    <p class="fs-20">
                        <span class="text-black">อาคาร Well Aesthetic & Wellness Center</span><br>
                        เลขที่ 8/2 ห้องเลขที่ A101-A104<br>
                        ถ.รัชดาภิเษก แขวงจันทรเกษม เขตจตุจักร<br>
                        กรุงเทพมหานคร 10900
                    </p>
                </div>

                <div class="card-contact" data-aos="fade-in">
                    <div class="card-icon">
                        <img class="icons svg-js" data-aos="fade-up" src="{{ asset('frontend/assets/img/icons/icon-phone.svg')}}" alt="Care-D Nursing Home">
                    </div>
                    <h3>Call:</h3>
                    <p class="fs-20"><a href="tel:081-624-1694">081-624-1694</a></p>
                </div>

                <div class="card-contact" data-aos="fade-in">
                    <div class="card-icon">
                        <img class="icons svg-js" data-aos="fade-up" src="{{ asset('frontend/assets/img/icons/icon-send.svg')}}" alt="Care-D Nursing Home">
                    </div>
                    <h3>email:</h3>
                    <p class="fs-20"><a href="mailto:care-d@agyhero.com">care-d@agyhero.com</a></p>
                </div>
            </div>


        </div><!--container-->
    </div>

    <div class="section p-0">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.543654174379!2d100.57265847518272!3d13.806361286591196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29dfd21f5caaf%3A0x532522c4d3203cd2!2sWell%20Aesthetic%20%26%20Wellness%20Center!5e0!3m2!1sen!2sth!4v1750146012048!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

@endsection
