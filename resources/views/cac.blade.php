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
              <div class="card-body ">
                <table class="table table-hover cac nowrap" >
                    <thead>
                        <th>ID</th>
                        <th>No Polisi</th>
                        <th>Thn Kendaraan</th>
                        <th>Nama Tertanggung</th>
                        <th>Kode Cabang</th>
                        <th>Nomor Polis</th>
                        <th>Mulai</th>
                        <th>Akhir</th>
                        <th>Nomor Rangka</th>
                        <th>Nomor Mesin</th>
                        <th>Crc</th>
                        <th>Nilai Premi</th>
                        <th>No Nota</th>
                        <th>Status Premi</th>
                        <th>Tanggal Nota</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <!-- <br>
                </div> -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
</div>
</div>
      <!-- /.container-fluid -->

@push('js')
<script>

    $(document).ready(function () {
        $(".cac").DataTable({
        extend: ["copy", "csv", "excel"],
        autoWidth: true,
        scrollX: true,
        searching: true,
        cache: true,
        destroy: true,
        processing: true,
        serverSide: true,
        type: "GET",
        dataType: "json",
        ajax: "{{ route('cac') }}",
        columns: [
            { "data": "ID" },
            { "data": "nopolisi" },
            { "data": "mfg_yr" },
            { "data": "insrd_pr_nm" },
            { "data": "br_id"},
            { "data": "pol_num"},
            { "data": "awal"},
            { "data": "akhir" },
            { "data": "chassis_num" },
            { "data": "engine_num" },
            { "data": "curr" },
            { "data": "inst_amt" },
            { "data": "inv_num" },
            { "data": "Ket" },
            { "data": "prodr_dt" },

        ],
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
    });
    });
</script>

@endpush

    @endsection

