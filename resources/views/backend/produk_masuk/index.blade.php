@extends('backend.theme') 

@section('content') 
 <div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">Produk Masuk</h3> 
    </div> 
    <!-- /.card-header --> 
    <div class="row ml-3 mt-3"> 
        <div class="col-4"> 
            <a href="{{ url('masuk/create')}}" type="button" class="btn btn-sm btn-success"><i class="fas fa-plus" style='color: white' aria-hidden="true"></i>Produk Masuk</a>
            <a href="{{ url('masuk_pdf') }}" class="btn btn-sm btn-outline-primary">    
                <i class="fas fa-file-pdf"></i> Cetak PDF</a> 
            <a href="{{ url('masuk_excel') }}" class="btn btn-outline-success btn-sm my-3">
                <i class="fas fa-file-excel"></i> Cetak EXCEL</a>
        </div> 
    </div> 
        <div class="card-body"> 
            <table id="example1" class="table table-bordered table-striped"> 
                <thead> 
                    <tr> 
                        <th scope="col">No</th>
                        <th scope="col">Produk_id</th>
                        <th scope="col">Supplier_id</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @php 
                    $no = 0; 
                    @endphp 
                    @foreach ($produk_masuk as $k => $v) 
                    @php 
                    $no = $no + 1; 
                    @endphp 
                    <tr> 
                        <td>{{ ++$k }}</td>
                        <td>{{ $v->Product->id }}</td>
                        <td>{{ $v->Supplier->id }}</td>
                        <td>{{ $v->qty }}</td>
                        <td>{{ $v->tanggal }}</td>
                        <td><a href="{{ url ('masuk/edit/'. $v['id']) }}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i>Edit</a>
                            <a href="{{ url ('masuk/destroy/'. $v['id']) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                        </td>
                    </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
<!-- /.card-body --> 
</div> 
@endsection
