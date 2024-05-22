<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProfileController;

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
//Admin Panel
// Route::get('/admin', function () {
//     return view('admin.dashboard')->name('admin.dashboard');
//});
//Login


Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::group(['middleware' => 'auth'],function() {


Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

//Category
Route::get('/admin/category/index', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/views/{id}',[CategoryController::class,'views'])->name('admin.category.views');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create',[CategoryController::class,'store'])->name('admin.category.store');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
Route::post('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');

//Product
Route::get('/admin/product/index', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/admin/product/views/{id}',[ProductController::class,'viewproduct'])->name('admin.product.views');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product/create',[ProductController::class,'store'])->name('admin.product.store');

Route::get('admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::post('admin/product/update/{id}',[ProductController::class,'update'])->name('admin.product.update');
Route::post('admin/product/delete/{id}',[ProductController::class,'delete'])->name('admin.product.delete');

//Order
Route::get('/admin/order/index',[OrderHistoryController::class,'index'])->name('admin.order.index');
Route::post('/admin/order/index', [OrderHistoryController::class, 'updateStatus'])->name('updateOrderStatus');

//Profile
Route::get('/admin/profile/index',[UserProfileController::class,'index'])->name('admin.profile.index');
Route::post('/admin/profile/index',[UserProfileController::class,'store'])->name('admin.profile.store');


// Route::get('/', function () {
//     return view('user.dashboard');
// });
});
});

//Login
Route::get('/admin/login',[LoginController::class,'login'])->name('admin.login');
Route::post('/admin/login',[LoginController::class,'dologin'])->name('admin.dologin');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

//User Panel
Route::get('/',[CategoryController::class,'dashboard'])->name('user.dashboard');
Route::get('/user/products/{catid}',[ProductController::class,'userproduct'])->name('user.products');
Route::get('/user/product', function () {
    return view('user.products');
});
//Order
Route::post('/user/product/order',[OrderHistoryController::class,'store'])->name('user.order.store');





