<?php

namespace App\Http\Controllers;

use App\Pagina;
use App\Progecto;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    //
    public function index(){
        $pagina=Pagina::findOrFail(1);
        return view('start.index', compact('pagina'));
    }

    public function projectos(){
        $pagina=Pagina::findOrFail(1);
        $projectos = DB::table('progectos')->paginate(12);
        return view('start.projectos', compact('projectos','pagina'));
    }
}
