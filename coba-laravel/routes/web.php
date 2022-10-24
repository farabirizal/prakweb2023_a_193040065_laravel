<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=> "About",
        "name"=> "Rizal Muhammad Farabi",
        "email"=> "farabirizal111@gmail.com",
        "image"=> "me.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal Muhammad Farabi",
            "body"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit architecto aliquam repellat assumenda alias minima at, tenetur excepturi enim, dolor voluptatem tempore quam deleniti. Consectetur aspernatur vitae officiis voluptate cum rerum, veniam quibusdam itaque dolore aperiam. Veritatis, atque! Obcaecati laborum odit tempora ex mollitia amet sit, distinctio, omnis corrupti sapiente, itaque unde quis! Dolore debitis culpa labore possimus distinctio perspiciatis vel error consectetur sapiente veritatis quibusdam commodi odit fugit vero illum voluptas, quam ex, in quo mollitia sunt est ut! Facilis tempora quaerat odio repellat asperiores? Libero, cum dolor animi nulla aspernatur culpa doloremque illo! Sapiente placeat inventore non molestiae?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizal Muhammad Farabi",
            "body"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit architecto aliquam repellat assumenda alias minima at, tenetur excepturi enim, dolor voluptatem tempore quam deleniti. Consectetur aspernatur vitae officiis voluptate cum rerum, veniam quibusdam itaque dolore aperiam. Veritatis, atque! Obcaecati laborum odit tempora ex mollitia amet sit, distinctio, omnis corrupti sapiente, itaque unde quis! Dolore debitis culpa labore possimus distinctio perspiciatis vel error consectetur sapiente veritatis quibusdam commodi odit fugit vero illum voluptas, quam ex, in quo mollitia sunt est ut! Facilis tempora quaerat odio repellat asperiores? Libero, cum dolor animi nulla aspernatur culpa doloremque illo! Sapiente placeat inventore non molestiae?"
        ],
    ];
    
    
    return view('posts', [
        "title"=>"Posts",
        "posts"=> $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal Muhammad Farabi",
            "body"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit architecto aliquam repellat assumenda alias minima at, tenetur excepturi enim, dolor voluptatem tempore quam deleniti. Consectetur aspernatur vitae officiis voluptate cum rerum, veniam quibusdam itaque dolore aperiam. Veritatis, atque! Obcaecati laborum odit tempora ex mollitia amet sit, distinctio, omnis corrupti sapiente, itaque unde quis! Dolore debitis culpa labore possimus distinctio perspiciatis vel error consectetur sapiente veritatis quibusdam commodi odit fugit vero illum voluptas, quam ex, in quo mollitia sunt est ut! Facilis tempora quaerat odio repellat asperiores? Libero, cum dolor animi nulla aspernatur culpa doloremque illo! Sapiente placeat inventore non molestiae?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizal Muhammad Farabi",
            "body"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit architecto aliquam repellat assumenda alias minima at, tenetur excepturi enim, dolor voluptatem tempore quam deleniti. Consectetur aspernatur vitae officiis voluptate cum rerum, veniam quibusdam itaque dolore aperiam. Veritatis, atque! Obcaecati laborum odit tempora ex mollitia amet sit, distinctio, omnis corrupti sapiente, itaque unde quis! Dolore debitis culpa labore possimus distinctio perspiciatis vel error consectetur sapiente veritatis quibusdam commodi odit fugit vero illum voluptas, quam ex, in quo mollitia sunt est ut! Facilis tempora quaerat odio repellat asperiores? Libero, cum dolor animi nulla aspernatur culpa doloremque illo! Sapiente placeat inventore non molestiae?"
        ],
    ];
$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}

    return view ('post',[
        "title"=> "Single Post",
        "post"=> $new_post
    ]);
});