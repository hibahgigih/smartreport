@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CAC</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CAC</li>
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
                  <th>No Polisi</th>
			      <th>Thn Kendaraan</th>
                  <th>Nama Tertanggung</th>
                  <th>Nomor Rangka</th>
			      <th>Nomor Mesin</th>
                  <th>Mulai</th>
                  <th>Akhir</th>
                  <th>Nilai Premi</th>
                  <th>Status Premi</th>
                  </tr>
                  </thead>
                  @foreach($dbmotor as $p)
                  <tbody>
                  <td>{{ $p->nopolisi }}</td>
			      <td>{{ $p->mfg_yr }}</td>
			      <td>{{ $p->insrd_pr_nm }}</td>
                  <td>{{ $p->chassis_num }}</td>
                  <td>{{ $p->engine_num }}</td>
			      <td>{{ date('d/m/Y', strtotime($p->awal)) }}</td>
                  <td>{{ date('d/m/Y', strtotime($p->akhir)) }}</td>
                  <td>{{ number_format($p->inst_amt, 2, ',', '.') }}</td>
                  <td>{{ $p->Ket }}</td>
                  </tbody>
                  @endforeach

                  
                </table>
                {{ $dbmotor->links() }}
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