<?php

namespace App\Http\Controllers;

use App\Pagina;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class ConfiguracoesDaPaginaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){

        $pagina=Pagina::findOrFail(1);
        $novasmensagens = DB::table('pedidosestagios')->where('estado', '=', 0)->count();
        return view('pagina',compact('novasmensagens','pagina'));

    }


    public function store(Request $request){
        if(!empty($request->slider1)){
            $file =$request->file('slider1');
            $destination_path=public_path().'/files';
            $extension=$file->getClientOriginalExtension();
            $files=$file->getClientOriginalName();
            $slider1=$files.'_'.time().'.'.$extension;
            $file->move($destination_path,$slider1);
        }
        if(!empty($request->slider2)){
            $file =$request->file('slider2');
            $destination_path=public_path().'/files';
            $extension=$file->getClientOriginalExtension();
            $files=$file->getClientOriginalName();
            $slider2=$files.'_'.time().'.'.$extension;
            $file->move($destination_path,$slider2);
        }
        if(!empty($request->slider3)){
            $file =$request->file('slider3');
            $destination_path=public_path().'/files';
            $extension=$file->getClientOriginalExtension();
            $files=$file->getClientOriginalName();
            $slider3=$files.'_'.time().'.'.$extension;
            $file->move($destination_path,$slider3);
        }
        if(!empty($request->logotipo)){
            $file =$request->file('logotipo');
            $destination_path=public_path().'/files';
            $extension=$file->getClientOriginalExtension();
            $files=$file->getClientOriginalName();
            $logotipo=$files.'_'.time().'.'.$extension;
            $file->move($destination_path,$logotipo);
        }
        if(!empty($request->slidersobre)){
            $file =$request->file('slidersobre');
            $destination_path=public_path().'/files';
            $extension=$file->getClientOriginalExtension();
            $files=$file->getClientOriginalName();
            $slidersobre=$files.'_'.time().'.'.$extension;
            $file->move($destination_path,$slidersobre);
        }


        $pagina=Pagina::findOrFail(1);
        if(!empty($request->titulohomeslider1)){
            $pagina->titulohomeslider1=$request->titulohomeslider1;
        }

        if(!empty($request->titulohomeslider2)){
            $pagina->titulohomeslider2=$request->titulohomeslider2;
        }
        if(!empty($request->titulohomeslider3)){
            $pagina->titulohomeslider3=$request->titulohomeslider3;
        }
        if(!empty($request->sobrehomeslider1)){
            $pagina->sobrehomeslider1=$request->sobrehomeslider1;
        }
        if(!empty($request->sobrehomeslider2)){
            $pagina->sobrehomeslider2=$request->sobrehomeslider2;
        }
       if(!empty($request->sobrehomeslider3)){
           $pagina->sobrehomeslider3=$request->sobrehomeslider3;
       }

       if(!empty($request->titulohome)){
           $pagina->titulohome=$request->titulohome;
       }
        if(!empty($request->descricacaoespacodecolaboracao)){
            $pagina->descricacaoespacodecolaboracao=$request->descricacaoespacodecolaboracao;
        }

        if(!empty($request->objectivo1)){
            $pagina->objectivo1=$request->objectivo1;
        }

        if(!empty($request->objectivo2)){
            $pagina->objectivo2=$request->objectivo2;
        }

        if(!empty($request->objectivo3)){
            $pagina->objectivo3=$request->objectivo3;
        }


        if(isset($slider1)){
            $pagina->slider1=$slider1;
        }
        if(isset($slider2)){
            $pagina->slider2=$slider2;
        }
        if(isset($slider3)){
            $pagina->slider3=$slider3;
        }
        if(isset($slidersobre)){
            $pagina->slidersobre=$slidersobre;
        }

        if(!empty($request->sobredsm)){
            $pagina->sobredsm=$request->sobredsm;
        }

         if(!empty($request->parceiros)){
    $pagina->parceiros=$request->parceiros;
    }

        if(isset($logotipo)){
            $pagina->logotipo=$logotipo;
        }

        if(!empty($request->tituloprojecto)){
            $pagina->tituloprojecto=$request->tituloprojecto;
        }

        if(!empty($request->ciuem)){
            $pagina->ciuem=$request->ciuem;
        }

        if(!empty($request->participe)){
            $pagina->participe=$request->participe;
        }

        $pagina->modificadopor=Auth::user()->name;
        $pagina->save();

        return redirect('pagina')->withSuccess('Modificado com sucesso!');;
    }


}
