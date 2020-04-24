<?php

namespace App\Http\Controllers;

use App\Pedidosestagio;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;

class PedidoestagioController extends Controller
{
    //
    public function index(){
        $novasmensagens = DB::table('pedidosestagios')->where('estado', '=', 0)->count();
        $pedidos=Pedidosestagio::orderBy('id','desc')->get();
        return view('admin.emails', compact('pedidos'),compact('novasmensagens'));
    }



    public function store(Request $request){
        $file =$request->file('uploadfile');
        $destination_path=public_path().'/files';
        $extension=$file->getClientOriginalExtension();
        $files=$file->getClientOriginalName();
        $fileName=$files.'_'.time().'.'.$extension;
        $file->move($destination_path,$fileName);

        $pedido=new Pedidosestagio();
        $pedido->nomedoprojecto=$request->nome;
        $pedido->descricao=$request->descricao;
        $pedido->email=$request->email;
        $pedido->cv= $fileName;
        $pedido->estado=0;
        $pedido->save();
        return redirect('/projectos')->withSuccess('Enviado com sucesso!');
    }


    public function read(Request $request){

        $pedido=Pedidosestagio::findOrFail($request->id);
        $pedido->estado=1;
        $pedido->save();
        return Response()->json($pedido);
    }

    public function remove(Request $request){
        $pedido=Pedidosestagio::findOrFail($request->id);
        $pedido->delete();
        return Response()->json($pedido);
    }
}
