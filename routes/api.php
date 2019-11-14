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
    Route::get('company/type', function () {
        $companyType = [
            ['id' => 1, 'title' => 'سهامی عام'],
            ['id' => 2, 'title' => 'سهامی خاص'],
            ['id' => 3, 'title' => 'مسئولیت محدود'],
            ['id' => 4, 'title' => 'تضامنی'],
            ['id' => 5, 'title' => 'تعاونی'],
            ['id' => 6, 'title' => 'سازمان'],
            ['id' => 7, 'title' => 'اداره کل'],
            ['id' => 8, 'title' => 'وزارتخانه'],
            ['id' => 9, 'title' => 'ارگان دولتی'],
            ['id' => 10, 'title' => 'سایر'],
            ['id' => 11, 'title' => 'سهامی']
        ];
        return response()->json($companyType);
    });
    Route::resource('company', 'CompanyController');

    //Cost Center
    Route::resource('costCenter', 'CostCenterController');

    //Currency
    Route::resource('currency', 'CurrencyController');

    //Currency Convection
    Route::resource('currencyConvection', 'CurrencyConvectionController');

    //Geolocation
    Route::resource('geolocation', 'GeolocationController');

    //Geolocation
    Route::resource('financialPeriod', 'FinancialPeriodController');

});
