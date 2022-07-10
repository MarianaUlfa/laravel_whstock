@extends('backend.theme') 

@section('content') 
<div class="card"> 
    <div class="card-header"> 
        <h3 class="card-title">User</h3> 
    </div> 
    <!-- /.card-header --> 
    <div class="card-body"> 
        <form action="{{ url('user/store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf 
            <div class="mb-3"> 
                <label for="">Nama Lengkap</label> 
                <input type="text" name="name" required class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Email</label> 
                <input type="text" name="email" class="form-control" /> 
            </div> 
            <div class="mb-3"> 
                <label for="">Password</label> 
                <input type="password" name="password" class="form-control" placeholder="Password" required /> 
            </div> 
            <div class="mb-3"> 
                <button type="submit" class="btn btn-primary">Save</button> 
            </div> 
        </form> 
    </div> 
</div> 
@endsection
