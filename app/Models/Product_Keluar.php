<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Keluar extends Model
{
    use HasFactory;

    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function Customer(){
        return $this->belongsTo(Customer::class);
    }
    protected $fillable = ['product_id','customer_id','qty','tanggal'];
}
