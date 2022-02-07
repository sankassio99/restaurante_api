<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function __construct(Endereco $endereco){
        $this->classe = $endereco;
    }
}
