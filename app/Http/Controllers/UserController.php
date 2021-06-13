<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index() {
    echo env('BASE_URL_API_COIN');
  }   
}
