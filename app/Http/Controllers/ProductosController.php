<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productos;
use \App\Categories;
use \App\Products;
use Storage;
use Auth;

class ProductosController extends Controller
{

    public function NuevoProducto(Productos $request){
      $Product = Products::create([
        'title' => $request->title,
        'photo_1' => $request->foto1,
        'photo_2' => '2',
        'photo_3' => '3',
        'photo_4' => '4',
        'photo_5' => '5',
        'description' =>$request->description,
        'id_category' =>$request->categorias,
        'prize' =>$request->prize,
        'id_user' => Auth::user()->id,
      ]);


    }
    public function showCategories(){
      if (Auth::check()) {
        $categories = Categories::all();
        return view('paginas.create', compact('categories'));
      }
    }
    public function showProductos(){
      $products = Products::all();
      return view('paginas.productos', compact('products'));
    }
    public function showMyProducts(){
      $products = Products::all();
      return view('paginas.misProductos', compact('products'));
    }
    public function borrar($id){
      $products = Products::find($id);
      $products->delete();
      return view('paginas.misProductos', compact('products'));
    }
    public function editarMiProducto($id){
      $product = Products::find($id);
      return view('paginas.editarProductos', compact('product'));
    }
    public function editarProducto(Productos $request, $id ) {

		$product = Products::find($id);
		$product->fill([
      'title' => $request->title,
      'photo_1' => $request->foto1,
      'photo_2' => $request->foto2,
      'photo_3' => $request->foto3,
      'photo_4' => $request->foto4,
      'photo_5' => $request->foto5,
      'description' => $request->description,
      'prize' => $request->prize,
      'id_user' => Auth::user()->id,
		]);

		//Almaceno el avatar en caso de que el usuario haya especificado uno nuevo
    	/**
    	 * Actualizo los datos del usuario en la BD
    	 */
    	$product->save();

    }
    public function traerUnSoloProducto($id){
      $product = Products::find($id);
      return view('paginas.product', compact('product'));
    }

}
