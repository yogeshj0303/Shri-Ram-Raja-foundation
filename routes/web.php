<?php

use App\UsersModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ServiceSectionController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageSettingsController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\SeoToolsController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminWithdrawController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserCampaignController;
use App\Http\Controllers\Auth\ProfileLoginController;
use App\Http\Controllers\Auth\ProfileRegistrationController;
use App\Http\Controllers\Auth\ProfileResetPassController;
use App\Http\Controllers\Auth\NewAuthController;
use App\Http\Controllers\Auth\BackendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AddressController;

// Route::get('/', 'FrontEndController@index');

Route::get('/', [FrontEndController::class, 'index']);
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/faq', [FrontEndController::class, 'faq'])->name('faq');
Route::get('/volunteer', [FrontEndController::class, 'volunteer'])->name('volunteer');
Route::get('/campaigns', [FrontEndController::class, 'campaigns'])->name('campaigns');
Route::get('/services/{category}', [FrontEndController::class, 'category']);
Route::post('/campaign/{id}/donate', [FrontEndController::class, 'donate']);
Route::get('/campaign/{id}/donate', [FrontEndController::class, 'donates']);
Route::get('/alldonate', [FrontEndController::class, 'alldonates'])->name('alldonate');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/subscribe', [FrontEndController::class, 'subscribe']);
Route::post('/profile/email', [FrontEndController::class, 'usermail']);
Route::post('/contact/email', [FrontEndController::class, 'contactmail']);
Route::get('/viewcampaign/{id}', [FrontEndController::class, 'viewcampaign'])->name('viewcampaign');
Route::get('/category/{category}', [FrontEndController::class, 'category']);
Route::get('/event', [FrontEndController::class, 'allblog'])->name('event');
Route::get('/eventdetails/{id}', [FrontEndController::class, 'blogdetails'])->name('eventdetails');
Route::post('/volunteerstore', [FrontEndController::class, 'volunteerstore'])->name('volunteerstore');
Route::get('/media', [FrontEndController::class, 'service'])->name('media');

// Route::get('/media', function () {
//     return view('media');
// });

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.login');

Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/privacy', function () {
    return view('privacy');
});

Auth::routes();

// Route::get('/admin/dashboard', 'HomeController@index');
Route::get('/admin/dashboard', [HomeController::class, 'index']);
Route::get('admin/settings/logo', [SettingsController::class, 'logoform']);
Route::get('admin/settings/favicon', [SettingsController::class, 'faviconform']);
Route::get('admin/settings/contents', [SettingsController::class, 'contentsform']);
Route::get('admin/settings/address', [SettingsController::class, 'addressform']);
Route::get('admin/settings/background', [SettingsController::class, 'backgroundform']);
Route::get('admin/settings/payment', [SettingsController::class, 'paymentform']);
Route::get('admin/settings/info', [SettingsController::class, 'aboutform']);
Route::get('admin/settings/footer', [SettingsController::class, 'footerform']);

Route::post('admin/settings/title', [SettingsController::class, 'title']);
Route::post('admin/settings/payment', [SettingsController::class, 'payment']);
Route::post('admin/settings/about', [SettingsController::class, 'about']);
Route::post('admin/settings/address', [SettingsController::class, 'address']);
Route::post('admin/settings/footer', [SettingsController::class, 'footer']);
Route::post('admin/settings/logo', [SettingsController::class, 'logo']);
Route::post('admin/settings/favicon', [SettingsController::class, 'favicon']);
Route::post('admin/settings/background', [SettingsController::class, 'background']);
Route::resource('/admin/settings', SettingsController::class);

Route::get('admin/language-settings', [SettingsController::class, 'setlanguage']);
Route::post('admin/settings/language', [SettingsController::class, 'language']);
Route::get('admin/contact', [ContactController::class, 'admincontactindex']);
Route::post('contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::get('contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::get('admin/theme-color', [SettingsController::class, 'themecolors']);
Route::post('admin/theme-color', [SettingsController::class, 'themecolor']);

Route::get('/admin/blog/titles', [BlogController::class, 'titleform']);
Route::post('/admin/blog/titles', [BlogController::class, 'titles']);
Route::resource('/admin/blog', BlogController::class);

Route::resource('/admin/sliders', SliderController::class);
Route::resource('/admin/staffs', StaffController::class);

Route::get('/admin/service/titles', [ServiceSectionController::class, 'titlesform']);
Route::post('/admin/service/title', [ServiceSectionController::class, 'titles']);
Route::resource('/admin/service', ServiceSectionController::class);

Route::get('/admin/testimonial/titles', [TestimonialController::class, 'titlesform']);
Route::post('/admin/testimonial/titles', [TestimonialController::class, 'titles']);
Route::resource('/admin/testimonial', TestimonialController::class);

Route::post('/admin/package/titles', [PackageController::class, 'titles']);
Route::resource('/admin/package', PackageController::class);

Route::get('/admin/campaign/pending', [CampaignController::class, 'pending']);
Route::get('/admin/campaign/{id}/pending', [CampaignController::class, 'pendingview']);
Route::get('/admin/campaign/{id}/accept', [CampaignController::class, 'accept']);
Route::get('/admin/campaign/{id}/reject', [CampaignController::class, 'reject']);
Route::get('/admin/campaign/{id}/hardreject', [CampaignController::class, 'hardreject']);

Route::get('/admin/campaign/titles', [CampaignController::class, 'title']);
Route::post('/admin/campaign/titles', [CampaignController::class, 'titles']);
Route::get('/admin/campaign/{id}/delete', [CampaignController::class, 'delete']);
Route::get('/admin/campaign/{id}/open', [CampaignController::class, 'open']);
Route::get('/admin/campaign/{id}/close', [CampaignController::class, 'close']);
Route::get('/admin/campaign/{id}/withdraw', [CampaignController::class, 'withdraw']);
Route::post('/admin/campaign/{id}/withdraw', [CampaignController::class, 'withdraws']);
Route::resource('/admin/campaign', CampaignController::class);

Route::resource('/admin/counter', CounterController::class);

Route::get('/admin/portfolio/titles', [PortfolioController::class, 'titlesform']);
Route::post('/admin/portfolio/titles', [PortfolioController::class, 'titles']);
Route::resource('/admin/portfolio', PortfolioController::class);

Route::get('/admin/volunteer/titles', [VolunteerController::class, 'titlesform']);
Route::post('/admin/volunteer/titles', [VolunteerController::class, 'titles']);
Route::resource('/admin/volunteer', VolunteerController::class);

Route::get('/admin/category/titles', [CategoryController::class, 'titlesform']);
Route::post('/admin/category/titles', [CategoryController::class, 'titles']);
Route::resource('/admin/category', CategoryController::class);

Route::resource('/admin/services', ServiceController::class);

Route::get('admin/faq/{id}/edit', [PageSettingsController::class, 'faqedit']);

Route::get('admin/faq/add', [PageSettingsController::class, 'addfaq']);
Route::get('admin/faq/{id}/delete', [PageSettingsController::class, 'faqdelete']);
Route::get('admin/faq/{id}/edit', [PageSettingsController::class, 'faqedit']);
Route::post('admin/faq/{id}/update', [PageSettingsController::class, 'faqupdate']);
Route::post('admin/pagesettings/faqsave', [PageSettingsController::class, 'faqsave']);

Route::get('admin/pagesettings/splits', [PageSettingsController::class, 'splits']);
Route::get('admin/pagesettings/brands', [PageSettingsController::class, 'brands']);
Route::get('admin/brand/create', [PageSettingsController::class, 'brandform']);
Route::post('admin/brand/save', [PageSettingsController::class, 'brandstore']);
Route::get('admin/brand/delete/{id}', [PageSettingsController::class, 'branddelete']);
Route::get('admin/split/{id}/edit', [PageSettingsController::class, 'splitedit']);
Route::post('admin/splits/{id}/edit', [PageSettingsController::class, 'splitupdate']);
Route::get('admin/pagesettings/about', [PageSettingsController::class, 'aboutpage']);
Route::get('admin/pagesettings/faq', [PageSettingsController::class, 'faqpage']);
Route::get('admin/pagesettings/contact', [PageSettingsController::class, 'contactpage']);
Route::post('admin/pagesettings/about', [PageSettingsController::class, 'about']);
Route::post('admin/pagesettings/faq', [PageSettingsController::class, 'faq']);
Route::post('admin/pagesettings/contact', [PageSettingsController::class, 'contact']);
Route::resource('/admin/pagesettings', PageSettingsController::class);

Route::get('admin/ads/status/{id}/{status}', [AdvertiseController::class, 'status']);

Route::resource('/admin/ads', AdvertiseController::class);
Route::resource('/admin/social', SocialLinkController::class);

Route::get('/admin/tools/meta', [SeoToolsController::class, 'metaform']);
Route::post('/admin/tools/meta', [SeoToolsController::class, 'metaupdate']);
Route::resource('/admin/tools/google', SeoToolsController::class);
Route::get('admin/subscribers/download', [SubscriberController::class, 'download']);

Route::resource('/admin/subscribers', SubscriberController::class);
Route::post('/admin/adminpassword/change/{id}', [AdminProfileController::class, 'changepass']);
Route::get('/admin/adminpassword', [AdminProfileController::class, 'password']);
Route::resource('/admin/adminprofile', AdminProfileController::class);

Route::get('/admin/withdraws/accept/{id}', [AdminWithdrawController::class, 'accept']);
Route::get('/admin/withdraws/reject/{id}', [AdminWithdrawController::class, 'reject']);
Route::resource('/admin/withdraws', AdminWithdrawController::class);

Route::get('/admin/users/email/{id}', [UsersController::class, 'email']);
Route::get('/admin/users/status/{id}/{status}', [UsersController::class, 'status']);
Route::post('/admin/users/emailsend', [UsersController::class, 'sendemail']);
Route::resource('/admin/users', UsersController::class);

Route::post('/payment', [PaymentController::class, 'store'])->name('payment.submit');
Route::get('/payment/cancle', [PaymentController::class, 'paycancle'])->name('payment.cancle');
Route::get('/payment/return', [PaymentController::class, 'payreturn'])->name('payment.return');
Route::post('/payment/notify', [PaymentController::class, 'notify'])->name('payment.notify');

Route::post('/stripe-submit', [StripeController::class, 'store'])->name('stripe.submit');

Route::get('user/dashboard', [UserProfileController::class, 'index'])->name('user.dashboard');

Route::post('/user/password/change/{id}', [UserProfileController::class, 'changepass']);
Route::get('/user/password', [UserProfileController::class, 'password']);
Route::get('/user/profile', [UserProfileController::class, 'profile']);
Route::post('/user/update/{id}', [UserProfileController::class, 'update']);

Route::get('/user/campaign/{id}/delete', [UserCampaignController::class, 'delete']);
Route::get('/user/campaign/{id}/open', [UserCampaignController::class, 'open']);
Route::get('/user/campaign/{id}/close', [UserCampaignController::class, 'close']);
Route::get('/user/campaign/{id}/withdraw', [UserCampaignController::class, 'withdraw']);
Route::post('/user/campaign/{id}/withdraw', [UserCampaignController::class, 'withdraws']);
Route::resource('user/campaign', UserCampaignController::class);

Route::get('/user/login', [ProfileLoginController::class, 'showLoginFrom'])->name('user.login');
Route::post('/user/login', [ProfileLoginController::class, 'login'])->name('user.login.submit');
Route::get('/user/registration', [ProfileRegistrationController::class, 'showRegistrationForm'])->name('user.reg');
Route::post('/user/registration', [ProfileRegistrationController::class, 'register'])->name('user.reg.submit');

Route::get('/user/forgot', [ProfileResetPassController::class, 'showForgotForm'])->name('user.forgotpass');
Route::post('/user/forgot', [ProfileResetPassController::class, 'resetPass'])->name('user.forgotpass.submit');





















Route::resource('adminabout', AboutController::class)->middleware('auth');
Route::resource('activity', ActivityController::class)->middleware('auth');
Route::resource('address', AddressController::class)->middleware('auth');





Route::get('/newlogin', [NewAuthController::class, 'showLoginForm'])->name('newlogin');
Route::get('/newlogout',[NewAuthController::class, 'logout'])->name('newlogout')->middleware('auth');

Route::post('/newlogin', [NewAuthController::class, 'login'])->name('newloginpage');
Route::get('/newdashboard', function () {
    return view('New-admin.dashboard');
})->middleware('auth');

Route::get('/change-password', function () {
    return view('New-admin.changepassword');
});
Route::post('/update-password', [NewAuthController::class, 'updatePassword'])->name('update.password');

Route::get('/contacts', [BackendController::class, 'showContacts'])->name('contacts')->middleware('auth');
Route::delete('/contact-delete/{id}', [BackendController::class, 'destroyContact'])->name('Contact.destroy');
Route::get('/show-volunteer', [BackendController::class, 'showVolunteer'])->name('showVolunteer')->middleware('auth');
Route::delete('/volunteer-event/{id}', [BackendController::class, 'destroyVolunteer'])->name('Volunteer.destroy');

Route::get('/show-media', [BackendController::class, 'showMedia'])->name('showMedia')->middleware('auth');
Route::get('/create-media', [BackendController::class, 'createMedia'])->name('createMedia')->middleware('auth');
Route::post('/upload-media', [BackendController::class, 'storeMedia'])->name('media.store');
Route::delete('/delete-media/{id}', [BackendController::class, 'destroyMedia'])->name('media.destroy');

// event Section Campaigns

Route::get('/show-event', [BackendController::class, 'showEvent'])->name('showEvent')->middleware('auth');
Route::get('/create-event', [BackendController::class, 'createEvent'])->name('createEvent')->middleware('auth');
Route::post('/upload-event', [BackendController::class, 'storeEvent'])->name('Event.store');
Route::delete('/delete-event/{id}', [BackendController::class, 'destroyEvent'])->name('Event.destroy');


// Awards section

Route::get('/show-awards', [BackendController::class, 'showAwards'])->name('showAwards')->middleware('auth');
Route::get('/create-awards', [BackendController::class, 'createAwards'])->name('createAwards')->middleware('auth');
Route::post('/upload-awards', [BackendController::class, 'storeAwards'])->name('Awards.store');
Route::delete('/delete-awards/{id}', [BackendController::class, 'destroyAwards'])->name('Awards.destroy');

Route::get('/show-Campaigns', [BackendController::class, 'showCampaigns'])->name('showCampaigns')->middleware('auth');
Route::get('/create-Campaigns', [BackendController::class, 'createCampaigns'])->name('createCampaigns')->middleware('auth');
Route::post('/upload-Campaigns', [BackendController::class, 'storeCampaigns'])->name('Campaigns.store');
Route::delete('/delete-Campaigns/{id}', [BackendController::class, 'destroyCampaigns'])->name('Campaigns.destroy');
Route::get('/edit-campaigns/{id}/edit', [BackendController::class, 'editCampaigns'])->name('editcampaigns.edit');
Route::put('/edit-campaigns/{id}',  [BackendController::class, 'updateCampaigns'])->name('editcampaigns.update');

Route::get('/edit-events/{id}/edit', [BackendController::class, 'editEvents'])->name('editevents.edit');
Route::put('/edit-events/{id}',  [BackendController::class, 'updateEvents'])->name('editevents.update');

Route::get('/donation-view', function () {
    return view('New-admin.donation');
})->middleware('auth');
Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');
Route::delete('/donate/{id}', [DonationController::class, 'destroy'])->name('donate.destroy');