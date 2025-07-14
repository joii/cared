@extends('frontend.master')
@section('title', 'CARE•D : Nursing Home : บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร')
@section('meta_description', 'ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ')


@section('content')
<div class="section section-banner">
        @foreach ($banners as $banner)
        <div class="background" style="background-image: url({{ asset($banner->image_path) }});"></div>
        @endforeach
</div>
   <div class="section section-news">
        <div class="container">
            <div class="hgroup text-center">
                <h3 class="title-main">
                    <span class="highlight fw-600" data-aos>CARE•D</span> News & Articles
                </h3>
            </div>
            <div class="container-group">
                <div class="sidebar" data-aos="fade-in">
                    <h3 class="title">News & Articles</h3>

                    <ul class="nav">
                        @foreach ($article_categories as $item)
                            <li class="{{ $item->id == $category_id?'active':'' }}"><a href="{{ route('frontend.articles_list_page',[$item->id,$item->slug_th]) }}">{{ $item->name_th }}</a></li>
                        @endforeach


                    </ul>
                </div><!--sidebar-->
                <div class="content">
                    <div class="row card-news-list g-4">
                        @foreach ($articles as $item)
                             <div class="col-md-12 col-sm-6">
                            <div class="card-news" data-aos="fade-in">
                                <a href="{{ route('frontend.articles_detail_page',[$item->id,$item->slug_th]) }}" class="card-link"></a>
                                <div class="card-photo">
                                    <div class="photo" style="background-image: url({{ asset($item->image_path) }});"></div>
                                </div>
                                <div class="card-body">
                                    <h3>{!! $item->title_th !!}</h3>
                                    <p>{!! $item->description_th !!}</p>
                                </div>
                            </div><!--card-news-->
                        </div>
                        @endforeach

                    </div><!--row-->
                </div><!--content-->
            </div><!--container-group-->

        </div><!--container-->
    </div>

@endsection
