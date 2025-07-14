<header class="header">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img src="{{ asset('frontend/assets/img/logo.svg') }}" alt="Care•D Nursing Home">
        </a>
        <ul class="nav nav-menu">
             @foreach ($navigation as $mainMenuItem)
             @if($mainMenuItem['section_name'] != 'home' && $mainMenuItem['section_name'] != NULL )
              <li  @if (!empty($mainMenuItem['children'])) class="dropdown" @endif>

                     @if (!empty($mainMenuItem['children']))
                      <a data-bs-toggle="dropdown" data-bs-display="static" href="#">{{ $mainMenuItem['name_th'] }}</a>
                       <div class="dropdown-menu">
                            <ul class="nav">
                                 @foreach ($mainMenuItem['children'] as $subMenuItem)
                                 <li><a href="{{ $subMenuItem['url'] }}"> {{ $subMenuItem['name_th'] }}</a></li>
                                 @endforeach
                            </ul>
                        </div>
                      @else
                        <a href="{{ $mainMenuItem['url'] }}">{{ $mainMenuItem['name_th'] }}</a>
                      @endif
              </li>
               @endif
        @endforeach

        </ul>

        <ul class="nav nav-general">
            <li><a class="btn btn-black partner" href="/About_Us#s_partner">Become a Partner</a></li>
            <li>
                <div class="btn">
                    <a href="https://lin.ee/P8jy2L8" target="_blank">LINE</a>
                    <span class="vr"></span>
                    <a href="https://www.facebook.com/carednursinghome/" target="_blank">facebook</a>
                    <span class="vr"></span>
                    <a class="icons icon-chat" href="#"></a>
                </div>
            </li>
            <li>
                <button class="btn btn-menu navbar-toggle" type="button">
                    <span class="group">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </li>
        </ul>
    </div>
</header>
