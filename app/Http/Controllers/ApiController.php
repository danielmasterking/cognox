<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Account_history;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function record(Request $request) {
        
        $post = $request->post();
        $usuario = User::find($post['id_user']);
        
        if($post['account_prop'] == 'ahorros') {
            $account = $usuario->account_number;
            $usuario->amount +=  $post['value_prop'];
        }else {
            $account = $usuario->account_numer_current;
            $usuario->amount_current +=  $post['value_prop'];
        }

        $usuario->save();
        
        $history = new Account_history;
        
        $history->amount = $post['value_prop'];
        $history->amount = $post['value_prop'];
        $history->account_number  = $account;
        $history->movement  = 'Consignacion';
        $history->date  = date('Y-m-d');
        $history->account_number_current = 0;
        $history->save();
        
        return response()->json($usuario);
    }
}
