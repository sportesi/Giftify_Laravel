<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
      Usuarios::table('users')->insert([
        'title' => $request->title,
        'photo_1' => $request->foto1,
        'photo_2' => $request->foto2,
        'photo_3' => $request->foto3,
        'photo_4' => $request->foto4,
        'photo_5' => $request->foto5,
        'description' => $request->description,
        'prize' => $request->prize,
        'id_category'=> $request->categorias,
        'id_user' => Auth::user()->id,
      ]);
    }
}
