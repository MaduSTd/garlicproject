<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactForm;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(

    ){ //...

    /** Localized Routes here **/

    /* Website Routes */
    Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
    Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
    Route::get('/productview1', [WebsiteController::class, 'show1'])->name('website.productview1');
    Route::get('/productview2', [WebsiteController::class, 'show2'])->name('website.productview2');
    Route::get('/productview3', [WebsiteController::class, 'show3'])->name('website.productview3');
    Route::get('/productview4', [WebsiteController::class, 'show4'])->name('website.productview4');
    Route::get('/productview5', [WebsiteController::class, 'show5'])->name('website.productview5');
    Route::get('/productview6', [WebsiteController::class, 'show6'])->name('website.productview6');
    Route::get('/productview7', [WebsiteController::class, 'show7'])->name('website.productview7');





/* Website Routes */
    });

    /** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/




Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
/* Products Routes ) */
Route::get('/admin/products', [ProductController::class, 'index'])->name('backend.products.list');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('backend.products.new');
Route::post('/admin/products', [ProductController::class, 'store'])->name('backend.products.save');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('backend.products.edit');
Route::get('/admin/products/{id}', [ProductController::class, 'show'])->name('backend.products.view');
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('backend.products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('backend.products.destroy');
/* Products Routes */


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('contact',[ContactController::class,'sendEmail'])->name('contact-us');




