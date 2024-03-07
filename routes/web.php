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

Route::get('/', function () {
    $title = 'Techres';
    return view('welcome', compact('title'));
});

Route::group(
    ['namespace' => 'Landing', 'as' => 'landing.', 'middleware' => []],
    function () {
        Route::resource('voucher', 'LandingController');
        Route::get('voucher.data-voucher', ['as' => 'voucher.data-voucher', 'uses' => 'VoucherController@dataVoucher']);
        Route::post('voucher.register', ['as' => 'voucher.register', 'uses' => 'VoucherController@register']);

        Route::resource('happy-hour', 'HappyHourController');
        Route::post('happy-hour.register', ['as' => 'happy-hour.register', 'uses' => 'HappyHourController@register']);
        Route::post('happy-hour.package', ['as' => 'happy-hour.package', 'uses' => 'HappyHourController@package']);
        Route::get('happy-hour.data', ['as' => 'happy-hour.data', 'uses' => 'HappyHourController@data']);
    }
);
