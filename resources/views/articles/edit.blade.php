@extends('layout')

@section('header')
    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                <h2>Edit Artcile</h2>
            </div>
        </div>
    </div>
@endsection()

@section('content')
    <div id="wrapper">
        <div class="container">
            <div class="py-5">
                <form method="POST" class="form" action="/articles/{{ $article->id }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="h5" for="Title">Title</label>
                        <input class="form-control shadow-inset-2-0" type="text" name="title" id="title"
                            value="{{ $article->title }}">
                    </div>
                    <div class="form-group">
                        <label class="h5" for="Excerpt">Excerpt</label>
                        <input class="form-control shadow-inset-2-0" type="text" name="excerpt" id="excerpt"
                            value="{{ $article->excerpt }}">
                    </div>
                    <div class="form-group">
                        <label class="h5" for="Body">Body</label>
                        <textarea class="form-control shadow-inset-2-0" name="body" id="body" cols="30"
                            rows="5">{{ $article->body }}</textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
