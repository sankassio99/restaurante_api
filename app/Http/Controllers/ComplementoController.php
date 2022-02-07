<?php

namespace App\Http\Controllers;

use App\Complemento;
use Illuminate\Http\Request;

class ComplementoController extends Controller
{
    public function __construct(Complemento $recurso){
        $this->classe = $recurso;
    }
}
