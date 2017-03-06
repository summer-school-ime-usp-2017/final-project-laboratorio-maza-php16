<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
  //Indica quais os atributos em pedido podem ser alterados.
  protected $fillable =[
    'paciente_id', 'medico_id'
  ];

  //Indica quais chaves estão conectadas e qual o tipo de conexão.
  public function exames() {
    return $this->belongsToMany(Exame::class);
  }
  public function medico(){
    return $this->belongsTo(Medico::class);
  }
  public function paciente(){
    return $this->belongsTo(Paciente::class);
  }
}
