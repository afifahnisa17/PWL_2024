<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('World', function(){
    return 'World';
});

Route::get('/', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'NIM: 2341720250, Nama: Afifah Khoirunnisa';
});

Route::get('/user/{name}', function($name){
    return 'Nama saya '. $name;
});

Route::get('/user/{afifah}', function($afifah){
    return 'Nama saya '. $afifah;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Post ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function($postId){
    return 'Halaman Artikel dengan ID: '. $postId;
});

Route::get('user/{name?}', function ($name=null){
    return 'Nama saya '. $name;
});

Route::get('user/{name?}', function ($name='Afifah Khoirunnisa'){
    return 'Nama saya '. $name;
});

Route::get('/user/{name?', function($name='John'){
    return 'Nama saya'. $name;
});

Route::get('/user/profile', function(){
    //
})->name('profile');