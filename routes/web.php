<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\UserDetailsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Registration;


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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/Registration', 'App\Http\Controllers\Registration@index')->name('test');
Route::post('/getProvince', 'App\Http\Controllers\Registration@getProvince');
Route::post('/getCity', 'App\Http\Controllers\Registration@getCity');
Route::post('/getBarangay', 'App\Http\Controllers\Registration@getBarangay');




Route::middleware(['auth'])->group(function (){



    Route::get('home', function () {
        return view('user.home');
    })->name('home');


    Route::get('main', function () {
        return view('layouts.main');
    })->name('main');

    Route::get('user/qr', 'App\Http\Controllers\Auth\RegisteredUserController@qrcode')->name('user.qr');
    Route::get('user/logs', 'App\Http\Controllers\Auth\RegisteredUserController@logs')->name('user.logs');

    Route::get('user/change-password', 'App\Http\Controllers\Auth\RegisteredUserController@change_password')->name('user.change_password');
    Route::post('user/update-password', 'App\Http\Controllers\Auth\RegisteredUserController@update_password')->name('user.update_password');

    Route::get('user/account-settings', 'App\Http\Controllers\Auth\RegisteredUserController@account_settings')->name('user.account_settings');
    Route::post('user/update-account', 'App\Http\Controllers\Auth\RegisteredUserController@update_account')->name('user.update_account');

    Route::resource('user', RegisteredUserController::class);
    Route::resource('userdetails',UserDetailsController::class);


});
require __DIR__.'/auth.php';


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/home', function () {
    return view('user.home');
})->middleware('verified')->name('home');






//route::get('users-index', [App\Http\Controllers\Auth\RegisteredUserController::class, 'index'])->name('users.index');

