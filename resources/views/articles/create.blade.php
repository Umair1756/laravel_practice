@extends('layout')

@section('header')
    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                <h2>Add Artcile</h2>
            </div>
        </div>
    </div>
@endsection()

@section('content')
    <div id="wrapper">
        <div class="container">
            <div class="py-5">
                <form method="POST" class="form" action="/articles">
                    @csrf
                    <div class="form-group">
                        <label class="h5" for="Title">Title</label>
                        <input value="{{ old('title') }}"
                            class="form-control shadow-inset-2-0 @error('title') border-danger shadow-none @enderror"
                            type="text" name="title" id="title">
                        @error('title')
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="h5" for="Excerpt">Excerpt</label>
                        <input value="{{ old('excerpt') }}"
                            class="form-control shadow-inset-2-0 @error('excerpt') border-danger shadow-none @enderror"
                            type="text" name="excerpt" id="excerpt">
                        @error('excerpt')
                            <span class="text-danger">{{ $errors->first('excerpt') }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="h5" for="Body">Body</label>
                        <textarea class="form-control shadow-inset-2-0 @error('body') border-danger shadow-none @enderror"
                            name="body" id="body" cols="30" rows="5">{{ old('body') }}</textarea>
                        @error('body')
                            <span class="text-danger">{{ $errors->first('body') }}</span>
                        @enderror
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
