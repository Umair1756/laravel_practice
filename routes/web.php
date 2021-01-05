<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// default laravel route
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');

// changing the "/" with "/testUri" 
// this above uri/url loads the exact same thing as "/" does
// Route::get('/testUri', function () {
//     return view('welcome');
// });
// can also return anything instead of view
// returning string
// Route::get('/', function () {
//     return "'Hello World'";
// });
// returning numbers calculation etc
// Route::get('/', function () {
//     return 2 * 10;
// });
// returning json
// Route::get('/', function () {
//     return ["valName" => "value"];
// });

// loading another custom view instead of changing existing view
// view loading
// Route::get('/customView', function () {
//     return view('customView');
// });

// get parameters from request url e.g http://127.0.0.1:8000/customView{?name=some_name}
Route::get('/customView/{wc}', function ($wc) {
    $name = request("name");
    $wildcards = [
        "wc1" => "This is wild card1",
        "wc2" => "This is wild card2",
    ];
    // return $name;
    // return view('customView', ['param1' => $name]);
    return view('customView', [
        'wc' => $wildcards[$wc] ?? "Not Found",
    ]);
});

// getting started mini project step by step
//basic understanding and initializing things
Route::get('/posts/{post}', 'PostsController@show');
