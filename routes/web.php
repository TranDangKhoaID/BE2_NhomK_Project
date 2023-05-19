<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminManuController;
use App\Http\Controllers\Admin\AdminProtypeController;
use App\Http\Controllers\Admin\AdminBillingController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminSliderController;


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

//dang ki admin
Route::get('/admin.register', [AdminRegisterController::class, 'index'])->name('admin.register');
Route::post('/admin.register', [AdminRegisterController::class, 'AdminRegister'])->name('admin.register');
//dang nhap admin
Route::get('/admin.login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin.login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

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
    //hien thi list products
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

    //billings admin
    //billing-cancel
    Route::get('/admin.index/billings/{id}/cancel', [AdminBillingController::class, 'cancelBilling'])->name('admin.billings-cancel');
    Route::get('/admin.index/billings-cancel', [AdminBillingController::class, 'showBillingsHuy'])->name('admin.billings-h');
    
    //billing - chờ xác nhận
    Route::get('/admin.index/billings-cxn', [AdminBillingController::class, 'showBillingsChoXacNhan'])->name('admin.billings-cxn');
    //billing - xác nhận
    Route::get('/admin.index/billings-cxn/{id}/xn', [AdminBillingController::class, 'xacNhanBilling'])->name('admin.billings-cxn.xn');
    Route::get('/admin.index/billings-xn', [AdminBillingController::class, 'showBillingsXacNhan'])->name('admin.billings-xn');
    //billing - done
    Route::get('/admin.index/billings-cxn/{id}/done', [AdminBillingController::class, 'doneBilling'])->name('admin.billings-xn.done');
    Route::get('/admin.index/billings-done', [AdminBillingController::class, 'showBillingsDone'])->name('admin.billings-done');
    
    //blogs admin
    Route::get('/admin.index/addblog', [AdminBlogController::class, 'index'])->name('admin.addblog');
    Route::get('/admin.index/blogs', [AdminBlogController::class, 'indexListBlogs'])->name('admin.blogs');
    Route::post('/admin.index/addblog', [AdminBlogController::class, 'addBlog'])->name('admin.storeBlog');
    Route::delete('/admin.index/deleteblogs/{id}', [AdminBlogController::class, 'deleteBlog'])->name('admin.deleteblog');


    //slider admin
    Route::get('/admin.index/addslider', [AdminSliderController::class, 'index'])->name('admin.addslider');
    Route::post('/admin.index/addslider', [AdminSliderController::class, 'addSlider'])->name('admin.storeSlider');
    
});


Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});

//customer
Route::get('/auth.register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/auth.register', [RegisterController::class, 'register'])->name('register');

Route::get('/auth.login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth.login', [LoginController::class, 'login'])->name('login.submit');
//password reset
Route::get('/auth.forgotpassword', [LoginController::class, 'showForgotPasswordForm'])->name('forgotpassword');
// Route::post('/auth.password.send', [LoginController::class, 'sendResetLinkEmail'])->name('password.send');

// Route::get('/auth.resetpassword/{token}', [LoginController::class, 'showResetForm'])->name('resetpassword');
// Route::post('/auth.password.reset', [LoginController::class, 'reset'])->name('password.reset');
// Trang chủ (index)
Route::get('/', [MyController::class, 'index']);
Route::get('/index', [MyController::class, 'index'])->name('index');
//shop list and sort
Route::get('/shop', [ProductController::class, 'showAllShop'])->name('shop');
Route::get('/sort', [ProductController::class, 'sortProducts'])->name('sort.products');
//tìm kiếm sản phẩm
Route::get('/search', [ProductController::class, 'searchProducts'])->name('search.products');
Route::get('/search-slider-price', [ProductController::class, 'searchSliderPriceProducts'])->name('search.products.slider');

//hiển thị sản phẩm theo manufacture id
Route::get('/shop/manufactures/{manu_id}', [ProductController::class, 'manufactureProduct'])->name('shop.manu.products');
//hiển thị sản phẩm theo protype_id
Route::get('/shop/protypes/{type_id}', [ProductController::class, 'protypeProduct'])->name('shop.type.products');

//detail product
Route::get('/products/{id}', [ProductController::class, 'showProductDetail'])->name('products.showProductDetail');
//blog
Route::get('/blogs', [BlogController::class, 'showAll'])->name('blog');
Route::get('/blogs/{id}', [BlogController::class, 'showBlogDetail'])->name('blog.showBlogDetail');
//contact
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/addcontact', [ContactController::class, 'addContact'])->name('add.contact');


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
    //profile update
    Route::get('/auth.my-account/profile', [AccountController::class, 'indexProfile'])->name('profile');
    Route::post('/auth.my-account/update', [AccountController::class, 'updateProfile'])->name('account.update.profile');
    //change pass
    Route::get('/auth.my-account/changepassword', [AccountController::class, 'showChangePass'])->name('change.password');
    Route::post('/auth.my-account/changepassword.update', [AccountController::class, 'changePassword'])->name('change.password.update');

    //wish list
    Route::get('/wishlist', [WishListController::class, 'showWishListForm'])->name('wishlist');
    Route::post('/add-to-wishlist', [WishListController::class, 'addToWishList'])->name('wishlist.add');
    Route::post('/wishlist/remove/{productId}', [WishListController::class, 'removeFromWishList'])->name('wishlist.remove');
});



