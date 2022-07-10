<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $supply = Supplier::all();
      return view('backend.supplier.index', ['suppliers' => $supply]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.supplier.create');
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
        'nama' => 'required',
        'alamat' => 'required',
        'email' => 'required',
        'telepon' => 'required',
      ]);

      Supplier::create($request->all());

      $request->session()->flash('success', 'Sukses menambah data');
          return redirect('/supplier');
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
        $supply = Supplier::find($id);
		      return view('backend.supplier.edit', ['suppliers' => $supply]);
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
        'nama' => 'required|string|min:2',
        'alamat' => 'required|string|min:2',
        'email' => 'required|string|email|max:255',			
        'telepon' => 'required|string|min:2',
		  ]);
    $supplier = Supplier::findOrFail($id);
		
    $supplier->update($request->all());

    $request->session()->flash('success', 'Sukses mengupdate data');
      return redirect('/supplier'); 
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);

        return redirect('/supplier')->with('success', 'Data telah terhapus');
    }

    public function supplier_pdf()
    { 
      $supply = Supplier::get(); 
      $pdf = PDF::loadView('backend.supplier.supplier_pdf', ['suppliers' => $supply]); 
      return $pdf->download('data-supplier.pdf'); 
    }
}
