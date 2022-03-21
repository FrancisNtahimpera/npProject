<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;

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



Route::get('/details/{id}', [ProductController::class ,  'show'] )->name('details')->middleware(['auth']);  

Route::get('/update/{id}', [ProductController::class ,  'edit'] )->name('update')->middleware(['auth']);  
Route::put('/update/{id}', [ProductController::class ,  'update'] )->name('update')->middleware(['auth']);


Route::get('/delete/{id}', [ProductController::class ,  'destroy'] )->name('delete');


Route::get('/profile', [UsersController::class ,  'edit'])->name('profile')->middleware(['auth']);
Route::put('/profile', [UsersController::class ,  'update'])->middleware(['auth']);


Route::get('/favoris', [UsersController::class ,  'favoris'])->name('favoris')->middleware(['auth']);



 

Route::get('/dashboard', function () {
    return view('profile');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
