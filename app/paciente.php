<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    //
    protected $fillable = [
    'nome', 'email', 'cpf'
    ];
}
