<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function Product_Keluar(){
        return $this->hasMany(Product_Keluar::class);
    }

    protected $fillable = ['nama', 'alamat', 'email', 'telepon'];
}
