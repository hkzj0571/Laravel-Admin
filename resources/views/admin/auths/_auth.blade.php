@extends('admin.layouts.app')

@section('main')
    <div class="container admin_auth">
        <h1>Laradmin</h1>
        <p>多少殷勤全白付，当年戏语误青丝。</p>
        @yield('form')
    </div>
    <footer class="footer">
        <p>Developed by <a href="https://github.com/Seaony" target="_blank">Seaony</a><i class="fa fa-heart"></i> <a href="javascript:void(0);">Zrl</a></p>
        <p>Github by <i class="fa fa-code"></i> <a href="">Laradmin</a></p>
    </footer>
@stop