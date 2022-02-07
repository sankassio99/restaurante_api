<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    //
    protected $table = 'restaurante' ;
    protected $fillable = ["nome", "endereco_id", "imagem", "email", "telefone"];

    public function categorias(){
        return $this->hasMany(Categoria::class);
    }

    public function endereco(){
        return $this->belongsTo(Endereco::class);
    }

}  