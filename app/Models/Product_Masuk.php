<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Masuk extends Model
{
    use HasFactory;
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function Supplier(){
        return $this->belongsTo(Supplier::class);
    }
    protected $fillable = ['product_id','supplier_id','qty','tanggal'];
}
