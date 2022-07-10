<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Product::all();
        return view('backend.produk.index', ['produk' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'nama'          => 'required|string',
            'harga'         => 'required',
            'qty'           => 'required',
            'image'         => 'required',
            'category_id'   => 'required',
        ]);

        $input = $request->all();
        $input['image'] = null;

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['image'] = time().'.'.$image->getClientOriginalExtension();
            $image->move(('/upload/produk/'), $input['image']);
        }

        Product::create($input);

        $request->session()->flash('success', 'Sukses menambah data');
        return redirect('/produk');
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
        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');
        $produks = Product::find($id);
        return view('backend.produk.edit', ['produk' => $produks]);
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
        $category = Category::orderBy('name','ASC')
        ->get()
        ->pluck('name','id');

    $this->validate($request , [
        'nama'          => 'required|string',
        'harga'         => 'required',
        'qty'           => 'required',
        'image'         => 'required',
        'category_id'   => 'required',
    ]);

    $input = $request->all();
    $produks = Product::findOrFail($id);

    $input['image'] = $produks->image;

    if ($request->hasFile('image')){
        if (!$produks->image == NULL){
            unlink(public_path($produks->image));
        }
        $input['image'] = '/upload/produk/'.time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('/upload/produk/'), $input['image']);
    }

    $produks->update($input);

    $request->session()->flash('success', 'Sukses mengupdate data');
            return redirect('/produk');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = Product::findOrFail($id);

        if (!$produks->image == NULL){
            unlink(public_path($produks->image));
        }

        Product::destroy($id);

        return redirect('/produk')->with('success', 'Data telah terhapus');
    }

    public function product_pdf()
	{ 
		$produks = Product::get(); 
		$pdf = PDF::loadView('backend.produk.produk_pdf', ['produk' => $produks]); 
		return $pdf->download('data-produk.pdf'); 
	}
}
