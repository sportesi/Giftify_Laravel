<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller{
    public function index(){
          return view('paginas.index');
    }
    public function registro(){
          return view('paginas.registro');
    }
}
