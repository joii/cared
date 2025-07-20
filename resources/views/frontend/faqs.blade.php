@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')


@section('content')
 <div class="section section-banner">
    @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
     @endforeach
</div>

<div class="section section-about">
    <div class="container">
       <div class="row">
          <div class="hgroup text-center">
                <h3 class="textrow"><span data-aos="fade-up">คำถามที่พบบ่อย</span></h3>
            </div>
        @foreach ($faqs as $item)
        <div class="col-md-4 col-12 mb-4 pt-3">
            <div class="card-review">
                <div class="card-header">
                    <div>
                        <img src="{{ asset('frontend/assets/img/thumb/avatar-8.png') }}" style="width:45px; float:left; margin-right:10px;" >
                        <strong>{!! $item->question_th !!}</strong>
                    </div>
                </div>
                <div class="card-body">

                    <img src="{{ asset('frontend/assets/img/thumb/avatar-9.png') }}"  style="width:45px; float:left; margin-right:10px;">

                    <div class="card-limit" style="margin-left: 45px;">
                    {!! $item->answer_th !!}
                    </div>

                </div>
            </div>
        </div>

        @endforeach

       </div>
    </div>
</div>



@endsection
