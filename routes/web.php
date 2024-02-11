<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroceriesController;

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
