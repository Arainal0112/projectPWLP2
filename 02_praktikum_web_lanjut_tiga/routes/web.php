<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;

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


Route::get('/', [HomeController::class, 'index']);

Route::prefix('category') -> group(function() {
    Route::get('', function(){
        return "Menampilkan Daftar Produk :<br>
        1. Marbel Education Games<br>
        2. Marbel and Friends Kids Games <br>
        3. Riri Story Books<br>
        4. Kolak Kids Songs";
    });
    Route::get('/marbel-edu-games', [ProductsController::class, 'edu']);
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'kids']);
    Route::get('/riri-story-books', [ProductsController::class, 'riri']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'kolak']);
    
});

Route::get('/news/{berita?}', [NewsController::class,'news']);

Route::prefix('program') -> group(function() {
    Route::get('', function(){
        return "Menampilkan Daftar Program :<br>
        1. Karir<br>
        2. Magang<br>
        3. Kunjungan Industri<br>";
    });
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']); 
});

Route::get('/about-us', [AboutUsController::class, 'aboutUs']);

Route::resource('/contact-us', ContactController::class) -> only([
    'index', 'store'
]);