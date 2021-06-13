<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\ApiUsage;
class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //echo $request->access_key;
        if($request->access_key == '') {
            echo  'invalid access_key ';
        }else{
            $user = User::where('access_key', $request->access_key)->first();

            if($user != null) {
                ApiUsage::create([
                    'date_usage' => date('Y-m-d'),
                    'user_id' => $user->id
                ]);
                //echo $user->access_key;
                return $next($request);
            }else {
                echo  'invalid access_key ';
            }
            //echo $user->access_key;
            //print_r($user);
            
        }
      
        
    }
}
