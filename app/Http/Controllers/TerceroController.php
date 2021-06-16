<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Tercero;

class TerceroController extends Controller
{
  
    public function addTercero() {
        return view('tercero.index',[
           
        ]);
    }

    public function insertTercero(Request $request) {
       $post = $request->post();
       $tercero = new Tercero;
       $tercero->name = $post['name'];
       $tercero->identification = $post['identification'];
       $tercero->account_number = $post['account_number'];
       $tercero->id_user_assigned  = Auth::id();
       $tercero->save();
       return redirect('transaction');
    }
}
