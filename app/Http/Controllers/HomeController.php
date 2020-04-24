<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $estagiarios=DB::table('estagiarios')->count();
        $users=DB::table('users')->count();
        $progectos = DB::table('progectos')->count();
        $novasmensagens = DB::table('pedidosestagios')->where('estado', '=', 0)->count();
        return view('home',compact('novasmensagens','progectos'),compact('users','estagiarios'));
    }
}
