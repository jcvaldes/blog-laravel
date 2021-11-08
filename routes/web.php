<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $posts = App\Models\Post::latest('published_at')->get();

    // $posts = App\Models\Post::all();

    // return view('welcome')->with('posts', $posts);
    return view('welcome', compact('posts'));

});

Route::get('posts', function () {
    return \App\Models\Post::all();
});
