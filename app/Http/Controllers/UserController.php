<?php

namespace App\Http\Controllers;

use App\Pagina;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users=User::all();
        $novasmensagens = DB::table('pedidosestagios')->where('estado', '=', 0)->count();
        return view('admin.useres',compact('novasmensagens','users'));
    }

    public function store(Request $request){
        $users=new User();
        $users->email=$request->email;
        $users->name=$request->nome;
        $users->password=Hash::make(11111111);
        $users->save();
        return redirect('user-all')->withSuccess('Enviado com sucesso!');
    }

    public function update(Request $request){
        $users=User::findOrFail(Auth::user()->id);
        $users->password=Hash::make($request->password);
        $users->save();
    }


    public function remove(Request $request){
        $users=User::findOrFail($request->id);
        $users->delete();

        return Response()->json($users);
    }
}
