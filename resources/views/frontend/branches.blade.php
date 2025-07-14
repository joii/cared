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
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Care•D Nursing Home</a></li>
                <li class="breadcrumb-item active">สาขา</li>
              </ol>

            <h3 class="title-main text-center" data-aos="fade-in">
                <span class="highlight">11</span> สาขารองรับ <span class="highlight">500</span> เตียง<br>
                เปิดให้บริการใกล้บ้านคุณ
            </h3>

            <div class="boxed" style="--width:1310px">
                <div class="row card-branch-list">

                    @foreach ($branches as $branch)
                    <div class="col-3">
                        <div class="card-branch" data-aos="fade-in">
                            <a href="{{ route('frontend.branch_detail_page',[$branch->id,$branch->slug_th]) }}" class="card-link"></a>
                            <div class="card-photo">
                                <div class="photo" style="background-image: url({{ asset($branch->thumbnail_path) }});">
                                    <img src="{{ asset('frontend/assets/img/thumb/frame-100x80.png') }}" alt="{{ $branch->name_th }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <img class="logo" src="{{ asset('frontend/assets/img/thumb/logo.svg') }}" alt="{{ $branch->name_th }}">
                                <h3>{{ $branch->address_th }}<br>{{ $branch->subtitle_th==''?'':'('.$branch->subtitle_th.')' }}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div><!--row-->
            </div><!--boxed-->
        </div><!--container-->
    </div><!--section-->

@endsection
