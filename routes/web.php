<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlogController;


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


Route::get('/Home', function () {
    return view('Home');
});


Route::get ('/About',  function(){
        return view('About');
});

Route:: get('/Services', function(){
    return "Services";
});

Route::get('/Portfolio', function () {
    return view('Portfolio');
});

Route::get('/Contact', function () {
    return view('Contact');
});


Route::get('/post/create', function () {
    DB::table('post')->insert([
    'title'=>'Back end.',
    'body'=>' In software engineering, the terms front end and back end refer to the separation of concerns between the presentation layer '
    ]);
 });

 Route::get('/post', function () {
    $post= Post::find(1);
    return $post->title;
 });

 Route::get('post', [BlogController::class, 'index']);
 Route::get('post/create', function(){
    return view('post.create');
});

Route::post('post/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);

