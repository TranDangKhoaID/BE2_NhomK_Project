<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;

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

Route::get('/admin.register', [AdminRegisterController::class, 'index'])->name('admin.register');
Route::post('/admin.register', [AdminRegisterController::class, 'AdminRegister'])->name('admin.register');

Route::get('/admin.login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin.login', [AdminLoginController::class, 'login'])->name('login.submit');
Route::get('/admin.index', [AdminHomeController::class, 'index'])->name('admin.index');
Route::post('/admin.logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
// Route::middleware('auth.admin')->group(function () {
    
// });


Route::get('/admin.index/users', [AdminUserController::class, 'index'])->name('admin.users');
Route::get('/admin.index/users/{id}/block', [AdminUserController::class, 'blockUser'])->name('admin.users.block');



Route::get('/user', function () {
    return view('admin.users');
});
Route::get('/', [ProductController::class, 'showAll']);

Route::get('/shop', [ProductController::class, 'showAllShop'])->name('shop');
Route::get('/sort', [ProductController::class, 'sortProducts'])->name('sort.products');


Route::get('/products/{id}', [ProductController::class, 'showProductDetail'])->name('products.showProductDetail');

Route::get('/auth.register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/auth.register', [RegisterController::class, 'register'])->name('register');

Route::get('/auth.login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth.login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cart', [CartController::class, 'showCartForm'])->name('cart');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/cart/checkout', [CheckOutController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart/checkout/bill', [CheckOutController::class, 'processCheckout'])->name('cart.processCheckout');

Route::get('/auth.my-account', [AccountController::class, 'showAcountForm'])->name('account');
Route::get('/auth.my-account/billing/{id}', [AccountController::class, 'showBillingForm'])->name('billing');



Route::get('/index', [MyController::class, 'index'])->name('index');

