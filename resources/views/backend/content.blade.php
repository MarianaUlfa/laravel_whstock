<div class="card"> 
  <div class="card-header"> 
      <h3 class="card-title">Dashboard</h3> 
  </div>
  <div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ \App\Models\User::count() }}</h3> 

        <p>User</p> 
      </div>
      <div class="icon">
        <i class="fas fa-users nav-icon"></i>
      </div>
      <a href="{{ url ('user')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ \App\Models\Category::count() }}</h3> 

        <p>Kategori</p> 
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-list-alt"></i>
      </div>
      <a href="{{ url ('category')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ \App\Models\Product::count() }}</h3> 

        <p>Produk</p> 
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="{{ url ('produk')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ \App\Models\Customer::count() }}</h3> 

        <p>pelanggan</p> 
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-user-circle"></i>
      </div>
      <a href="{{ url ('customer')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ \App\Models\Supplier::count() }}</h3> 

        <p>Supplier</p> 
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-portrait"></i>
      </div>
      <a href="{{ url ('supplier')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ \App\Models\Product_Masuk::count() }}</h3> 

        <p>Produk Masuk</p> 
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-sign-in-alt"></i>
      </div>
      <a href="{{ url ('masuk')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ \App\Models\Product_Keluar::count() }}</h3> 

        <p>Produk Keluar</p> 
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-sign-out-alt"></i>
      </div>
      <a href="{{ url ('keluar')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
    </div>
  </div>
 </div>
</div>
 