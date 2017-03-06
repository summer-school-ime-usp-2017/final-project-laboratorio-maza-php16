<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    //
    protected $fillable = [
    'nome', 'email', 'crm'
    ];
}
