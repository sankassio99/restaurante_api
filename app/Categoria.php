<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categoria' ;
    protected $fillable = ["nome", "restaurante_id"];
    public $timestamps = false;

    public function produtos(){
        return $this->hasMany(Produto::class);
    }

    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }
}
