<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    protected $fillable = ['id', 'category'];

    public $timestamps = false;

    public function Products() {
      return $this->hasMany('App\Products', 'id_category');
    }
}
