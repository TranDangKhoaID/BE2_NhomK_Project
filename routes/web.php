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
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminManuController;
use App\Http\Controllers\Admin\AdminProtypeController;

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
Route::post('/admin.login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
// Route::get('/admin.index', [AdminHomeController::class, 'index'])->name('admin.index');

// Các tuyến của người dùng quản trị
Route::middleware(['admin'])->group(function () {
    // Trang chủ admin (index)
    Route::get('/admin.index', [AdminHomeController::class, 'index'])->name('admin.index');
    Route::match(['get', 'post'],'/admin.logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    // Các tuyến khác của người dùng quản trị...
    Route::get('/admin.index/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::get('/admin.index/users/{id}/block', [AdminUserController::class, 'blockUser'])->name('admin.users.block');
    //admin product
    Route::get('/admin.index/addproduct', [AdminProductController::class, 'index'])->name('admin.addproduct');
    Route::post('/admin.index/addproduct', [AdminProductController::class, 'addProduct'])->name('admin.storeProduct');
    
    Route::get('/admin.index/products', [AdminProductController::class, 'showProducts'])->name('admin.products');
    //edit product
    Route::get('/admin.index/editproducts/{id}', [AdminProductController::class, 'indexEdit'])->name('admin.editproducts');
    Route::put('/admin.index/editproducts/{id}', [AdminProductController::class, 'editProduct'])->name('admin.update');
    //delete product
    Route::delete('/admin.index/deleteproduct/{id}', [AdminProductController::class, 'deleteProduct'])->name('admin.deleteproduct');

    //manufactures admin
    Route::get('/admin.index/manufactures', [AdminManuController::class, 'index'])->name('admin.manufactures');
    //add manufacture
    Route::get('/admin.index/addmanufacture', [AdminManuController::class, 'indexAdd'])->name('admin.addmanufacture');
    Route::post('/admin.index/addmanufacture', [AdminManuController::class, 'addManu'])->name('admin.storeManu');
    //edit manu
    Route::get('/admin.index/editmanus/{manu_id}', [AdminManuController::class, 'indexEdit'])->name('admin.editmanufacture');
    Route::post('/admin.index/editmanus/{manu_id}', [AdminManuController::class, 'editManu'])->name('admin.editmanu');
    //delete manu
    Route::delete('/admin.index/deletemanu/{manu_id}', [AdminManuController::class, 'deleteManu'])->name('admin.deletemanu');

    //protype admin
    Route::get('/admin.index/protypes', [AdminProtypeController::class, 'index'])->name('admin.protypes');
    //add 
    Route::get('/admin.index/addprotype', [AdminProtypeController::class, 'indexAdd'])->name('admin.addprotype');
    Route::post('/admin.index/addprotype', [AdminProtypeController::class, 'addManu'])->name('admin.storeType');
    //edit 
    Route::get('/admin.index/edittypes/{type_id}', [AdminProtypeController::class, 'indexEdit'])->name('admin.editprotype');
    Route::post('/admin.index/edittypes/{type_id}', [AdminProtypeController::class, 'editManu'])->name('admin.editprotype');
    //delete 
    Route::delete('/admin.index/deletetype/{type_id}', [AdminProtypeController::class, 'deleteManu'])->name('admin.deletetype');
});



Route::get('/manu', function () {
    return view('admin.addmanufacture');
});

Route::get('/auth.register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/auth.register', [RegisterController::class, 'register'])->name('register');

Route::get('/auth.login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth.login', [LoginController::class, 'login'])->name('login.submit');
// Trang chủ (index)
Route::get('/', [ProductController::class, 'showAll']);
Route::get('/index', [MyController::class, 'index'])->name('index');
//shop list and sort
Route::get('/shop', [ProductController::class, 'showAllShop'])->name('shop');
Route::get('/sort', [ProductController::class, 'sortProducts'])->name('sort.products');
//detail product
Route::get('/products/{id}', [ProductController::class, 'showProductDetail'])->name('products.showProductDetail');

//các tuyến của khách hàng
Route::middleware(['auth'])->group(function () {
    // Các tuyến khác 
    Route::match(['get', 'post'], '/auth.logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/cart', [CartController::class, 'showCartForm'])->name('cart');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

    Route::get('/cart/checkout', [CheckOutController::class, 'checkout'])->name('cart.checkout');
    Route::post('/cart/checkout/bill', [CheckOutController::class, 'processCheckout'])->name('cart.processCheckout');

    Route::get('/auth.my-account', [AccountController::class, 'showAcountForm'])->name('account');
    Route::get('/auth.my-account/billing/{id}', [AccountController::class, 'showBillingForm'])->name('billing');
});



