@extends('frontend.master')
@section('title', $article->title_th )
@section('meta_description', $article->description_th )


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
                    <div class="news-detail-boxed">
                        <div class="article text-center pb-3">
                            <div class="hgroup mb-lg-0">
                                <h2>{!! $article->title_th !!}</h2>
                                <p>{!! $article->description_th  !!}</p>
                            </div>
                        </div><!--article-->

                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100 mb-4" src="{{ asset($article->image_path) }}" alt="{!! $article->title_th !!}">
                            </div>
                            <div class="col-lg-6 ">
                                 <div style="padding: 0 30px;">
                                    {!! $article->detail_th  !!}
                                 </div>
                            </div>
                        </div>

                    </div><!--news-details-->
                </div><!--content-->
            </div><!--container-group-->

        </div><!--container-->
    </div>

@endsection
