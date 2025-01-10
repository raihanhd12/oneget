<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TabsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TiktokController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\IdeGeneratorController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\HasilAnalisisController;
use App\Http\Controllers\HasilAnalisisTiktokController;
use App\Http\Controllers\HasilAnalisisFacebookController;
use App\Http\Controllers\HasilAnalisisInstagramController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\ContactUsController as AdminContactUsController;
use App\Http\Controllers\Admin\SubscriberController as AdminSubscriberController;
use App\Http\Controllers\Admin\AnalyticBriefController as AdminAnalyticBriefController;
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

Route::view('/', 'home/landing_page');
Route::view('/howitwork', 'home/howitwork')->name('howitwork');
Route::view('/feature-analisis', 'home/analisis_page')->name('featureanalisis');
Route::view('/feature-report', 'home/report_page')->name('featurereport');
Route::view('/feature-ide-generator', 'home/ide_generator_page')->name('featureidegenerator');
Route::view('/privacy-policy', 'home/privacy')->name('privacy');
Route::view('/terms-condition', 'home/terms')->name('terms');

// Contact Us
Route::resource('contact-us', ContactUsController::class);

Route::middleware(['guest'])->group(function () {
    // Auth
    Route::get('/session', [AuthController::class, 'index'])->name('auth');
    Route::post('/session', [AuthController::class, 'login']);
    Route::get('/reg', [AuthController::class, 'create'])->name('registration');
    Route::post('/reg', [AuthController::class, 'register']);
    Route::get('/forget-password', [AuthController::class, 'viewForget'])->name('forget');
    Route::post('/forget-password', [AuthController::class, 'postForget']);
    Route::get('/email-sent', [AuthController::class, 'viewEmailSent'])->name('emailSent');
    Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset');
    Route::post('/reset-password', [AuthController::class, 'resetPasswordPost'])->name('resetPost');
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
    Route::get('/login/google/redirect', [AuthController::class, 'redirect'])->name('redirect');
    Route::get('/login/google/callback', [AuthController::class, 'callback'])->name('callback');
});

Route::middleware(['auth'])->group(function () {
    Route::view('/privacy-policy', 'home/privacy')->name('privacy');
    Route::view('/terms-condition', 'home/terms')->name('terms');

    // ADMIN
    Route::middleware(['role:admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('edit', [AdminController::class, 'edit'])->name('edit');
        Route::resource("user", AdminUserController::class);
        Route::resource("contact-us", AdminContactUsController::class);
        Route::resource('subscriber', AdminSubscriberController::class);
        Route::resource('payment', AdminPaymentController::class);
        Route::resource('analytic-brief', AdminAnalyticBriefController::class);
    });

    // USER
    Route::middleware(['role:user'])->group(function () {
        Route::get('/user', [UserController::class, 'dashboardPage'])->name('user');
        Route::get('/social-profiles', [UserController::class, 'socialProfilesPage'])->name('socialProfiles');
        Route::post('/social-profiles', [UserController::class, 'socialProfilesPost'])->name('socialProfilesPost');
        Route::get('/analisis', [UserController::class, 'analisisPage'])->name('analisis');
        Route::view('/analisis/instagram', 'accesspoint/user/analisis_instagram_page')->name('analisisInstagram');
        Route::view('/analisis/facebook', 'accesspoint/user/analisis_facebook_page')->name('analisisFacebook');
        Route::view('/analisis/tiktok', 'accesspoint/user/analisis_tiktok_page')->name('analisisTiktok');
        Route::get('/hasil', [HasilAnalisisController::class, 'hasilPage'])->name('hasil');
        Route::get('/hasil/add-report', [HasilAnalisisController::class, 'addReportPage'])->name('addReportPage');
        Route::get('/hasil/view-pdf', [HasilAnalisisController::class, 'viewPDF'])->name('viewPDF');

        //Tab
        Route::post('/tabs/store', [TabsController::class, 'store'])->name('tabs.store');
        Route::delete('/tabs/delete/{slug}', [TabsController::class, 'delete'])->name('tabs.delete');
        Route::get('/tabs/t/{slug}', [TabsController::class, 'showDetails'])->name('tab.details');
        Route::get('/tabs/t/{slug}/instagram/{username}', [TabsController::class, 'showInstagramPage'])
            ->name('tab.instagram.page');
        Route::get('/tabs/t/{slug}/facebook/{username}', [TabsController::class, 'showFacebookPage'])
            ->name('tab.facebook.page');
        Route::get('/tabs/t/{slug}/tiktok/{username}', [TabsController::class, 'showTiktokPage'])
            ->name('tab.tiktok.page');


        Route::view('/analisis/tiktok/post', 'accesspoint/user/analisis_tiktok_post')->name('analisisTiktokPost');
        Route::view('/analisis/instagram/post', 'accesspoint/user/analisis_instagram_post')->name('analisisInstagramPost');

        // Payment / Subscription
        Route::middleware(['checkUserSubscription:false'])->group(function () {
            Route::get('/pricing', [SubscriptionController::class, 'paymentPage'])->name('payment');
            Route::get('/payment/handler/{id}', [SubscriptionController::class, 'paymentHandler'])->name('paymentHandler');
            Route::view('/payment/checkout', 'accesspoint/user/checkout_payment')->name('paymentCheckout');
        });

        Route::post('/payment/callback', [SubscriptionController::class, 'paymentCallback'])->name('paymentCallback');
        // Hasil Analisis Instagram
        Route::controller(HasilAnalisisInstagramController::class)->group(function () {
            Route::get("/instagram/hasil-analisis", "downloadPdf")->name("pdf.instagram");
            Route::get("/analisis-instagram", [HasilAnalisisInstagramController::class, "getRange"])->name("getRangeInstagram");
        });

        // Hasil Analisis Tiktok
        Route::controller(HasilAnalisisTiktokController::class)->group(function () {
            Route::get("/tiktok/hasil-analisis", "downloadPdf")->name("pdf.tiktok");
            Route::get("/analisis-tiktok", [HasilAnalisisTiktokController::class, "getRange"])->name("getRangeTiktok");
        });

        // Hasil Analisis Facebook
        Route::controller(HasilAnalisisFacebookController::class)->group(function () {
            Route::get("/facebook/hasil-analisis", "downloadPdf")->name("pdf.facebook");
        });

        Route::get('/hasil/add-report', [HasilAnalisisController::class, 'addReportPage'])->name('addReportPage');
        Route::get('/hasil/view-pdf', [HasilAnalisisController::class, 'viewPDF'])->name('viewPDF');
        Route::post('/hasil/add', [HasilAnalisisController::class, 'store'])->name("addReport");

        // Hasil Analisis Instagram
        Route::controller(HasilAnalisisInstagramController::class)->group(function () {
            Route::get("/instagram/hasil-analisis", "downloadPdf")->name("pdf.instagram");
            Route::get("/analisis-instagram", [HasilAnalisisInstagramController::class, "getRange"])->name("getRangeInstagram");
        });

        // Hasil Analisis Tiktok
        Route::controller(HasilAnalisisTiktokController::class)->group(function () {
            Route::get("/tiktok/hasil-analisis", "downloadPdf")->name("pdf.tiktok");
            Route::get("/analisis-tiktok", [HasilAnalisisTiktokController::class, "getRange"])->name("getRangeTiktok");
        });

        // Hasil Analisis Facebook
        Route::controller(HasilAnalisisFacebookController::class)->group(function () {
            Route::get("/facebook/hasil-analisis", "downloadPdf")->name("pdf.facebook");
        });

        // ide generator
        Route::get('/ide-generator', [IdeGeneratorController::class, 'ideGeneratorPage'])->name('ideGenerator');
        Route::post('/ide-generator', [IdeGeneratorController::class, 'ideGeneratorSend'])->name('ideGeneratorSend');
        Route::get('/ide-generator/history/uonegetWta{id}riVeKaP', [IdeGeneratorController::class, 'historyPage'])->name('ideGeneratorHistory');
        Route::resource('ide-generator', IdeGeneratorController::class)->only(['destroy', 'show']);

        // oauth handler
        Route::get('/user/instagram/redirect', [InstagramController::class, 'instaRedirect'])->name('instaRedirect');
        Route::get('/user/instagram/callback', [InstagramController::class, 'instaCallback'])->name('instaCallback');
        Route::get('/user/facebook/redirect', [FacebookController::class, 'facebookRedirect'])->name('facebookRedirect');
        Route::get('/user/facebook/callback', [FacebookController::class, 'facebookCallback'])->name('facebookCallback');
        Route::get('/user/tiktok/redirect', [TiktokController::class, 'tiktokRedirect'])->name('tiktokRedirect');
        Route::get('/user/tiktok/callback', [TiktokController::class, 'tiktokCallback'])->name('tiktokCallback');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::resource('contact-us', ContactUsController::class);
Route::view('/privacy-policy', 'home/privacy')->name('privacy');
Route::view('/terms-condition', 'home/terms')->name('terms');
Route::get("/download-xlsx", [HasilAnalisisController::class, "export"])->name("downloadXlsx");
Route::get("/report-page", [HasilAnalisisController::class, "addReportPage"])->name("reportPage");
Route::get("/analisis-instagram", [HasilAnalisisInstagramController::class, "getRange"])->name("getRangeInstagram");
Route::get("/analisis-tiktok", [HasilAnalisisTiktokController::class, "getRange"])->name("getRangeTiktok");

//Auth::routes();