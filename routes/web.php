<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/', [ProductController::class, 'showAll']);
Route::get('/shop', [ProductController::class, 'showAllShop']);
Route::get('/sort', [ProductController::class, 'sortProducts'])->name('sort.products');


Route::get('/products/{id}', [ProductController::class, 'showProductDetail'])->name('products.showProductDetail');

Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/index', [MyController::class, 'index'])->name('index');
