<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/articles/{id}', function($postId){
//     return 'Halaman Artikel dengan ID: '. $postId;
// });

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

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function(){
        return 'first-second';
    });

    Route::get('/user/profile', function(){
        return'nama saya afi';
    });
});

Route::domain('{account}.example.com')->group(function(){
    Route::get('user/{id}', function ($account, $id){
        return 'Akun: $account, $id';
    });
});

// Route::middleware('auth')->group(function(){
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [UserController::class, 'index']);
//     Route::get('/event', [UserController::class, 'index']);
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::redirect('/here', '/there');
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/', [PageController::class,'hello']);
// Route::get('/index', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);



Route::get('/index', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class) ->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', function(){
    return view('hello', ['name' => 'Afifah']);
});







