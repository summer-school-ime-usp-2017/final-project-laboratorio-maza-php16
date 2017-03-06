<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    //Método index
    public function index(){
      $pacientes = Paciente::all();
      return view('paciente.index', compact('pacientes'));
    }

    //Método cria - Cria um novo cadastro de paciente
    public function cria(){
         return view('paciente.cria');
    }

    //Método edita - Chama a pagina para editar um paciente existente
    public function edita(Paciente $paciente){
      return view('paciente.edita', compact('paciente'));
    }

    //Método armazena - Armazena um novo cadastro de paciente
    public function armazena(){
        $this->validate(request(), [
        'nome' => 'required|min:6|max:160',
        'email' => 'required|email'
         ]);
    	   Paciente::create(request()->all());
    	   return redirect('/pacientes');
    }

    //Método show - Mostra um paciente especifico
    public function show(Paciente $paciente){
      return view('paciente.show', compact('paciente'));
    }

    //Método atualiza - Atualiza um paciente existente
    public function atualiza(Paciente $paciente){
      $paciente->fill(request()->all());
      $paciente->save();
      return redirect("/pacientes/$paciente->id");
    }
}
