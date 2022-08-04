@extends('layout.admin')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Portofolio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portofolio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>Cabang</th>
                  <th>No Polis</th>
                  <th>Main Product</th>
                  <th>Sub Main Product</th>
                  <th>Nama Tertanggung</th>
			            <th>Tgl Awal</th>
                  <th>Tgl Akhir</th>
                  <th>Premi</th>
                  </tr>
                  </thead>
                  @foreach($dbportofolio_premi as $p)
                  <tbody>
                  <td>{{ $p->br_nm }}</td>
                  <td>{{ $p->nopolis }}</td>
                  <td>{{ $p->Main_Product }}</td>
                  <td>{{ $p->Sub_Main_Product }}</td>
                  <td>{{ $p->Nama_Tertanggung }}</td>
                  <td>{{ date('d/m/Y', strtotime($p->Tgl_Awal)) }}</td>
                  <td>{{ date('d/m/Y', strtotime($p->Tgl_Akhir)) }}</td>
                  <td>{{ $p->PREMI }}</td>
                  </tbody>
                  @endforeach

                  
                </table>
                {{ $dbportofolio_premi->links() }}
                </div>
                
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  
      

@endsection