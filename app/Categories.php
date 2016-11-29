<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    protected $fillable = ['id', 'category', 'created_at', 'updated_at'];

    public $timestamps = true;

    public function Products() {
      return $this->hasMany('App\Products', 'id_category');
    }
}
