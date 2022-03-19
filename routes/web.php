<?php

use App\Http\Controllers\ProductController;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;

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

Route::get('/',  [ProductController::class, 'index']);



Route::get('/create', [ProductController::class ,  'create'] )->name('create'); 
Route::post('/create', [ProductController::class ,  'store'] )->name('store'); 



Route::get('/details/{id}', [ProductController::class ,  'show'] )->name('details');  
 

//Route::resource('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/detail', [ ArticleController::class , 'index' ]);