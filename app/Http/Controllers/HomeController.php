<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

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
        //echo date('Y-m-d');
        $sqlPeticiones = DB::select('SELECT COUNT(id) total FROM `api_usage` where user_id ='.$usuario->id);
        echo $sqlPeticiones[0]->total;
        //print_r($sqlPeticiones);
        return view('dashboard.home',[
            'userData' => $usuario
        ]);
    }

    public function apiUsage() {
        $idUsuario = Auth::id();
        $anioActual = date('Y');
        $mesActual = date('m');
        $sql = 'SELECT 
        date_usage , 
        (SELECT COUNT(id) total FROM api_usage WHERE date_usage = apiU.date_usage AND user_id = '.$idUsuario.') total 
        FROM `api_usage` apiU WHERE user_id = '.$idUsuario.' AND date_usage = "'.date('Y-m-d').'"';
        $sqlPeticiones = DB::select($sql);
        //print_r($sqlPeticiones);
        return view('dashboard.apiUsage',[
           'peticiones' => $sqlPeticiones,
           'anioActual' => $anioActual,
           'mesActual' => $this->nombremes($mesActual),
        ]);
    }

    public function nombremes($mes){
        //setlocale(LC_TIME, 'spanish');  
        $nombre=strftime("%B",mktime(0, 0, 0, $mes, 1, 2000)); 
        return $nombre;
    }
       
}
