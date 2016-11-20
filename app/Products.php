<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  public $timestamps = true;
  protected $fillable = [
    'title', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'description','prize', 'id_user',
  ];
  public function categories() {
    return $this->belongsToMany('App\Categories', 'id');
  }
  public function user() {
    return $this->belongsTo('App\User', 'id');
  }
}
