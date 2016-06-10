<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class CentrosMedicosController extends Controller
{
  public function register()
  {
    return view('users.register.medicalCenter');
  }
}
