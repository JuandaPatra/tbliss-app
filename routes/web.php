<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ContinentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\EditCitiesController;
use App\Http\Controllers\Admin\EditCountriesController;
use App\Http\Controllers\Admin\EditHashtagTripController;
use App\Http\Controllers\Admin\ExcludesController;
use App\Http\Controllers\Admin\HashtagController;
use App\Http\Controllers\Admin\HiddenGemController;
use App\Http\Controllers\Admin\IncludesController;
use App\Http\Controllers\Admin\PickHiddenGemsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SearchTripController;
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

// Route::get('/', function () {
//     return view('web.home.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/countries/{id}', [HomeController::class, 'country'])->name('home.country');
Route::get('/countries/{id}/detail/{trip}', [HomeController::class, 'detail'])->name('home.detail');
Route::get('/search', [SearchTripController::class,'index'])->name('search');
Route::get('/cities/{id}', [SearchTripController::class,'getCities'])->name('search.cities');

Route::get('/details', function(){
    return view('web.details.index');
});

Route::get('/detail-trip', function(){
    return view('web.detailtrip.index');
});

Route::get('/coba', function () {
    return view('web.details.coba');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('product/includes/{product}', [ProductController::class, 'include'])->name('product.include');
Route::get('product/pickhiddengem/{product}', [ProductController::class, 'pick_hidden_gem'])->name('product.pick');
Route::get('product/choose/{product}', [ProductController::class, 'choose'])->name('product.choose');
Route::get('product/images', [ProductController::class, 'images'])->name('product.images');
Route::resource('product', ProductController::class);

Route::resource('news', NewsController::class);

Route::resource('sosmed', SosmedController::class);

Route::resource('slider', SliderController::class);

Route::resource('categories', CategoriesController::class);

Route::get('/continent/select', [ContinentController::class, 'select'])->name('continent.select');
Route::resource('continent', ContinentController::class);

Route::resource('country', CountryController::class);
Route::resource('edit-country', EditCountriesController::class);

Route::resource('city', CityController::class);
Route::resource('edit-city', EditCitiesController::class);

Route::resource('hashtag', HashtagController::class);
Route::resource('edit-hashtag-trip', EditHashtagTripController::class);

Route::resource('activities', HiddenGemController::class);

Route::resource('includes', IncludesController::class);

Route::resource('excludes', ExcludesController::class);

Route::resource('pick-hidden-gem', PickHiddenGemsController::class);

Route::get('contact', [ContactController::class,'index'])->name('contact');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});