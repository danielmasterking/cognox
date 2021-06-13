<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/simple/price/{ids}/{vs_currencies}/{access_key?}', 'ApiController@SimplePrice');

Route::get('/simple/token_price/{id}/{contract_addresses}/{vs_currencies}/{access_key?}', 'ApiController@SimpleTokenPrice');

Route::get('/simple/supported_vs_currencies/{access_key?}', 'ApiController@SimpleSupportedVsCurrencies');

Route::get('/coins/list/{access_key?}', 'ApiController@CoinsList');

Route::get('/coins/markets/{vs_currency}/{access_key?}', 'ApiController@CoinsMarkets');

Route::get('/coins/{id}/{access_key?}', 'ApiController@Coins');

Route::get('/coins/tickers/{id}/{access_key?}', 'ApiController@CoinsTickers');

Route::get('/coins/history/{id}/{date}/{access_key?}', 'ApiController@CoinsHistory');