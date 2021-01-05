@extends('layout')

@section('header')
    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                <h2>All Artciles</h2>
            </div>
        </div>
    </div>
@endsection()

@section('content')
    <div id="wrapper">
        <div id="page" class="content-setion">
            @foreach ($articles as $article)
            <div id="content">
                <div class="title">
                    <h2><a href="articles/{{ $article->id }}">{{ $article->title }}</a></h2>
                </div>
                <p><img src="/images/banner.jpg" alt="img-article" class="image image-full" /> </p>
                <p class="text-justify">{{ $article->excerpt }}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection()
