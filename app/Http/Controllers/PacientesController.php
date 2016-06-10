<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class PacientesController extends Controller
{
    public function register()
    {
      return view('users.register.patient');
    }
    public function logIn()
    {
      // $usuarios = DB::table('usuarios')->get();

      return view('users.login.login');
    }
}
