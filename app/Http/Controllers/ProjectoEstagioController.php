<?php

namespace App\Http\Controllers;

use App\Estagiario;
use App\Progecto;
use App\Progectoestagiario;
use Illuminate\Http\Request;
use DB;

class ProjectoEstagioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $projectos=Progecto::all();
        $estagiarios=Estagiario::all();
        $projectoestagios= Progectoestagiario::all();
        $novasmensagens = DB::table('pedidosestagios')->where('estado', '=', 0)->count();
      return view('admin.estagiariosprojecto',compact('projectoestagios','novasmensagens'),compact('projectos','estagiarios'));

    }


    public function store(Request $request){

        $projectoestagio=new Progectoestagiario();
        $projectoestagio->estagiario_id=$request->estagiario;
        $projectoestagio->progecto_id=$request->projecto;
        $projectoestagio->save();
        return redirect('estagiario-projecto')->withSuccess('Registado com sucesso!');

    }


    public  function delete(Request $request){
        $projectoestagio=Progectoestagiario::findOrFail($request->id);
        $projectoestagio->delete();

        return Response()->json($projectoestagio);
    }
}
