@extends('backend.theme') 

@section('content') 
 <div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">Produk</h3> 
    </div> 
    <!-- /.card-header --> 
    <div class="row ml-3 mt-3"> 
        <div class="col-4"> 
            <a href="{{ url('produk/create')}}" type="button" class="btn btn-sm btn-success"><i class="fas fa-plus" style='color: white' aria-hidden="true"></i> Tambah Produk</a>
            <a href="{{ url('produk_pdf') }}" class="btn btn-sm btn-outline-primary">    
                <i class="fas fa-file-pdf"></i> Cetak PDF</a> 
            <!--<a href="" class="btn btn-outline-success btn-sm my-3">0  
                <i class="fas fa-file-excel"></i> Cetak EXCEL</a>-->
        </div> 
    </div> 
        <div class="card-body"> 
            <table id="example1" class="table table-bordered table-striped"> 
                <thead> 
                    <tr> 
                        <th scope="col">No</th>
                        <th scope="col">id_kategori</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Image</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Action</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @php 
                    $no = 0; 
                    @endphp 
                    @foreach ($produk as $k => $v) 
                    @php 
                    $no = $no + 1; 
                    @endphp 
                    <tr> 
                        <td>{{ ++$k }}</td>
                        <td>{{ $v->getCategory->id }}</td>
                        <td>{{ $v->nama }}</td>
                        <td>{{ $v->harga }}</td>
                        <td> 
                            <img class="rounded-square" width="50px" height="50px" src="{{ asset('upload/produk/' . $v->image) }}" alt=""> 
                        </td>
                        <td>{{ $v->qty }}</td>
                        <td><a href="{{ url ('produk/edit/'. $v['id']) }}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i>Edit</a>
                            <a href="{{ url ('produk/destroy/'. $v['id']) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                        </td>
                    </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
<!-- /.card-body --> 
</div> 
@endsection
