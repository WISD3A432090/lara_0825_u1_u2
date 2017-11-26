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

    $posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);

    $post=\App\Post::find(5);
    $post->update([
        'title'=>'updatedtitle',
        'content'=>'updatedcontent',
    ]);


    $post=\App\Post::find(6);
    $post->title='savedtitle';
    $post->content='savedcontent';
    $post->save();


    $post=\App\Post::find(4);
    $post->delete();

    \App\Post::destroy(5);


    \App\Post::destroy(7,8,9);
    */

    $allPosts=\App\Post::all();
    dd($allPosts);
    $featuredPosts=\App\Post::where('is_feature',1)->get();
dd($featuredPosts);

});