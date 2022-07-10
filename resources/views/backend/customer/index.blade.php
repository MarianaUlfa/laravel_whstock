@extends('backend.theme') 

@section('content') 
 <div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">Customer</h3> 
    </div> 
    <!-- /.card-header -->
    @if (session()->has('success')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button> 
    </div> 
    @endif 
    <div class="row ml-3 mt-3"> 
        <div class="col-4"> 
            <a href="{{ url('customer/create')}}" type="button" class="btn btn-sm btn-success"><i class="fas fa-plus" style='color: white' aria-hidden="true"></i> Tambah Customer</a>
            <a href="{{ url('customer_pdf') }}" class="btn btn-sm btn-outline-primary">    
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
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Action</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @php 
                    $no = 0; 
                    @endphp 
                    @foreach ($customer as $k => $v) 
                    @php 
                    $no = $no + 1; 
                    @endphp 
                    <tr> 
                        <td>{{ ++$k }}</td>
                        <td>{{ $v->nama }}</td>
                        <td>{{ $v->alamat }}</td>
                        <td>{{ $v->email }}</td>
                        <td>{{ $v->telepon }}</td>
                        <td><a href="{{ url ('customer/edit/'. $v['id']) }}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i>Edit</a>
                            <a href="{{ url ('customer/destroy/'. $v['id']) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                        </td>
                    </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
<!-- /.card-body --> 
</div> 
@endsection
