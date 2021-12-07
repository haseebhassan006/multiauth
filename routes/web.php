<?php

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



Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Admin\Auth\LoginController@login');
   Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');
   Route::get('password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
   Route::post('password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
   Route::get('password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('password.reset');
   Route::post('password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.update');

   Route::middleware('auth:admin')->group(function(){
       Route::get('dashboard','Admin\DashboardController@index')->name('dashboard');


   });
});

Route::prefix('masjid')->name('masjid.')->group(function(){

   Route::get('login', 'Masjid\Auth\LoginController@showLoginForm')->name('login');
   Route::post('login', 'Masjid\Auth\LoginController@login');
   Route::post('logout', 'Masjid\Auth\LoginController@logout')->name('logout');
   Route::get('password/reset', 'Masjid\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
   Route::post('password/email', 'Masjid\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
   Route::get('password/reset/{token}', 'Masjid\Auth\ResetPasswordController@showResetForm')->name('password.reset');
   Route::post('password/reset', 'Masjid\Auth\ResetPasswordController@reset')->name('password.update');
   Route::get('register', 'Masjid\Auth\RegisterController@showRegistrationForm')->name('register');
   Route::post('register', 'Masjid\Auth\RegisterController@register');
   Route::middleware('auth:masjid')->group(function(){
    Route::get('dashboard','Masjid\DashboardController@index')->name('dashboard');
});
});

Route::prefix('serviceprovider')->name('serviceprovider.')->group(function(){

    Route::get('login', 'ServiceProvider\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'ServiceProvider\Auth\LoginController@login');
    Route::post('logout', 'ServiceProvider\Auth\LoginController@logout')->name('logout');
    Route::get('password/reset','ServiceProvider\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ServiceProvider\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ServiceProvider\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ServiceProvider\Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('register', 'ServiceProvider\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'ServiceProvider\Auth\RegisterController@register');
    Route::middleware('auth:serviceprovider')->group(function(){
    Route::get('dashboard','ServiceProvider\DashboardController@index')->name('dashboard');
 });
 });

Auth::routes();

Route::prefix('donor')->middleware('auth')->group(function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
     Route::get('profile','DonorController@profile')->name('profile');
});



Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/requests', 'HomeController@requests')->name('requests');
Route::get('/donationdetail', 'HomeController@donationDetail')->name('donationDetail');
Route::get('/urgentdonations', 'HomeController@urgentDonation')->name('urgent.donations');


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
