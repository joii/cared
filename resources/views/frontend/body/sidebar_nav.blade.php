    <div class="navbar-slider">
        <div class="hgroup">
            <a class="navbar-brand" href="/home">
                <img src="{{  asset('frontend/assets/img/logo.svg') }}" alt="Care•D Nursing Home">
            </a>
            <button class="btn btn-menu navbar-toggle" type="button">
                <span class="group">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
        <ul class="nav nav-slider">
            @foreach ($navigation as $mainMenuItem)
                @if($mainMenuItem['section_name'] != 'home')
                  @if (!empty($mainMenuItem['children']))
                <li>
                    <a href="#m_{{ $mainMenuItem['slug_en'] }}" data-bs-toggle="collapse">{{ $mainMenuItem['name_th'] }}</a>
                    <div id="m_{{ $mainMenuItem['slug_en'] }}" class="accordion-collapse collapse" data-bs-parent=".nav-slider">
                        <ul class="nav">
                            @foreach ($mainMenuItem['children'] as $subMenuItem)
                            <li><a href="{{ $subMenuItem['url'] }}">{{ $subMenuItem['name_th'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                   @else
                <li><a href="{{ $mainMenuItem['url'] }}">{{ $mainMenuItem['name_th'] }}</a></li>
                  @endif

                @endif
            @endforeach
        </ul>
    </div><!--navbar-slider-->
