<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdvantagesController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\FaqsController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\ReviewsController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/service', [PageController::class, 'service']);

Route::get('/project', [PageController::class, 'project']);

Route::post('/contact', [pageController::class, 'contact']);

Route::get('/contact', [pageController::class, 'contact']);


Route::prefix('admin')->middleware(['auth'])->group(function()
{

    Route::resource('about', AboutController::class);

    Route::resource('advantages', AdvantagesController::class);

    Route::resource('partners', PartnersController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('product', ProductController::class);

    Route::resource('service', ServiceController::class);

    Route::resource('faqs', FaqsController::class);

    Route::resource('reviews', ReviewsController::class);

    Route::resource('portfolio', PortfolioController::class);

    Route::resource('posts', PostsController::class);

    Route::resource('contact', ContactController::class);

});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
