<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;


    protected $casts = [
      'img_urls' => 'array'
    ];

    /**
       * The attributes that are mass assignable.
       *
       * @var array
       */

    protected $fillable = [
          'name',
          'price',
          'retail_price',
          'description',
          'img_urls',
          'categories'
        ];

public function subcategories()
{
  return $this->belongsTo(SubCategory::class);
}


public function entity()
{
  return $this->hasMany(ProductEntity::class,'product_id');
}


}
