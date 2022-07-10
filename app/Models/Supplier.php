<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    
    public function Product_Masuk(){
        return $this->hasMany(Product_Masuk::class);
    }
    protected $fillable = ['nama', 'alamat', 'email', 'telepon'];
}
