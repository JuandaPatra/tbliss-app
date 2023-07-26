<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ChooseHiddenGemController;
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
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\TestimoniHomepage;
use App\Http\Controllers\Admin\TestimoniHomepageController;
use App\Http\Controllers\Admin\TripController;
use App\Http\Controllers\Admin\UserAdmin;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SosmedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isAdmin');

   Route::put('product/testimoni-per-trip/{product}/update', [ProductController::class,'updateEditTestimoni'])->name('product.updateTestimoniTrip'); 
    Route::get('product/testimoni-per-trip/{product}/edit', [ProductController::class,'editTestimoni'])->name('product.editTestimoniTrip');
    Route::delete('product/testimoni-per-trip/{product}/delete', [ProductController::class,'deleteTestimoni'])->name('product.destroyTestimoniTrip');
    Route::post('product/testimoni-per-trip/table', [ProductController::class, 'table'])->name('tableTestimoniTrip');
    Route::get('product/testimoni-per-trip/{id}', [ProductController::class, 'testimoni'])->name('product.testimoni');
    Route::post('product/testimoni-per-trip/{id}', [ProductController::class, 'testimoniAdd'])->name('product.testimoniAdd');
    Route::post('product/review-star/{id}', [ProductController::class, 'reviewAdd'])->name('product.reviewAdd');
    Route::get('product/review-star/{id}', [ProductController::class,'review'])->name('product.review');
    Route::get('product/includes/{product}', [ProductController::class, 'include'])->name('product.include');
    Route::get('product/pickhiddengem/{product}', [ProductController::class, 'pick_hidden_gem'])->name('product.pick');
    Route::get('product/choose/{product}', [ProductController::class, 'choose'])->name('product.choose');
    Route::post('product/images/{id}/update',[ProductController::class,'updateImages'])->name('product.updateImages');
    Route::get('product/images/{id}', [ProductController::class, 'images'])->name('product.images');
    Route::post('product/edit/{id}/update', [ProductController::class, 'updateTrip'])->name('product.updateTrip');

    Route::resource('product', ProductController::class);

    Route::resource('news', NewsController::class);
    Route::get('/invoice/{product}', [PaymentController::class, 'invoice'])->name('payments.invoice');
    Route::get('/payments/table', [PaymentController::class, 'table'])->name('payments.table');
    Route::get('/payments/confirm/{id}', [PaymentController::class, 'paymentConfirm'])->name('payments.confirm');
    Route::get('/payments/cancel/{id}', [PaymentController::class, 'cancelSuccess'])->name('payments.cancel');
    Route::get('/payments/send-invoice/{id}', [PaymentController::class, 'emailInvoice'])->name('payments.invoice');
    Route::get('/payments/finish-payment/{id}', [PaymentController::class,'finishPayment'])->name('payments.finishPayment');
    Route::get('/payments/sendUnpaid/{id}', [PaymentController::class,'sendEmailUnpaid'])->name('payments.sendEmailUnpaid');
    Route::resource('payments', PaymentController::class);

    Route::resource('sosmed', SosmedController::class);
    Route::resource('slider', SliderController::class);

    Route::resource('categories', CategoriesController::class);

    Route::get('/policy/syaratketentuan', [PolicyController::class,'index2'])->name('policy.syarat');
    Route::post('/policy/syaratketentuan', [PolicyController::class, 'storeSyarat'])->name('policy.storeSyarat');
    Route::resource('policy', PolicyController::class);

    Route::get('/table-testimoni', [TestimoniController::class, 'table'])->name('tableTestimoni');
    Route::get('/delete-tes/{id}', [TestimoniController::class, 'destroy1'])->name('testimoni-trip.destroy1');
    Route::resource('testimoni-trip', TestimoniController::class );

    Route::resource('choose-hidden-gem', ChooseHiddenGemController::class);


    Route::get('/continent/select', [ContinentController::class, 'select'])->name('continent.select');
    Route::resource('continent', ContinentController::class);

    Route::resource('country', CountryController::class);
    Route::resource('edit-country', EditCountriesController::class);

    Route::resource('city', CityController::class);
    Route::resource('edit-city', EditCitiesController::class);

    Route::resource('hashtag', HashtagController::class);
    Route::resource('edit-hashtag-trip', EditHashtagTripController::class);

    Route::get('/activities/images/{id}', [HiddenGemController::class,'images'])->name('activities.images');
    Route::post('/activities/images/{id}/update', [HiddenGemController::class,'updateImages'])->name('activities.updateImages');
    Route::resource('activities', HiddenGemController::class);

    Route::resource('includes', IncludesController::class);

    Route::resource('excludes', ExcludesController::class);

    Route::resource('pick-hidden-gem', PickHiddenGemsController::class);

    Route::get('/users/all', [UserAdmin::class, 'table'])->name('table');
    Route::resource('user-admin', UserAdmin::class);

    Route::get('contact', [ContactController::class, 'index'])->middleware('isAdmin')->name('contact');
    Route::get('contact-email', [ContactController::class, 'createEmail'])->middleware('isAdmin')->name('contact.email');
    Route::post('contact-send', [ContactController::class, 'sendEmail'])->middleware('isAdmin')->name('contact.send');

    Route::get('notifications', [HomeController::class, 'notification'])->middleware('isAdmin')->name('notifications.admin');

    Route::get('notification-close/{id}', [HomeController::class, 'notificationRead'])->middleware('isAdmin')->name('notifications.close');
    
});
