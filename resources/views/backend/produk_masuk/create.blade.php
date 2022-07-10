@extends('backend.theme') 

@section('content') 
<div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">Produk Masuk</h3> 
    </div> 
    <!-- /.card-header --> 
    <div class="card-body"> 
        <form action="{{ url('masuk/store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf 
            <div class="mb-3"> 
                <label for="">ID Produk</label> 
                <input type="text" name="product_id" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">ID Supplier</label> 
                <input type="text" name="supplier_id" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Qty</label> 
                <input type="text" name="qty" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Tanggal</label> 
                <input type="date" name="tanggal" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <button type="submit" class="btn btn-primary">Save</button> 
            </div> 
        </form> 
    </div> 
</div> 
@endsection
