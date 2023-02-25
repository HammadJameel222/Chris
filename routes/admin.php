<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes(['login' => false,'register' => false, 'logout' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;


Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');

	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
    // Route::view('/usermanagement', 'admin.screens.pages.user-management')->name('user-management');

	// Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

// Route::get('/register', [RegisterController::class,'registerForm'])->name('register');
	// Route::post('/register', [RegisterController::class,'register'])->name('register');
	// Route::get('/login', [LoginController::class, 'loginForm'])->middleware('guest')->name('login');
	// Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
// category

Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class,'create'])->name('category.create');
Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class,'store'])->name('category.store');
Route::get('/category/index', [App\Http\Controllers\Admin\CategoryController::class,'index'])->name('category.index');
Route::get('/category/show/{category}', [App\Http\Controllers\Admin\CategoryController::class,'show'])->name('category.show');
Route::get('/category/edit/{category}', [App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{category}', [App\Http\Controllers\Admin\CategoryController::class,'update'])->name('category.update');
Route::post('/category/destroy/{category}', [App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('category.destroy');

// Products
Route::get('/product/index' , [App\Http\Controllers\Admin\ProductController::class,'index'])->name('product.index');
Route::get('/product/create' , [App\Http\Controllers\Admin\ProductController::class,'create'])->name('product.create');
Route::post('/product/store' , [App\Http\Controllers\Admin\ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{product}' , [App\Http\Controllers\Admin\ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{product}' , [App\Http\Controllers\Admin\ProductController::class,'update'])->name('product.update');

// Attributes

Route::get('/attribute/index' , [App\Http\Controllers\Admin\AttributeController::class,'index'])->name('attribute.index');
Route::get('/attribute/create' , [App\Http\Controllers\Admin\AttributeController::class,'create'])->name('attribute.create');
Route::post('/attribute/store' , [App\Http\Controllers\Admin\AttributeController::class,'store'])->name('attribute.store');
Route::get('/attribute/edit/{attribute}' , [App\Http\Controllers\Admin\AttributeController::class,'edit'])->name('attribute.edit');
Route::post('/attribute/update/{attribute}' , [App\Http\Controllers\Admin\AttributeController::class,'update'])->name('attribute.update');
Route::get('/attribute/show/{attribute}' , [App\Http\Controllers\Admin\AttributeController::class,'show'])->name('attribute.show');
Route::post('/attribute/destroy/{attribute}' , [App\Http\Controllers\Admin\AttributeController::class,'destroy'])->name('attribute.destroy');

//Discounts

Route::get('/discount/create' , [App\Http\Controllers\Admin\DiscountController::class,'create'])->name('discount.create');
Route::post('/discount/store' , [App\Http\Controllers\Admin\DiscountController::class,'store'])->name('discount.store');
Route::get('/discount/index' , [App\Http\Controllers\Admin\DiscountController::class,'index'])->name('discount.index');
Route::get('/discount/edit/{discount}' , [App\Http\Controllers\Admin\DiscountController::class,'edit'])->name('discount.edit');
// Route::post('/discount/udpate/{discount}' , [App\Http\Controllers\Admin\DiscountController::class,'update'])->name('discount.update');
Route::post('/discount/update/{discount}' , [App\Http\Controllers\Admin\DiscountController::class,'update'])->name('discount.update');
Route::get('/discount/show/{discount}' , [App\Http\Controllers\Admin\DiscountController::class,'show'])->name('discount.show');

Route::post('/discount/destroy/{discount}' , [App\Http\Controllers\Admin\DiscountController::class,'destroy'])->name('discount.destroy');

// Variants

Route::get('/variant/create' , [App\Http\Controllers\Admin\VariantController::class,'create'])->name('variant.create');
Route::post('/variant/store' , [App\Http\Controllers\Admin\VariantController::class,'store'])->name('variant.store');
Route::get('/variant/index' , [App\Http\Controllers\Admin\VariantController::class,'index'])->name('variant.index');
Route::get('/variant/edit/{variant}' , [App\Http\Controllers\Admin\VariantController::class,'edit'])->name('variant.edit');
Route::post('/variant/update/{variant}' , [App\Http\Controllers\Admin\VariantController::class,'update'])->name('variant.update');
Route::get('/variant/show/{variant}/{id}' , [App\Http\Controllers\Admin\VariantController::class,'show'])->name('variant.show');
Route::post('/variant/destroy/{variant}' , [App\Http\Controllers\Admin\VariantController::class,'destroy'])->name('variant.destroy');
