<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Services\BlockPavingPageController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\BoilerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\LocalSEOController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\Services\FencingPageController;
use App\Http\Controllers\Services\TarmacSurfacingController;
use App\Http\Controllers\Services\TurfingPageController;

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



Route::get('boilers/{slug}', [BoilerController::class, 'show'])->name('boilers.show');
    Route::get('boilers', [BoilerController::class, 'index'])->name('boilers');



Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/boiler-installation', [ServicePageController::class, 'installation'])->name('boiler-installation');
Route::get('/boiler-repair', [ServicePageController::class, 'repair'])->name('boiler-repair');
Route::get('/boiler-service', [ServicePageController::class, 'service'])->name('boiler-service');


/* --------------------------------  Contact  ------------------------------------- */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', [HomePageController::class, 'index'])->name('home');

/* --------------------------------  Services  ------------------------------------- */



/* --------------------------------  Digital Marketing  ------------------------------------- */



/* --------------------------------  Website Management  ------------------------------------- */


/* --------------------------------  Blog  ------------------------------------- */
Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('project/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/{slug}', [LocalSEOController::class, 'show'])->name('localSEO.show');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');





/* --------------------------------  Other  ------------------------------------- */
Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap');
Route::post('contact-form/submit', [ContactFormController::class, 'submit'])->name('contactForm.submit');


Route::get('/admin/register', [RegisterController::class, 'showRegistrationForm'])->name('register-page');
Route::post('/admin/register', [RegisterController::class, 'register'])->name('register');