<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id', 'id');}
    public function Product_Masuk(){
        return $this->hasMany(Product_Masuk::class);
    }

        protected $table = "products";
        protected $primaryKey = 'id';
        protected $fillable = ['category_id','nama','harga','image','qty'];
}
