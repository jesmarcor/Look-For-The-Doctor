<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Medico;

use DB;

use App;

class MedicosController extends Controller
{
    public function home()
    {
      return view('home.home');
    }

    public function show()
    {
      $medicos = DB::table('medicos')->get();

      return view('doctors.medicaList', compact('medicos') );
    }

    public function showOne($id)
    {
      $medico = App\Medico::findOrFail($id);

      return view('doctors.doctor', compact('medico') );
    }

    public function register()
    {
      return view('users.register.doctor');
    }

    public function store(Request $request)
    {

      $medico = new Medico( $request->all() );

      $medico->save();

      return back();
    }

    public function edit(Medico $medico)
    {
      return view('doctors.editDoctor', compact('medico') );
    }

    public function update(Request $request, Medico $medico)
    {
      $medico->update( $request->all() );

      return redirect('listaMedicos/'.$medico->id);
    }

    public function delete(Medico $medico)
    {
      $medico->id;

      $medico->delete();

      return redirect('listaMedicos/'.$medico->id);
    }
}
