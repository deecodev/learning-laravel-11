<?php

use App\models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About Page", "name" => "Joko Santoso"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog Page", "posts" => Post::all()]);
});

Route::get('/post/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view('post', ["title" => "Blog Post", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});