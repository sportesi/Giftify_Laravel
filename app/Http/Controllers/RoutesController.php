<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categories;
use \App\Products;

class RoutesController extends Controller{

    public function index(){
      $products = Products::all();
          return view('paginas.index' ,compact('products'));
    }
    public function registro(){
          return view('paginas.registro');
    }
    public function crear(){
      if(Auth::check()){
        $categories = Categories::all();
        return view('paginas.create', compact('categories'));

      }else{
        return "nop,  no podes entrar a esta pagina si no estas logueado";
      }
    }
    public function preguntas(){
      return view('paginas.preguntas');
    }
    public function productos(){
      return view('paginas.productos');
    }
    public function MisProductos(){
      return view('paginas.misProductos');
    }
    public function editarMiProducto(){
      return view('paginas.editarProductos');
    }
}
