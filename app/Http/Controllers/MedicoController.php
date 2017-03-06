<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;

class MedicoController extends Controller
{
  //Método index
  public function index(){
    $medicos = Medico::all();
    return view('medico.index', compact('medicos'));
  }

  //Método armazena - Armazena um novo cadastro de medico
  public function armazena() {
    $this->validate(request(), [
      'nome' => 'required|min:6|max:150',
      'crm' => 'required',
      'email' => 'required|email'
    ]);
    Medico::create(request()->all());
    return redirect('/medicos');
  }

  //Método edita - Chama a pagina para editar um medico existente
  public function edita(Medico $medico) {
    return view('medico.edita', compact('medico'));
  }

  //Método cria - Cria um novo cadastro de medico
  public function cria(){
    return view('medico.cria');
  }

  //Método show - Mostra um medico especifico
  public function show(Medico $medico) {
    return view('medico.show', compact('medico'));
  }

  //Método atualiza - Atualiza um medico existente
  public function atualiza(Medico $medico) {
    $medico->fill(request()->all());
    $medico->save();
    return redirect("/medicos/$medico->id");
  }
}
