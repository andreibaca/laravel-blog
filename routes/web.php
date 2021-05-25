<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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

Route::get('/', function () {
    $posts = [];


//    $posts = array_map(function ($file){
//        $doc = YamlFrontMatter::parseFile($file);
//        return new Post($doc->title, $doc->snippet, $doc->date, $doc->body(), $doc->slug);
//
//    }, $files);

//    foreach ($files as $file) {
//        $doc = YamlFrontMatter::parseFile($file);
//        $posts[] = new Post($doc->title, $doc->snippet, $doc->date, $doc->body(), $doc->slug);
//    }
    $posts = Post::all();
//    ddd($posts);

    return view('posts',[
        'posts' => $posts,
    ]);
});

Route::get('/post/{post}',function($id){

    return view('post',[
        'post' => Post::findOrFail($id),
    ]);

});