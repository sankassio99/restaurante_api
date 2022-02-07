<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $classe ;

    public function index(Request $request){
        return $this->classe::all();
    }

    public function store(Request $request){

        return response()->json(
            $this->classe::create($request->all(), 201)
        );

    }

    public function show($id){
        $recurso = $this->classe::find($id);
        if(is_null($recurso)) {
            return response()->json(Config::get('constants.NOTFOUND'), 404);
        }
        return response()->json($recurso);
    }

    public function update(int $id, Request $request){
        $recurso = $this->classe::find($id);
        if(is_null($recurso)) {
            return response()->json(Config::get('constants.NOTFOUND'), 404);
        }
        $recurso->update($request->all());
        return response()->json(Config::get('constants.EDITED'), 200);
    }

    public function destroy($id){
        $qtdRecursosRemovidos = $this->classe::destroy($id);
        if($qtdRecursosRemovidos === 0){
            return response()->json(Config::get('constants.NOTFOUND'), 404);
        }
        return response()->json(Config::get('constants.DELETED'), 200);
    }
}
