<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

//Category
Route::get('/admin/category/index', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create',[CategoryController::class,'store'])->name('admin.category.store');

//Product
Route::get('/admin/product/index', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product/create',[ProductController::class,'store'])->name('admin.product.store');

//Order
Route::get('/admin/order/index',[OrderHistoryController::class,'index'])->name('admin.order.index');
Route::post('/admin/order/index', [OrderHistoryController::class, 'updateStatus'])->name('updateOrderStatus');

//Profile
Route::get('/admin/profile/index',[UserProfileController::class,'index'])->name('admin.profile.index');

//User Panel
// Route::get('/', function () {
//     return view('user.dashboard');
// });

Route::get('/',[CategoryController::class,'dashboard'])->name('user.dashboard');
Route::get('/user/products/{catid}',[ProductController::class,'userproduct'])->name('user.products');
Route::get('/user/product', function () {
    return view('user.products');
});
//Order
Route::post('/user/product/order',[OrderHistoryController::class,'store'])->name('user.order.store');





