<?php

namespace App\Http\Controllers;

use App\Estagiario;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class EstagiarioController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $novasmensagens = DB::table('pedidosestagios')->where('estado', '=', 0)->count();
        $estagiarios=Estagiario::all();
        return view('admin.estagiarios',compact('estagiarios','novasmensagens'));
    }



    public function store(Request $request){
        $estagiario=new Estagiario();
        $estagiario->nome=$request->nome;
        $estagiario->telefone=$request->telefone;
        $estagiario->email=$request->email;
        $estagiario->morada=$request->morada;
        $estagiario->escola=$request->escola;
        $estagiario->user_id=Auth::user()->id;
        $estagiario->save();
        Response()->json(['registado'=>'Registado com sucesso']);
    }

    public function remove(Request $request){
        $estagiario=Estagiario::findOrFail($request->id);
        $estagiario->delete();

        return Response()->json($estagiario);
    }


    public function update(Request $request){
        $estagiario=Estagiario::findOrFail($request->id);
        $estagiario->nome=$request->nome;
        $estagiario->telefone=$request->telefone;
        $estagiario->email=$request->email;
        $estagiario->morada=$request->morada;
        $estagiario->escola=$request->escola;
        $estagiario->user_id=Auth::user()->id;
        $estagiario->save();
        Response()->json(['registado'=>'Registado com sucesso']);
    }
}
