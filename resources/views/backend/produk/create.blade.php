@extends('backend.theme') 

@section('content') 
<div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">Produk</h3> 
    </div> 
    <!-- /.card-header --> 
    <div class="card-body"> 
        <form action="{{ url('produk/store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf 
            <div class="mb-3"> 
                <label for="">ID Kategori</label> 
                <input type="text" name="category_id" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Nama</label> 
                <input type="text" name="nama" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Harga</label> 
                <input type="text" name="harga" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Image</label> 
                <input type="file" name="image" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Qty</label> 
                <input type="text" name="qty" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <button type="submit" class="btn btn-primary">Save</button> 
            </div> 
        </form> 
    </div> 
</div> 
@endsection
