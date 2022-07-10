<?php

namespace App\Exports;

use App\Models\Product_Keluar;
use Maatwebsite\Excel\Concerns\FromCollection;

class Produk_KeluarExportXLS implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product_Keluar::all();
    }
}
