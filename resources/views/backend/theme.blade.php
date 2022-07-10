<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WHstock | Dashboard</title>

  <link href="{{asset('backend/dist/img/inventory.jpg')}}" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}} ">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
</head>
    <body class="sidebar-mini layout-fixed sidebar-open" data-panel-auto-height-mode="height" style="height: auto;">
          <div class="wrapper">
            @include('backend.navbar')
            @include('backend.sidebar')
            <div class="content-wrapper"> 
              <div class="content-header"> 
                <div class="container-fluid"> 
                  <div class="row mb-2"> 
                    <div class="col-sm-6"> 
                      <h1 class="m-0">WHstock Inventory Barang</h1> 
                    </div><!-- /.col --> 
                  </div><!-- /.row --> 
                </div><!-- /.container-fluid --> 
              </div> 
              <section class="content"> 
                <div class="container-fluid">
                  @yield('content')
                </div> 
              </section> 
            </div> 
            @include('backend.footer')
            @include('backend.library')
          </div> 
    </body>
</html>
