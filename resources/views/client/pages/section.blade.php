@extends('client.layouts.main')

    @section('index')
        @include('client.pages.blocks.index')
    @endsection

    @section('blog')
        @include('client.pages.blocks.blog')
    @endsection

    @section('portfolio')
        @include('client.pages.blocks.portfolio')
    @endsection

    @section('about')
        @include('client.pages.blocks.about')
    @endsection

    @section('contact')
        @include('client.pages.blocks.contact')
    @endsection

    @section('main-script')
        @include('client.parts.scripts')
    @endsection