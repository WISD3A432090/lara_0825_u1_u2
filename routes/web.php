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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
/*
    \App\Post::create([
        'title'=>'test title',
        'content'=>'test content',
    ]);

    $post=new\App\Post();
    $post->title='9999';
    $post->content='9999';
    $post->save();

    $posts=\App\Post::all();
    dd($posts);

    $post=\App\Post::find(5);
    dd($post);
*/

    $posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);

});