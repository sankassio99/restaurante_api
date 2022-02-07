<?php

namespace App\Http\Controllers;

use App\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class RestauranteController extends Controller
{
    public function __construct(Restaurante $recurso){
        $this->classe = $recurso;
    }

    public function indexFull(){
        return $this->classe::with('endereco')->with('categorias')->get();
    }

    public function showFull($id){
        $recurso = $this->classe::with('endereco')->with('categorias')->with('categorias.produtos')->find($id);
        if(is_null($recurso)) {
            return response()->json(Config::get('constants.NOTFOUND'), 404);
        }
        return response()->json($recurso);
    }
}
