<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PagesController::class,'accueil']);
Route::get('/apropos', [PagesController::class,'apropos']);
Route::get('/articles', [PagesController::class,'articles']);
Route::get('/contact', [PagesController::class,'contact']);
Route::get('/login', [PagesController::class,'login']);
Route::get('/show/{id}', [PagesController::class, 'show']);


Route::get('/create', [ProductController::class,'create']);
Route::post('/saveproduct', [ProductController::class,'saveproduct']);
Route::delete('/deletearticle/{id}', [ProductController::class,'deletearticle']);
Route::delete('/editerarticle/{id}', [ProductController::class,'editerarticle']);
Route::put('/updateproduct/{id}', [ProductController::class,'updateproduct']);









