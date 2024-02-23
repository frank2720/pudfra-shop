<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
   use HasFactory;

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
         'img',
      ];

      /**
       * Get images of a product
       */

      public function images():HasMany
      {
         return $this->hasMany(Image::class, 'product_id');
      }
}
