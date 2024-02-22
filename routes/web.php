<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroceriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
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
/*Route::get(/)
Route::get('services',[SIteController::class,'services']);
Route::get('products',[SIteController::class,'products']);
Route::get('contact',[SIteController::class,'contact']);
*/

Route::get('/', [GroceriesController::class,'index'])->name('home');
Route::get('/shop', [GroceriesController::class,'shop'])->name('shop');
Route::get('/register', [GroceriesController::class,'register'])->name('register');
Route::get('/login', [GroceriesController::class,'login'])->name('login');

#con esta ruta se llevara el id del producto a la ruta detail
Route::get('/product/{id}', 'App\Http\Controllers\GroceriesController@detail')->name('detail');
Route::resource('contact', ContactController::class);

//Route::post('/product/{id}/comment', 'App\Http\Controllers\CommentController@store')->name('comment.store');
Route::resource('comment',CommentController::class);
