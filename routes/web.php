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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function(){

    DB::insert('insert into posts(title, content) values(?, ?)', ['php the best way to go.... lets learn']);
});

Route::get( '/admin', function () {
    return view( 'admin.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Elloquent
|--------------------------------------------------------------------------
|
*/

Route::get('/find', function() {

    $posts = Post::all();

    foreach($posts as $post) {
        return $post->title;

    }

});
