<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exame;

class ExameController extends Controller
{
  //Método index
  public function index(){
    $exames = Exame::all();
    return view('exame.index', compact('exames'));
  }

  //Método cria - Cria um novo cadastro de exame
  public function cria(){
    return view('exame.cria');
  }

  //Método armazena - Armazena um novo cadastro de exame
  public function armazena() {
    $this->validate(request(), [
      'nome' => 'required|min:4|max:160',
      'metodo' => 'required|min:1|max:250'
    ]);
    Exame::create(request()->all());
    return redirect('/exames');
  }

  //Método edita - Chama a pagina para editar um exame existente
  public function edita(Exame $exame) {
    return view('exame.edita', compact('exame'));
  }

  //Método show - Mostra um exame especifico
  public function show(Exame $exame) {
    return view('exame.show', compact('exame'));
  }

  //Método atualiza - Atualiza um exame existente
  public function atualiza(Exame $exame) {
    $exame->fill(request()->all());
    $exame->save();
    return redirect("/exames/$exame->id");
  }
}
