@extends('backend.theme') 

@section('content') 
 <div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">User</h3> 
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
            <a href="{{ url('user/create')}}" type="button" class="btn btn-sm btn-success"><i class="fas fa-user-plus" style='color: white' aria-hidden="true"></i> Tambah User</a> 
            <a href="{{ url('user_pdf') }}" class="btn btn-sm btn-outline-primary">    
                <i class="fas fa-file-pdf"></i> Cetak PDF</a> 
            <!--<a href="" class="btn btn-outline-success btn-sm my-3">    
                <i class="fas fa-file-excel"></i> Cetak EXCEL</a>-->
            </a>       
        </div> 
        </div> 
        <div class="card-body"> 
            <table id="example1" class="table table-bordered table-striped"> 
                <thead> 
                    <tr> 
                        <th>No</th> 
                        <th>Nama</th> 
                        <th>Email</th>  
                        <th>Action</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @php 
                    $no = 0; 
                    @endphp 
                    @foreach ($user as $itemuser) 
                    @php 
                    $no = $no + 1; 
                    @endphp 
                    <tr> 
                        <td>{{ $no }}</td> 
                        <td>{{ $itemuser->name }}</td> 
                        <td>{{ $itemuser->email }}</td> 
                        <td>
                            <a href="{{'/user/edit/'. $itemuser->id }}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i>Edit</a>
                            <a href="{{'/user/destroy/'. $itemuser->id }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                        </td> 
                    </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
<!-- /.card-body --> 
</div> 
@endsection