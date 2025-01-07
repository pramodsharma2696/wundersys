<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
     return view('index');
});
Route::get('/faq', function () {
     return view('faq');
});

// company

Route::get('/why-choose-us', function () {
    return view('company.why-choose-us');
});
Route::get('/contact-us', function () {
    return view('company.contact-us');
});
Route::get('/news', function () {
    return view('company.news');
});
Route::get('/security-funds', function () {
    return view('company.security-funds');
});

// Trading
Route::get('/forex', function () {
    return view('trading.forex');
});
Route::get('/commodities', function () {
    return view('trading.commodities');
});
Route::get('/indices', function () {
    return view('trading.indices');
});
Route::get('/us-stocks', function () {
    return view('trading.us-stocks');
});

// Accounts

Route::get('/all-accounts', function () {
    return view('account.all-accounts');
});
Route::get('/standard-account', function () {
    return view('account.standard-account');
});
Route::get('/primium-account', function () {
    return view('account.primium-account');
});
Route::get('/open-an-account', function () {
    return view('account.open-an-account');
});
Route::get('/funds-withdrawals', function () {
    return view('account.funds-withdrawals');
});
