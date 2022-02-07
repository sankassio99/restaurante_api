<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = 'produto' ;
    protected $fillable = ["nome", "preco", "imagem", "categoria_id"];

    public $timestamps = false;
}
