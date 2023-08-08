<?php

use App\Events\MessageCreated;
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
use App\Http\Controllers\Admin\UserAdmin;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\EmailsController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\pdfOpenerController;
use App\Http\Controllers\Web\SearchTripController;
use App\Http\Controllers\Web\UserLoginController;
use App\Http\Controllers\Web\UserRegisterController;
use FontLib\Table\Type\name;
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
Route::get('/FAQ', [HomeController::class, 'faq'])->name('home.faq');

Route::get('/profile', [HomeController::class, 'profile'])->name('home.profile');
Route::post('/profile', [HomeController::class, 'profileUpdate'])->name('home.profileUpdate');

Route::get('/histori-transaksi', [HomeController::class, 'cart'])->name('home.cart');
Route::get('/cerita-kami', [HomeController::class, 'cerita'])->name('home.cerita');
Route::get('/kontak-kami', [HomeController::class, 'kontak'])->name('home.kontak');
Route::get('/hidden-gem/{id}/hidden/{slug}', [HomeController::class, 'hiddemGem'])->name('home.hiddenGems');

Route::post('/seacrhByDate', [HomeController::class, 'searchTripByDates'])->name('home.searchTripByDates');

Route::post('/resetFilter', [HomeController::class,'resetFilterHomepage'])->name('home.resetFilter');

Route::get('/search', [SearchTripController::class, 'index'])->name('search');
Route::get('/cities/{id}', [SearchTripController::class, 'getCities'])->name('search.cities');
Route::get('/search-hashtag/{id}', [SearchTripController::class, 'getHashtag'])->name('search.hashtag');
Route::post('/searchtrip', [SearchTripController::class,  'searchtrip'])->name('search.trip');
Route::post('/selectcities/{id}', [UserRegisterController::class, 'selectcities']);

Route::resource('checkout', CheckoutController::class);

Route::get('/get-invoice-id/{invoiceId}', [HomeController::class, 'invoiceLunas'])->name('home.invoice');

Route::post('/email-leads', [EmailsController::class, 'index'])->name('email-leads');
// Route::get('/booking-trip', [HomeController::class, 'booking'])->name('booking');
Route::get('/booking-trip', [HomeController::class, 'booking1'])->name('booking');
Route::post('booking-order', [HomeController::class, 'bookingOrder2'])->name('booking.order');
Route::get('/payment/{ids}', [HomeController::class, 'payment'])->name('payment');
Route::get('/upload/{ids}', [HomeController::class, 'upload'])->name('upload');
Route::post('/upload', [HomeController::class, 'uploadImage'])->name('uploadImages');

Route::get('/forget-password', [UserLoginController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/change-password', [UserLoginController::class, 'changePassword'])->name('changePassword');

Route::resource('signup', UserRegisterController::class)->middleware('guest');
Route::resource('signin', UserLoginController::class)->middleware('guest');



Route::get('/google-sign-in', [UserLoginController::class, 'google'])->name('sign.google');
Route::get('/auth/google/callback', [UserLoginController::class, 'handleGoogleCallback']);

Route::get('email-test', function () {
    $details['email'] = 'patrajuanda10@gmail.com';
    dispatch(new App\Jobs\SendEmailJob($details));
    dd('done');
});

Route::get('/push', function(){
    // MessageCreated::dispatch('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, ipsam.');

    // event(new MessageCreated());
    return view('web.login.index');
});

Route::get('/ges', function(){
    $data['tes'] = '33087512525613';
    event(new MessageCreated($data[
        'tes'
    ]));

});

Route::get('/teskirimpdf', [pdfOpenerController::class, 'index'])->name('bukaPDF');

Route::get('/visa-policy', [pdfOpenerController::class, 'index2'])->name('bukaPDF2');



Auth::routes();




// route untuk halaman admin
Route::group([], __DIR__.'/admin.php');

// route untuk tools (clear cache, clear config, clear view, etc)
Route::group([], __DIR__.'/tools.php');