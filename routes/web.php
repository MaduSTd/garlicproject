<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProductController;
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
/* Website Routes */
Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/product1', [WebsiteController::class, 'product1'])->name('website.product1');
Route::get('/product2', [WebsiteController::class, 'product2'])->name('website.product2');
Route::get('/product3', [WebsiteController::class, 'product3'])->name('website.product3');
Route::get('/product4', [WebsiteController::class, 'product4'])->name('website.product4');
Route::get('/product5', [WebsiteController::class, 'product5'])->name('website.product5');
Route::get('/product6', [WebsiteController::class, 'product6'])->name('website.product6');
/* Website Routes */

/* Products Routes ) */
Route::get('/admin/products', [ProductController::class, 'index'])->name('backend.products.list');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('backend.products.new');
Route::post('/admin/products', [ProductController::class, 'store'])->name('backend.products.save');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('backend.products.edit');
Route::get('/admin/products/{id}', [ProductController::class, 'show'])->name('backend.products.view');
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('backend.products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('backend.products.destroy');
/* Products Routes */

Route::get('/tt', [WebsiteController::class, 'index'])->name('website.home');

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


