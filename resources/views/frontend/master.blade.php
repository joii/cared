<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale = 1.0,maximum-scale=1.0, user-scalable=no" />
<meta name="mobile-web-app-capable" content="yes">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<title>@yield('title')</title>
<meta name="description" content="@yield('meta_description')" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร" />
<meta property="og:description" content="ศูนย์ดูแลผู้สูงอายุและผู้ป่วยระยะพักฟื้น มีแพทย์ตรวจเยี่ยมประจำศูนย์ บริการด้วยความจริงใจ มีหนังสือรับรองถูกต้อง เจ้าหน้าทุกคนพร้อมให้บริการ" />
<meta property="og:url" content="https://www.care-d.co/" />
<meta property="og:site_name" content="บริการแก่ผู้สูงอายุและผู้มีภาวะพึ่งพิง ผ่านบริการที่ครบวงจร" />
<meta property="article:modified_time" content="2025-07-01T03:07:26+00:00" />
<meta property="og:image" content="{{ asset('frontend/assets/img/thumb/photo-800x1020.jpg') }}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="google-site-verification" content="om8Cm6YO2uWBy8RTfogs-6GKXz_aChXbPdh5u1GZ7c4" />

<link href="{{ asset('frontend/assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/aos.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/swiper.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/global.css') }}" rel="stylesheet">

</head>
<body>

<div class="page page-home p-0">
    <div class="preload">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    @include('frontend.body.header',['navigation' => $navigation])
    <!-- ./Header -->
    <!-- Sidebar -->
     @include('frontend.body.sidebar_nav')
     <!--./Sidebar -->

     @yield('content')



    <!-- Footer -->
    @include('frontend.body.footer',['footer' => $footer])
    <!-- ./Footer -->
</div><!--page-->
   <!-- Floating Button -->
    @include('frontend.body.floating_button')
    <!--./Floating Button -->

<script src="{{ asset('frontend/assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('frontend/assets/js/swiper.js')}}"></script>
<script src="{{ asset('frontend/assets/js/aos.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.validate.js')}}"></script>
<script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
<script src="{{ asset('frontend/assets/js/scripts.js')}}"></script>
@if (request()->routeIs('frontend.nursing_home_page'))
<script src="{{ asset('frontend/assets/js/nursing_home.js')}}"></script>
@endif

@if (request()->routeIs('frontend.branch_detail_page'))
<script src="{{ asset('frontend/assets/js/branch_detail.js')}}"></script>
@endif

@if (request()->routeIs('frontend.stroke_center_page'))
<script src="{{ asset('frontend/assets/js/stroke_center.js')}}"></script>
@endif

@if (request()->routeIs('frontend.rate_card_page'))
<script src="{{ asset('frontend/assets/js/rate_card.js')}}"></script>
@endif
</body>
</html>
