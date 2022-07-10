@extends('backend.theme') 

@section('content') 
<div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">Customer</h3> 
    </div> 
    <!-- /.card-header --> 
    <div class="card-body">  
        <form action="{{ url('customer/store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf 
            <div class="mb-3"> 
                <label for="">Nama</label> 
                <input type="text" name="nama" required="required" class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Alamat</label> 
                <input type="text" name="alamat" required="required" class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Email</label> 
                <input type="text" name="email" required="required" class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Telepon</label> 
                <input type="text" name="telepon" required="required" class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <button type="submit" class="btn btn-primary">Save</button> 
            </div> 
        </form> 
    </div> 
</div> 
@endsection
