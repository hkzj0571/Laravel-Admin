@inject('routers','App\Services\RoutersService')

<div id="sidebar" class="nav-collapse">
    <ul class="sidebar-menu">
        @foreach($routers->routers as $router)
            <li class="sub-menu">
                <a href="{{  $router->slug ? route($router->slug) : 'javascript:void(0);' }}">
                    <i class="fa {{ $router->icon }}"></i>
                    <span>{{ $router->name }}</span>
                    @if($router->routers->count())
                        <span class="arrow"></span>
                    @endif
                </a>
                @if($router->routers->count())
                    <ul class="sub">
                        @foreach($router->routers as $r)
                            <li>
                                <a href="{{  $r->slug ? route($r->slug) : 'javascript:void(0);' }}">
                                    <i class="fa {{ $r->icon }}"></i>
                                    {{ $r->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>