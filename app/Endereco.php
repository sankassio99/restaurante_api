<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco' ;
    protected $fillable = ["rua", "complemento", "bairro", "cidade", "estado", "cep", "long", "lat"];
    public $timestamps = false;
}
