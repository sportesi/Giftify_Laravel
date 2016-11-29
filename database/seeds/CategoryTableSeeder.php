<?php

use Illuminate\Database\Seeder;
use \App\Categories;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
          [
          "category" => "Otros"
          ],
          [
          "category" => "Accesorios para Vehículos"
          ],
          [
          "category" => "Alimentos y Bebidas"
          ],
          [
          "category" => "Animales y Mascotas"
          ],
          [
          "category" => "Antigüedades"
          ],
          [
          "category" => "Arte y Artesanías"
          ],
          [
          "category" => "Bebés"
          ],
          [
          "category" => "Cámaras y Accesorios"
          ],
          [
          "category" => "Celulares y Teléfonos"
          ],
          [
          "category" => "Coleccionables y Hobbies"
          ],
          [
          "category" => "Computación"
          ],
          [
          "category" => "Consolas y Videojuegos"
          ],
          [
          "category" => "Deportes y Fitness"
          ],
          [
          "category" => "Electrodomésticos"
          ],
          [
          "category" => "Electrónica, Audio y Video"
          ],
          [
          "category" => "Entradas para Eventos"
          ],
          [
          "category" => "Hogar, Muebles y Jardín"
          ],
          [
          "category" => "Industrias y Oficinas"
          ],
          [
          "category" => "Instrumentos Musicales"
          ],
          [
          "category" => "Joyas y Relojes"
          ],
          [
          "category" => "Juegos y Juguetes"
          ],
          [
          "category" => "Libros, Revistas y Comics"
          ],
          [
          "category" => "Música, Películas y Series"
          ],
          [
          "category" => "Ropa y Accesorios"
          ],
          [
          "category" => "Salud y Belleza"
          ]
      );
    }
}
