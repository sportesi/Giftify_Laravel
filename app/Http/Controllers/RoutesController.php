<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RoutesController extends Controller{
    public function index(){
          return view('paginas.index');
    }
    public function registro(){
          return view('paginas.registro');
    }
    public function crear(){
      if(Auth::check()){
        return view("paginas.create");

      }else{
        return "nop,  no podes entrar a esta pagina si no estas logueado";
      }
    }
    public function preguntas(){
      return view('paginas.preguntas');
    }
}
