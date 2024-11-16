<?php

use App\Models\Categori;
use App\Models\Post;
use App\Models\User;
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

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ["title" => count($user->posts) . " Article by " . $user->name, "posts" => $user->posts]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', ["title" => "Blog Post", "post" => $post]);
});

Route::get('/categori/{categori:slug}', function (Categori $categori) {
    return view('posts', ["title" => count($categori->posts) . " Article in Categori " . $categori->name, "posts" => $categori->posts]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
