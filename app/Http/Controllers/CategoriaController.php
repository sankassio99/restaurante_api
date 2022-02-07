<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __construct(Categoria $recurso){
        $this->classe = $recurso;
    }
}
