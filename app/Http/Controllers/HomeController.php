<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Account_history;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $idUsuario = Auth::id();
        $usuario = User::find($idUsuario);
        
        return view('home.index',[
            'userData' => $usuario
        ]);
    }

    public function transactions()
    {
        $idUsuario = Auth::id();
        $usuario = User::find($idUsuario);
        
        return view('home.transaction',[
            'userData' => $usuario
        ]);
    }

    public function status() {
        $idUsuario = Auth::id();
        $usuario = User::find($idUsuario);
        $historySaving = Account_history::where("account_number", $usuario->account_number )->get();

        $historyCurrent = Account_history::where("account_number", $usuario->account_numer_current  )->get();
        return view('home.status',[
            'historySaving' => $historySaving,
            'historyCurrent' => $historyCurrent,
        ]);
    }
       
}
