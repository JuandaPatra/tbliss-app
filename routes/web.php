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
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PickHiddenGemsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TripController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SearchTripController;
use App\Http\Controllers\Web\UserLoginController;
use App\Http\Controllers\Web\UserRegisterController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/countries/{id}', [HomeController::class, 'country'])->name('home.country');

Route::get('/countries/{id}/detail/{trip}', [HomeController::class, 'detail'])->name('home.detail');
Route::post('detail', [HomeController::class, 'addToCart'])->name('home.addToCart');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');

Route::get('/profile', [HomeController::class,'profile'])->name('home.profile');
Route::post('/profile', [HomeController::class, 'profileUpdate'])->name('home.profileUpdate');

Route::get('/histori-transaksi', [HomeController::class, 'cart'])->name('home.cart');
Route::get('/cerita-kami',[HomeController::class, 'cerita'])->name('home.cerita');
Route::get('/hidden-gem/{id}/hidden/{slug}', [HomeController::class,'hiddemGem'])->name('home.hiddenGems');

Route::post('/seacrhByDate',[HomeController::class,'searchTripByDates'] )->name('home.searchTripByDates');

Route::get('/search', [SearchTripController::class,'index'])->name('search');
Route::get('/cities/{id}', [SearchTripController::class,'getCities'])->name('search.cities');
Route::get('/search-hashtag/{id}', [SearchTripController::class, 'getHashtag'])->name('search.hashtag');
Route::post('/searchtrip', [SearchTripController::class,  'searchtrip'])->name('search.trip');
Route::post('/selectcities/{id}', [UserRegisterController::class, 'selectcities']);

Route::resource('checkout', CheckoutController::class);

Route::get('/booking-trip', [HomeController::class,'booking'])->name('booking');
Route::post('booking-order', [HomeController::class, 'bookingOrder'])->name('booking.order');
Route::get('/payment/{ids}', [HomeController::class, 'payment'])->name('payment');
Route::get('/upload/{ids}', [HomeController::class, 'upload'])->name('upload');
Route::post('/upload', [HomeController::class,'uploadImage'])->name('uploadImages');


Route::resource('signup', UserRegisterController::class)->middleware('guest');
Route::resource('signin', UserLoginController::class)->middleware('guest');


Route::get('/google-sign-in', [UserLoginController::class,'google'])->name('sign.google');
Route::get('/auth/google/callback', [UserLoginController::class, 'handleGoogleCallback']);


Auth::routes();

Route::group(['middleware'=>'auth'], function(){

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isAdmin');
    
    Route::get('product/includes/{product}', [ProductController::class, 'include'])->name('product.include');
    Route::get('product/pickhiddengem/{product}', [ProductController::class, 'pick_hidden_gem'])->name('product.pick');
    Route::get('product/choose/{product}', [ProductController::class, 'choose'])->name('product.choose');
    Route::get('product/images', [ProductController::class, 'images'])->name('product.images');
    Route::post('product/edit/{id}/update', [ProductController::class, 'updateTrip'])->name('product.updateTrip');

    Route::resource('product', ProductController::class);
    
    Route::resource('news', NewsController::class);
    Route::get('/invoice/{product}', [PaymentController::class, 'invoice'])->name('payments.invoice');
    Route::resource('payments', PaymentController::class);
    
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
    
    Route::get('contact', [ContactController::class,'index'])->middleware('isAdmin')->name('contact');
});

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