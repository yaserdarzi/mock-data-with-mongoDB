<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::namespace('Api\V1')->prefix('/v1/')->group(function () {

    //person
    Route::resource('person', 'PersonController');

    //Company
    Route::resource('company', 'CompanyController');

    //Cost Center
    Route::resource('costCenter', 'CostCenterController');

    //Currency
    Route::resource('currency', 'CurrencyController');

    //Currency Convection
    Route::resource('currencyConvection', 'CurrencyConvectionController');

});
