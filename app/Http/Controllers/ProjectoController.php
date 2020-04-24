<?php

namespace App\Http\Controllers;

use App\Progecto;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class ProjectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $projectos=Progecto::all();
        $novasmensagens = DB::table('pedidosestagios')->where('estado', '=', 0)->count();
        return view('admin.progectos',compact('projectos','novasmensagens'));
    }

    public function store(Request $request){
        $projectos=new Progecto();
        $projectos->nome=$request->nome;
        $projectos->pequenadiscricao=$request->pequenadescricao;
        $projectos->objectivo=$request->objectivo;
        $projectos->descricao=$request->descricao;
        $projectos->requisitos=$request->requisito;
        $projectos->user_id=Auth::user()->id;
        $projectos->save();

        return view('admin.projectos');

    }


    public function remove(Request $request){
        $progecto=Progecto::findOrFail($request->id);
        $progecto->delete();
        return Response()->json($progecto);
    }

    public function update(Request $request){
        $projectos=Progecto::findOrFail($request->id);
        $projectos->nome=$request->nome;
        $projectos->pequenadiscricao=$request->pequenadescricao;
        $projectos->objectivo=$request->objectivo;
        $projectos->descricao=$request->descricao;
        $projectos->requisitos=$request->requisito;
        $projectos->user_id=Auth::user()->id;
        $projectos->save();
        return Response()->json($projectos);
    }
}
