<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;

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

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/', [ProductController::class, 'showAll']);
Route::get('/shop', [ProductController::class, 'showAllShop']);
Route::get('/sort', [ProductController::class, 'sortProducts'])->name('sort.products');


Route::get('/products/{id}', [ProductController::class, 'showProductDetail'])->name('products.showProductDetail');

Route::get('/auth.register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/auth.register', [RegisterController::class, 'register'])->name('register');

Route::get('/auth.login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth.login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cart', [CartController::class, 'showCartForm'])->name('cart');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');

Route::get('/index', [MyController::class, 'index'])->name('index');
