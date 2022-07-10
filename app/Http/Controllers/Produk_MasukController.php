<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Masuk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\Produk_MasukExportXLS; 
use Maatwebsite\Excel\Facades\Excel;

class Produk_MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuk = Product_Masuk::all();
        return view('backend.produk_masuk.index', ['produk_masuk' => $masuk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.produk_masuk.create');
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
            'supplier_id'    => 'required',
            'qty'            => 'required',
            'tanggal'        => 'required'
        ]);

        Product_Masuk::create($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->qty += $request->qty;
        $product->save();

        $request->session()->flash('success', 'Sukses menambah data');
        return redirect('/masuk');
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
        $product_masuk = Product_Masuk::find($id);
        return view('backend.produk_masuk.edit', ['produk_masuk' => $product_masuk]);
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
            'supplier_id'    => 'required',
            'qty'            => 'required',
            'tanggal'        => 'required'
        ]);

        $product_masuk = Product_Masuk::findOrFail($id);
        $product_masuk->update($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->qty += $request->qty;
        $product->update();

        $request->session()->flash('success', 'Sukses mengupdate data');
        return redirect('/masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product_Masuk::destroy($id);

        return redirect('/masuk')->with('success', 'Data telah terhapus');
    }

    public function produk_masuk_pdf()
	{ 
		$product_masuk = Product_Masuk::get(); 
		$pdf = PDF::loadView('backend.produk_masuk.masuk_pdf', ['produk_masuk' => $product_masuk]); 
		return $pdf->download('data-produk-masuk.pdf'); 
	}

    public function produk_masuk_excel() 
    { 
        return Excel::download(new Produk_MasukExportXLS, 'data_produk_Masuk.xlsx'); 
    } 
}