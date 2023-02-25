<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => 'guest'], function(){

    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class,'registerForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class,'register']);

    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,'loginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class,'login']);

});
Route::group(['middleware' => 'auth'], function(){

    Route::view('/', 'user.screens.pages.index')->name('home');
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
});

Route::view('/about', 'user.screens.pages.about')->name('about');
Route::view('/privacy/policy', 'user.screens.pages.privacy-policy')->name('privacy.policy');
Route::view('/terms/conditions', 'user.screens.terms-and-conditions')->name('terms.conditions');
Route::view('/contact', 'user.screens.pages.contact')->name('contact');
Route::view('/social', 'user.screens.pages.social-responsibility')->name('social');


// products

Route::get('/product/women', [App\Http\Controllers\PageController::class,'women'])->name('women');
Route::get('/product/custom', [App\Http\Controllers\PageController::class,'custom'])->name('custom.jewelry');
Route::get('/product/engagement', [App\Http\Controllers\PageController::class,'engagement'])->name('engagement');
Route::get('/product/men', [App\Http\Controllers\PageController::class,'men'])->name('men');
Route::get('/product/signature/', [App\Http\Controllers\PageController::class,'signature'])->name('signature');
Route::get('/product/detail/{product}', [App\Http\Controllers\PageController::class,'show'])->name('show.detail');
// Route::view('/product/detail/', 'user.screens.products.products-details')->name('productdet');


Route::post('/newsletter/add', [App\Http\Controllers\NewsLetterController::class,'store'])->name('newsletter.add');

//blogs
//

Route::view('/blog', 'user.screens.blogs.blog')->name('blog');

Route::get('/cart' , [App\Http\Controllers\CartController::class,'index'])->name('cart');
Route::view('/checkout' , 'user.screens.cart.checkout')->name('checkout');

Route::post('/cart/add/{product}' , [App\Http\Controllers\CartController::class,'add'])->name('cart.add');
Route::post('/cart/destroy/{product}' , [App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
// Route::post('/cart/destroy/{product}' , [App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');

