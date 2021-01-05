@extends('layout')

@section('header')
    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                <h2>Artcile Information</h2>
            </div>
        </div>
    </div>
@endsection()

@section('content')
    <div id="wrapper">
        <div id="page" class="content-setion">
            <div id="content">
                <div class="title">
                    <h2>{{ $articles->title }}</h2>
                </div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <p class="text-justify">{{ $articles->body }}</p>
            </div>
        </div>
    </div>
@endsection()
