<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exame extends Model
{
    //
  protected $fillable = [
  'nome', 'metodo'
  ];

  public function pedidos() {
    return $this->belongsToMany(Pedido::class);
  }

}
