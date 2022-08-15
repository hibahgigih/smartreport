@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bonding</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bonding</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-hover bonding nowrap" >
                  <thead>
                    <tr>
                        <!-- <th>No.</th> -->
                        <th>Branch</th>
                        <th>No Polis</th>
                        <th>Principal</th>
                        <th>Tanggal</th>
                        <th>TSI</th>
                        <th>Nilai Jaminan</th>
                        <th>Jenis Jaminan</th>
                        <th>Mulai Pertanggungan</th>
                        <th>Akhir Pertanggungan</th>
                        <th>Today</th>
                        <th>Hari</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <tr>
                        <!-- <th>No.</th> -->
                        <th>Branch</th>
                        <th>No Polis</th>
                        <th>Principal</th>
                        <th>Tanggal</th>
                        <th>TSI</th>
                        <th>Nilai Jaminan</th>
                        <th>Jenis Jaminan</th>
                        <th>Mulai Pertanggungan</th>
                        <th>Akhir Pertanggungan</th>
                        <th>Today</th>
                        <th>Hari</th>
                        <th>Status</th>
                  </tr>
                </tfoot>
                </table>
                </div>
            </div>
        </div>

</div>
</div>
</div>

@push('js')
<script>

    $(document).ready(function () {
        $(".bonding").DataTable({
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

        dom: 'Bfrtip',
        lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                    ],
        buttons: [
              'pageLength','copy', 'csv', 'excel', 'pdf', 'print'
        ],
        autoWidth: false,
        scrollX: true,
        searching: true,
        cache: true,
        destroy: true,
        processing: true,
        serverSide: true,
        type: "GET",
        dataType: "json",
        ajax: "{{ route('bonding') }}",
        columns: [
            // { "data": "ID" },
            { "data": "branch" },
            { "data": "br_id" },
            { "data": "Principal" },
            { "data": "Tanggal"},
            { "data": "TSI"},
            { "data": "Nilai_Jaminan"},
            { "data": "Jenis_Jaminan" },
            { "data": "Mulai_Pertanggungan" },
            { "data": "Akhir_Pertanggungan" },
            { "data": "Today" },
            { "data": "Hari" },
            { "data": "_Status_" },
        ],
        columnDefs : [{
            render : function (data,type,row){
                return data + ' -  ' + row['cob_id'] + '-' + row['pol_num'] + '/' + new Date(row['Mulai_Pertanggungan']).getFullYear() + '/' + row['renew_num'] + '/' + row['updt_num']; 
            },
            "targets" : 2
            },
            {"visible": false, "targets" : 1}
        ],

    });

    $('.bonding tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Cari ' + title + '" />');
    });

    });
</script>

@endpush

    

@endsection