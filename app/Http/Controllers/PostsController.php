<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function show($wc)
    {
        // returning / loading view
        return view('post', [
            'wc' => Post::where('slug', $wc)->firstOrFail(),
        ]);
    }
}
