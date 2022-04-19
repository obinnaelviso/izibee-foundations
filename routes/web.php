<?php

use App\Http\Controllers\HomeController;
use App\Mail\DonationMailAdmin;
use App\Mail\VolunteerMailClient;
use Illuminate\Support\Facades\Mail;
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
Route::get('/test-email', function() {
//     Mail::to('dreamor47@gmail.com')->send(new DonationMailAdmin([
//         "name" => "home",
//         "email" => "dreamor47@gmail.com",
//         "campaign" => "campaign 1",
//         "campaign_news" => "something else",
//         "amount" => 555,
//         "recurring_payment" => "sure",
//         "payment_method" => "bank-transfer",
//         "reference" => "44444"
//     ]));
    Mail::to('dreamor47@gmail.com')->send(new VolunteerMailClient);
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/donation', [HomeController::class, 'donation'])->name('donation');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/our-programs', [HomeController::class, 'causes'])->name('causes');
Route::get('/our-programs/sensitization-campaign', [HomeController::class, 'causesSensitizationCampaign'])->name('causes.sensitization-campaign');
Route::get('/our-programs/help-out-of-school-children', [HomeController::class, 'causesHelpSchoolChildren'])->name('causes.help-school-children');
Route::get('/our-programs/support-the-less-privileged', [HomeController::class, 'causesSupportLessPrivileged'])->name('causes.support-less-privileged');
Route::get('/our-programs/provide-clean-portable-water', [HomeController::class, 'causesProvideCleanWater'])->name('causes.provide-clean-water');
Route::get('/our-programs/youth-empowerment', [HomeController::class, 'causesYouthEmpowerment'])->name('causes.youth-empowerment');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/volunteer', [HomeController::class, 'volunteer'])->name('volunteer');
Route::get('/volunteer/community-service-pledge', [HomeController::class, 'volunteerCommunityServicePledge'])->name('volunteer.community-service-pledge');
Route::get('/volunteer/register', [HomeController::class, 'volunteerRegister'])->name('volunteer-register');
