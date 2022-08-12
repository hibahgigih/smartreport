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
                        <th>No.</th>
                        <th>No Polisi</th>
                        <th>Thn Kendaraan</th>
                        <th>Nama Tertanggung</th>
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
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>No Polisi</th>
                        <th>Thn Kendaraan</th>
                        <th>Nama Tertanggung</th>
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
                    </tr>
                    </tfoot>
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
          initComplete: function () {
            // Apply the search
            this.api()
                .columns()
                .every(function () {
                    var that = this;
 
                    $('input', this.footer()).on('keyup change clear', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
        },
 

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

        columnDefs : [{
            render : function (data,type,row){
                return data + ' -  ' + 'M' + '-' + row['pol_num'] + '/' + row['awal'] + '/' + row['renew_num'] + '/' + row['updt_num']; 
            },
            "targets" : 4,

            },

            {"visible": false, "targets" : 1}
        ],
        
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
    });

    $('.cac tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Cari ' + title + '" />');
    });

   
       


    });
</script>

@endpush

    @endsection

