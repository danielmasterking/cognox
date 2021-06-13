<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.api');
    }

    public function SimplePrice($ids , $vs_currencies ) {
        $url = env('BASE_URL_API_COIN'). 'simple/price?ids='. $ids .'&vs_currencies='. $vs_currencies;
        
        $response = file_get_contents($url);

        return $response;
        
    } 

    public function SimpleTokenPrice($id , $contract_addresses , $vs_currencies) {
        $url = env('BASE_URL_API_COIN'). 'simple/token_price?id='. $id .'&contract_addresses ='. $contract_addresses . '&vs_currencies ='. $vs_currencies;
        
        $response = file_get_contents($url);

        return $response;
        
    } 

    public function SimpleSupportedVsCurrencies() {
        $url = env('BASE_URL_API_COIN'). 'simple/supported_vs_currencies';
        
        $response = file_get_contents($url);
        //return response()->json($response);
        return $response;
        
    }

    public function CoinsList() {
        $url = env('BASE_URL_API_COIN'). 'coins/list';
        
        $response = file_get_contents($url);
        //return response()->json($response);
        return $response;
        
    }

    public function CoinsMarkets($vs_currency) {
        $url = env('BASE_URL_API_COIN'). 'coins/markets?vs_currency ='.$vs_currency;
        
        $response = file_get_contents($url);
        return $response;
        
    }

    public function Coins($id) {
        $url = env('BASE_URL_API_COIN'). 'coins/'.$id;
        
        $response = file_get_contents($url);
        return $response;
        
    }

    public function CoinsTickers($id) {
        $url = env('BASE_URL_API_COIN'). 'coins/'.$id.'/tickers';
        
        $response = file_get_contents($url);
        return $response;
        
    }

    public function CoinsHistory($id , $date) {
        $url = env('BASE_URL_API_COIN'). 'coins/'.$id.'/history?date='. $date;
        
        $response = file_get_contents($url);
        return $response;
        
    }


}
