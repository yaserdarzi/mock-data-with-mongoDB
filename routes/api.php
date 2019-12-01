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
    Route::get('People/subject/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'آقا'],
            ['id' => 2, 'title' => 'خانم'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/gender/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'مرد'],
            ['id' => 2, 'title' => 'زن'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/religion/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'اسلام'],
            ['id' => 2, 'title' => 'زرتشت'],
            ['id' => 3, 'title' => 'مسیحیت'],
            ['id' => 4, 'title' => 'یهودیت'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/religionBranch/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'شیعه'],
            ['id' => 2, 'title' => 'سنی'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/educationLevel/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'زیر دیپلم'],
            ['id' => 2, 'title' => 'دیپلم'],
            ['id' => 3, 'title' => 'لیسانس'],
            ['id' => 4, 'title' => 'فوق لیسانس'],
            ['id' => 5, 'title' => 'دکترا'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/maritalStatus/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'مجرد'],
            ['id' => 2, 'title' => 'متاهل'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/nationality/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'ایران'],
            ['id' => 2, 'title' => 'آمریکا'],
            ['id' => 3, 'title' => 'هلند'],
            ['id' => 4, 'title' => 'اکراین'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/citizenship/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'ایران'],
            ['id' => 2, 'title' => 'آمریکا'],
            ['id' => 3, 'title' => 'هلند'],
            ['id' => 4, 'title' => 'اکراین'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/birthPlace/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'ایران'],
            ['id' => 2, 'title' => 'آمریکا'],
            ['id' => 3, 'title' => 'هلند'],
            ['id' => 4, 'title' => 'اکراین'],
        ];
        return response()->json($titleId);
    });
    Route::get('People/birhplaceIssuePlace/list', function () {
        $titleId = [
            ['id' => 1, 'title' => 'ایران'],
            ['id' => 2, 'title' => 'آمریکا'],
            ['id' => 3, 'title' => 'هلند'],
            ['id' => 4, 'title' => 'اکراین'],
        ];
        return response()->json($titleId);
    });
    Route::resource('People', 'PersonController');

    //Company
    Route::get('Organizations/type', function () {
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
    Route::resource('Organizations', 'CompanyController');

    //Currency
    Route::get('Currencies/symbol/list', function () {
        $signsList = [
            ['id' => 1, 'title' => '₽'],
            ['id' => 2, 'title' => '؋'],
            ['id' => 3, 'title' => '€'],
            ['id' => 4, 'title' => 'L'],
            ['id' => 5, 'title' => '£'],
            ['id' => 6, 'title' => 'د.ج'],
            ['id' => 7, 'title' => 'Kz'],
            ['id' => 8, 'title' => '$'],
            ['id' => 9, 'title' => 'դր'],
            ['id' => 10, 'title' => 'ƒ'],
            ['id' => 11, 'title' => '₼'],
            ['id' => 12, 'title' => '.د.ب'],
            ['id' => 13, 'title' => '৳'],
            ['id' => 14, 'title' => 'Br'],
            ['id' => 15, 'title' => 'Fr'],
            ['id' => 16, 'title' => 'Nu'],
            ['id' => 17, 'title' => '₹'],
            ['id' => 18, 'title' => 'Bs'],
            ['id' => 19, 'title' => 'P'],
            ['id' => 20, 'title' => 'R$'],
            ['id' => 21, 'title' => 'лв'],
            ['id' => 22, 'title' => '៛'],
            ['id' => 23, 'title' => '元'],
            ['id' => 24, 'title' => '₡'],
            ['id' => 25, 'title' => 'kn'],
            ['id' => 26, 'title' => 'Kč'],
            ['id' => 27, 'title' => 'Nfk'],
            ['id' => 28, 'title' => 'D'],
            ['id' => 29, 'title' => '₾'],
            ['id' => 30, 'title' => '₵'],
            ['id' => 31, 'title' => 'Q'],
            ['id' => 32, 'title' => '﷼'],
            ['id' => 33, 'title' => 'ع.د'],
            ['id' => 34, 'title' => '₪'],
            ['id' => 35, 'title' => 'د.ا'],
            ['id' => 36, 'title' => 'Sh'],
            ['id' => 37, 'title' => '₩'],
            ['id' => 38, 'title' => 'с'],
            ['id' => 39, 'title' => '₭'],
            ['id' => 40, 'title' => 'ل.ل'],
            ['id' => 41, 'title' => 'L'],
            ['id' => 42, 'title' => 'P'],
            ['id' => 43, 'title' => 'ден'],
            ['id' => 44, 'title' => 'Ar'],
            ['id' => 45, 'title' => '.ރ'],
            ['id' => 46, 'title' => 'UM'],
            ['id' => 47, 'title' => '₮'],
            ['id' => 48, 'title' => 'C$'],
            ['id' => 49, 'title' => '₦'],
            ['id' => 50, 'title' => '₺'],
            ['id' => 51, 'title' => 'B'],
            ['id' => 52, 'title' => '₲'],
            ['id' => 53, 'title' => 'S'],
            ['id' => 54, 'title' => '₱'],
            ['id' => 55, 'title' => 'zł'],
            ['id' => 56, 'title' => 'ر.ق'],
            ['id' => 57, 'title' => 'lei'],
            ['id' => 58, 'title' => '₽'],
            ['id' => 59, 'title' => 'T'],
            ['id' => 60, 'title' => 'дин'],
            ['id' => 61, 'title' => '₨'],
            ['id' => 62, 'title' => 'ரூ'],
            ['id' => 63, 'title' => '¥'],
            ['id' => 64, 'title' => 'so'],
            ['id' => 65, 'title' => '₴'],
            ['id' => 66, 'title' => 'د.إ'],
        ];
        return response()->json($signsList);
    });
    Route::get('Currencies/subUnitTitle/list', function () {
        $subCurrencyList = [
            ['id' => 1, 'title' => 'سنت'],
            ['id' => 2, 'title' => 'کپک'],
            ['id' => 3, 'title' => 'پول'],
            ['id' => 4, 'title' => 'کیندارکه'],
            ['id' => 5, 'title' => 'پنی'],
            ['id' => 6, 'title' => 'سانتیم'],
            ['id' => 7, 'title' => 'سنتیمو'],
            ['id' => 8, 'title' => 'سنتاو'],
            ['id' => 9, 'title' => 'لوما'],
            ['id' => 10, 'title' => 'کپیک'],
            ['id' => 11, 'title' => 'فیلس'],
            ['id' => 12, 'title' => 'پویشا'],
            ['id' => 13, 'title' => 'کاپیکا'],
            ['id' => 14, 'title' => 'سنتیمه'],
            ['id' => 15, 'title' => 'چِتروم'],
            ['id' => 16, 'title' => 'پایسا'],
            ['id' => 17, 'title' => 'فنینگ'],
            ['id' => 18, 'title' => 'ثربه'],
            ['id' => 19, 'title' => 'سن'],
            ['id' => 20, 'title' => 'استوتینکا'],
            ['id' => 21, 'title' => 'فن'],
            ['id' => 22, 'title' => 'لیپا'],
            ['id' => 23, 'title' => 'هاله'],
            ['id' => 24, 'title' => 'اُره'],
            ['id' => 25, 'title' => 'پیاستره'],
            ['id' => 26, 'title' => 'بوتوت'],
            ['id' => 27, 'title' => 'تتری'],
            ['id' => 28, 'title' => 'پسوا'],
            ['id' => 29, 'title' => 'فیلر'],
            ['id' => 30, 'title' => 'ایریر'],
            ['id' => 31, 'title' => 'پایسا'],
            ['id' => 32, 'title' => 'ریال'],
            ['id' => 33, 'title' => 'آگورا'],
            ['id' => 34, 'title' => 'تین'],
            ['id' => 35, 'title' => 'چن'],
            ['id' => 36, 'title' => 'جئون'],
            ['id' => 37, 'title' => 'ات'],
            ['id' => 38, 'title' => 'درهم'],
            ['id' => 39, 'title' => 'راپن'],
            ['id' => 40, 'title' => 'او'],
            ['id' => 41, 'title' => 'دنی'],
            ['id' => 42, 'title' => 'ایرایمبیلانجا'],
            ['id' => 43, 'title' => 'تامبالا'],
            ['id' => 44, 'title' => 'لاری'],
            ['id' => 45, 'title' => 'خُمس'],
            ['id' => 46, 'title' => 'بان'],
            ['id' => 47, 'title' => 'منگو'],
            ['id' => 48, 'title' => 'یا'],
            ['id' => 49, 'title' => 'کُبو'],
            ['id' => 50, 'title' => 'کروش'],
            ['id' => 51, 'title' => 'توآ'],
            ['id' => 52, 'title' => 'گروز'],
            ['id' => 53, 'title' => 'بان'],
            ['id' => 54, 'title' => 'هالالا'],
            ['id' => 55, 'title' => 'پارا'],
            ['id' => 56, 'title' => 'راپن'],
            ['id' => 57, 'title' => 'دیرام'],
            ['id' => 58, 'title' => 'ساتانگ'],
            ['id' => 59, 'title' => 'میلیمه'],
            ['id' => 60, 'title' => 'کپیکا'],
            ['id' => 61, 'title' => 'تیین'],
            ['id' => 62, 'title' => '[Q]'],
            ['id' => 63, 'title' => 'گوی'],
            ['id' => 64, 'title' => 'ثبه']
        ];
        return response()->json($subCurrencyList);
    });
    Route::get('Currencies/abbreviation/list', function () {
        $abbreviationList = [
            ['id' => 1, 'title' => 'USD'],
            ['id' => 2, 'title' => 'AUD'],
            ['id' => 3, 'title' => 'CAD'],
            ['id' => 4, 'title' => 'CHF'],
            ['id' => 5, 'title' => 'JPY'],
            ['id' => 6, 'title' => 'NZD'],
            ['id' => 7, 'title' => 'EUR'],
            ['id' => 8, 'title' => 'GBP'],
            ['id' => 9, 'title' => 'SEK'],
            ['id' => 10, 'title' => 'DKK'],
            ['id' => 11, 'title' => 'MXN'],
            ['id' => 12, 'title' => 'PLN'],
            ['id' => 13, 'title' => 'RUB'],
            ['id' => 14, 'title' => 'TRY'],
            ['id' => 15, 'title' => 'ZAR'],
            ['id' => 16, 'title' => 'CNH']
        ];
        return response()->json($abbreviationList);
    });
    Route::get('Currencies/roundingMethod/list', function () {
        $roundList = [
            ['id' => 1, 'title' => 'گرد گردن به سمت بالا'],
            ['id' => 2, 'title' => 'گرد کردن به سمت پایین'],
            ['id' => 3, 'title' => 'گرد کردن اتوماتیک'],
        ];
        return response()->json($roundList);
    });
    Route::resource('Currencies', 'CurrencyController');

    //Currency Convection
    Route::resource('currencyConvection', 'CurrencyConvectionController');

    //FinancialPeriods
    Route::resource('FinancialPeriods', 'FinancialPeriodController');

    //Ledger
    Route::resource('Ledgers', 'LedgerController');

    //costCenter
    Route::get('costCenter/types/list', function () {
        $types = [
            ['id' => 1, 'title' => 'اداری'],
            ['id' => 2, 'title' => 'تولیدی'],
            ['id' => 3, 'title' => 'خدماتی'],
            ['id' => 4, 'title' => 'پیمانکار خارجی'],
        ];
        return response()->json($types);
    });
    Route::resource('costCenter', 'CostCenterController');

    //DetailAccountType
    Route::resource('detailAccountType', 'DetailAccountTypeController');

    //DetailAccountType
    Route::resource('detailAccount', 'DetailAccountController');

    //Geolocation
    Route::get('geolocation/levels/list', function () {
        $types = [
            ['id' => 1, 'title' => 'کشور'],
            ['id' => 2, 'title' => 'استان'],
            ['id' => 3, 'title' => 'شهر'],
            ['id' => 4, 'title' => 'شهرستان'],
            ['id' => 5, 'title' => 'منطقه'],
        ];
        return response()->json($types);
    });
    Route::resource('geolocation', 'GeolocationController');

});
