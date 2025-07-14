    <footer class="footer" data-aos="fade-in">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('frontend/assets/img/logo-3.svg') }}" alt="Care•D Nursing Home">
            </div>
            <div class="card-contact center pt-2" data-aos="fade-in">
                <div class="card-icon">
                    <img class="icons svg-js" data-aos="fade-up" src="{{ asset('frontend/assets/img/icons/icon-phone.svg')}}" alt="Care•D Nursing Home">
                </div>
                <h3>Call:</h3>
            </div>
            <div class="row g-4 card-call-list">
               @foreach ($footer as $key=>$item)
                @if($key<=3)
                <div class="col-xl-3 col-sm-6">
                    <div class="card-contact" data-aos="fade-in">
                        <h3>{!! $item->name_th !!}:</h3>
                        <p><a href="tel:{{$item->description_th }}">{!! $item->description_th !!}</a></p>
                    </div>
                </div>
                @endif
               @endforeach



            </div><!--row-->

            <div class="card-contact center" data-aos="fade-in">
                <div class="card-icon">
                    <img class="icons svg-js w-28" data-aos="fade-up" src="{{ asset('frontend/assets/img/icons/icon-send.svg')}}" alt="Care•D Nursing Home">
                </div>
                <h3>{{ $footer[4]->name_th }}:</h3>
                <p class="email"><a href="mailto:{{ $footer[4]->description_th }}">{{ $footer[4]->description_th }}</a></p>
            </div>

            <div class="p-4"></div>

            <div class="card-contact center line-contact" data-aos="fade-in">
                <div class="card-icon">
                    <img class="icons svg-js" data-aos="fade-up" src="{{ asset('frontend/assets/img/icons/icon-chat.svg')}}" alt="Care•D Nursing Home">
                </div>

                <h3>{{ $footer[5]->name_th }}:{{ $footer[5]->description_th }}</h3>
                <img class="qrcode" src="{{ asset('frontend/assets/img/thumb/qrcode.png')}}" alt="Care•D Nursing Home">
                <p class="fs-12"><a class="link" href="{{ $footer[5]->external_url }}">{{ $footer[5]->external_url }}</a></p>
            </div>

            <p class="text-copyright">copyright © {{ date('Y') }} care•d</p>
        </div>
    </footer>
