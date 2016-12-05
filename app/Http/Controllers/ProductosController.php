<?php

namespace App\Http\Controllers;

use App\Cart;
use \Input as Input;
use Illuminate\Http\Request;
use App\Http\Requests\productos;
use \App\Categories;
use \App\Products;
use Storage;
use Auth;
use Session;

class ProductosController extends Controller
{

    public function NuevoProducto(Productos $request){

      // $newFilename = uniqid().".".$request->foto1->extension();
      $path1 = $request->foto1->store('imgProductos', 'public');

      if ($request->hasFile('foto2')){
        // $newFilename2 = uniqid().".".$request->foto2->extension();
        $path2 = $request->foto2->store('imgProductos',  'public');
      }else{
        $path2 = "";
      }
      if ($request->hasFile('foto3')){
        // $newFilename3 = uniqid().".".$request->foto3->extension();
        $path3 = $request->foto3->store('imgProductos',  'public');
      }else{
        $path3 = "";
      }
      if ($request->hasFile('foto4')){
        $newFilename4 = uniqid().".".$request->foto4->extension();
        $path4 = $request->foto4->store('imgProductos',  'public');
      }else{
        $path4 = "";
      }
      if ($request->hasFile('foto5')){
        // $newFilename5 = uniqid().".".$request->foto5->extension();
        $path5 = $request->foto5->store('imgProductos',  'public');
      }else{
        $path5 = "";
      }

      $Product = Products::create([
        'title' => $request->title,
        'photo_1' => $path1,
        'photo_2' => $path2,
        'photo_3' => $path3,
        'photo_4' => $path4,
        'photo_5' => $path5,
        'description' =>$request->description,
        'id_category' =>$request->categorias,
        'prize' =>$request->prize,
        'id_user' => Auth::user()->id,
      ]);
      // $this->storeImages($request);
    }

    // public function storeImages($request){
    //   $file = $request->file($request->foto1);
    //   $extension = $file->extension();
    //   $newFilename = uniqid().".".$extension;
    //   $folder = "imgsProductos";
    //   $path = $request->storeAs($folder, $newFilename, 'public');
    //   $productos = $folder."/".$newFilename;
    //
    // }


    public function showProductos(){
      $products = Products::all();
      $categories = Categories::all();
      return view('paginas.productos', compact('products','categories'));
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

    public function getAddToCart(Request $request, $id){
        $producto = Products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($producto, $producto->id);

        $request->session()->put('cart', $cart);
        return redirect('/productos');
    }

    public function getReduceByOne($id){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);

      if(count($cart->items) > 0){

        Session::put('cart', $cart);

      }else{
        Session::forget('cart');
      }

      return redirect('/shopping-cart');
    }

    public function getRemoveItem($id){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      if(count($cart->items) > 0){

        Session::put('cart', $cart);

      }else{
        Session::forget('cart');
      }

      return redirect('/shopping-cart');
    }

    public function getCart(){
      if (!Session::has('cart')) {
          return view('paginas.carrito');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view("paginas.carrito", ['products' =>$cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function allCategories(){
      $categories = Categories::all();
      return view('paginas.categorias', compact('categories'));
    }
    public function showIndivCategory($idCategory){
      $productsCategory = Products::where('id_category', '=', $idCategory)->get();
      return view("paginas.indivCategory", compact('productsCategory'));
    }
    public function SearchByKeyword(Request $request){
      $keyword = $request->search;
        if ($keyword!='') {
            $query = Products::where("title", "like","%$keyword%")->get();
            // dd($query);
          return view('paginas.searchProducts', compact('query'));
        }
    }

}
