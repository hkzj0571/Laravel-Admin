@extends('admin.layouts.app')

@section('main')
    <section>
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="点击显示或隐藏侧边栏" data-placement="right" class="tooltips reorder">
                    <i class="fa fa-reorder"></i>
                </div>
            </div>
            <a href="javascript:void(0);" class="logo">Lar<span>admin</span></a>
            <div class="nav notify-row">
                <ul class="nav top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                            <i class="fa fa-bell"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                    </li>
                    @can('admin.clear')
                        <li class="dropdown">
                            <a data-original-title="Clear" data-placement="bottom" class="tooltips clear_cache"
                               href="javascript:void(0);">
                                <i class="fa fa-bolt"></i>
                            </a>
                        </li>
                    @endcan
                </ul>
            </div>
            <div class="top-nav ">
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                            <img alt="" src="https://ws3.sinaimg.cn/large/006tKfTcgy1fkl9q2924jj30rs0rs75y.jpg">
                            <span class="username">{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);"><i class=" fa fa-suitcase"></i> Profile</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-bell"></i> Notification</a></li>
                            <li><a href="{{ route('admin.auth.logout') }}"><i class="fa fa-key"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <aside>
            @include('admin.layouts.sidebars')
        </aside>
        <section id="main-content">
            <section class="wrapper">
                @yield('wrapper')
            </section>
        </section>
    </section>
    @can('admin.clear')
        <script>
            $('.clear_cache').on('click', function () {
                $.ajax({
                    type: 'get',
                    url: '{{ route('admin.clear') }}',
                    success: respond => {
                        return respond.status
                            ? succeed('Cache cleared！', event => {
                                to(window.location.href)
                            })
                            : errored(respond.message)
                    }
                })
            })
        </script>
    @endcan
@stop