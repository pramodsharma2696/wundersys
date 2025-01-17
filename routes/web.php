<?php

use App\Http\Controllers\HomeController;
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
Route::get('/news-details', function () {
    return view('company.news-details');
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
Route::get('/cryptocurrencies', function () {
    return view('trading.cryptocurrencies');
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
Route::get('/ecn-account', function () {
    return view('account.ecn-account');
});
Route::get('/elite-account', function () {
    return view('account.elite-account');
});
Route::get('/vip-account', function () {
    return view('account.vip-account');
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


// Tools

Route::get('/profit-calculator', function () {
    return view('tools.profit-calculator');
});
Route::get('/margin-calculator', function () {
    return view('tools.margin-calculator');
});
Route::get('/pip-calculator', function () {
    return view('tools.pip-calculator');
});
Route::get('/economic-calendar', function () {
    return view('tools.economic-calendar');
});

// knowledge-portal


Route::get('/knowledge-portal', function () {
    return view('knowledge.knowledge-portal');
});
Route::get('/forex-glossary', function () {
    return view('knowledge.forex-glossary');
});
Route::get('/cme-group-education', function () {
    return view('knowledge.cme-group-education');
});


// Basics of trading

Route::get('/basics-trading',[HomeController::class,'BasicTrading']);
Route::get('/fundamental-analysis',[HomeController::class,'FundamentalAnalysis']);
Route::get('/technical-analysis',[HomeController::class,'TechnicalAnalysis']);
Route::get('/psychology',[HomeController::class,'Psychology']);
