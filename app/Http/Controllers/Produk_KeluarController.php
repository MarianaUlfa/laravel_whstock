<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Product_Keluar;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\Produk_KeluarExportXLS; 
use Maatwebsite\Excel\Facades\Excel;

class Produk_KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_keluar = Product_Keluar::all();
        return view('backend.produk_keluar.index', ['produk_keluar' => $product_keluar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.produk_keluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id'     => 'required',
            'customer_id'    => 'required',
            'qty'            => 'required',
            'tanggal'        => 'required'
         ]);
 
         Product_Keluar::create($request->all());
 
         $product = Product::findOrFail($request->product_id);
         $product->qty -= $request->qty;
         $product->save();
 
         $request->session()->flash('success', 'Sukses menambah data');
         return redirect('/keluar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_keluar = Product_Keluar::find($id);
        return view('backend.produk_keluar.edit', ['produk_keluar' => $Product_keluar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id'     => 'required',
            'customer_id'    => 'required',
            'qty'            => 'required',
            'tanggal'           => 'required'
        ]);

        $product_keluar = Product_Keluar::findOrFail($id);
        $product_keluar->update($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->qty -= $request->qty;
        $product->update();

        $request->session()->flash('success', 'Sukses mengupdate data');
        return redirect('/keluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product_Keluar::destroy($id);

        return redirect('/keluar')->with('success', 'Data telah terhapus');
    }

    public function produk_keluar_pdf()
	{ 
		$product_keluar = Product_Keluar::get(); 
		$pdf = PDF::loadView('backend.produk_keluar.keluar_pdf', ['produk_keluar' => $product_keluar]); 
		return $pdf->download('data-produk-keluar.pdf'); 
	}

    public function produk_keluar_excel() 
    { 
        return Excel::download(new Produk_KeluarExportXLS, 'data_produk_keluar.xlsx'); 
    }
}
