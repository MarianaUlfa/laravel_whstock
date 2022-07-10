<?php

namespace App\Exports;

use App\Models\Product_Masuk;
use Maatwebsite\Excel\Concerns\FromCollection;

class Produk_MasukExportXLS implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product_Masuk::all();
    }
}
