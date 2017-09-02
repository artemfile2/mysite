@extends('client.layouts.base')

@section('pages')
    @yield('index')
    @yield('blog')
    @yield('portfolio')
    @yield('about')
    @yield('contact')
@endsection

@section('script')
    @yield('main-script')
@endsection
