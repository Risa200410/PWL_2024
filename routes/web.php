<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;

Route::get('/user', [UserController::class,
'user']);

Route::get('/food-beverage', [CategoryController::class,
'foodBeverage']);

Route::get('/beauty-health', [CategoryController::class,
'beautyhealth']);

Route::get('/home-care', [CategoryController::class,
'homecare']);

Route::get('/baby-kid', [CategoryController::class,
'babykid']);

Route::get('/home', [HomeController::class,
'home']);

Route::get('/penjualan', [TransaksiController::class,
'transaksi']);



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


// PRAKTIKUM 1

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return '2241760119 - Maritza Ulfa Huriyah';
// });

// Route::get('/user/{Risa}', function ($name) {
//     return 'Nama saya ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/articles/{id}', function ($id){
//     return 'Artikel Id: ' . $id;
// });

// Route::get('/user/{name?}', function ($name='John') { 
//     return 'Nama saya '.$name;
// }); 



// PRAKTIKUM 2 NOMOR 6

// Route::get('/hello', [WelcomeController::class,'hello']); 

// Route::get('/', [PageController::class,'index']); 

// Route::get('/about', [PageController::class,'about']); 

// Route::get('/articles/{id}', [PageController::class,'articles']); 



// PRAKTIKUM 2 NOMOR 7

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// PRAKTIKUM 2 NOMOR 9
// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

// PRAKTIKUM 3 NO 2
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Andi']);
// });


// PRAKTIKUM 3 NO 9
Route::get('/greeting', [WelcomeController::class,
'greeting']);



// SOAL PRAKTIKUM

Route::get('/user/{id}/{nama}', [UserController::class, 'User']);

Route::get('/user', [UserController::class,
'user']);

Route::get('/food-beverage', [CategoryController::class,
'foodBeverage']);

Route::get('/beauty-health', [CategoryController::class,
'beautyhealth']);

Route::get('/home-care', [CategoryController::class,
'homecare']);

Route::get('/baby-kid', [CategoryController::class,
'babykid']);

Route::get('/home', [HomeController::class,
'home']);

Route::get('/penjualan', [TransaksiController::class,
'transaksi']);