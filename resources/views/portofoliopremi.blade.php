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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-body">
            <!-- <table border="0" cellspacing="5" cellpadding="5">
              <tbody>
              <tr>
              <td>Start date:</td>
              <td><input type="text" id="min" name="min"></td>
              </tr>
              <tr>
              <td>End date:</td>
              <td><input type="text" id="max" name="max"></td>
              </tr>
              </tbody></table> -->
              <div class="row well input-daterange">
          <div class="col-sm-4">
          <label class="control-label">Jenis Tanggal</label>
          <select class="form-control" name="gender" id="gender" style="height: 40px;">
            <option value="">- Pilih -</option>
            <option value="male">Jangka Waktu Awal</option>
            <option value="female">Jangka Waktu Akhir</option>
            <option value="female">Transaksi</option>
          </select>
          </div>

          <div class="col-sm-3">
          <label class="control-label">Dari</label>
          <input class="form-control datepicker" type="text" name="initial_date" id="initial_date" placeholder="yyyy-mm-dd" style="height: 40px;"/>
          </div>

          <div class="col-sm-3">
          <label class="control-label">Sampai</label>
          <input class="form-control datepicker" type="text" name="final_date" id="final_date" placeholder="yyyy-mm-dd" style="height: 40px;"/>
          </div>

          <div class="col-sm-2">
          <button class="btn btn-success btn-block" type="submit" name="filter" id="filter" style="margin-top: 30px">
            <i class="fa fa-filter"></i> Filter
          </button>
          </div>
          
          <div class="col-sm-12 text-danger" id="error_log"></div>
          </div>
          <br/><br/>

            <table class="table table-hover portofoliopremi nowrap bg-light" >
                  <thead>
                    <tr>
                        <!-- <th>No.</th> -->
                        <th>Cabang</th>
                        <th>No Polis</th>
                        <th>Main Product</th>
                        <th>Sub Main Product</th>
                        <th>Nama Tertanggung</th>
                        <th>Alamat Resiko</th>
                        <th>Premium Name</th>
                        <th>Broker name</th>
                        <th>Other Name</th>
                        <th>Geografi Area</th>
                        <th>Sumber Bisnis</th>
                        <th>Pemberi Bisnis</th>
                        <th>Pembawa Bisnis</th>
                        <th>UW Year</th>
                        <th>Mata Uang</th>
                        <th>Kurs</th>
                        <th>Tgl Awal</th>
                        <th>Tgl Akhir</th>
                        <th>Tgl Transaksi</th>
                        <th>Status Polis</th>
                        <th>TSI</th>
                        <th>TSI 100</th>
                        <th>Premi</th>
                        <th>OUTGO</th>
                        <th>TGA Persen</th>
                        <th>Your Ref Num</th>
                        <th>DNCN</th>
                        <th>Tgl Nota</th>
                        <th>No Voucher</th>
                        <th>Tgl Voucher</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <tr>
                        <!-- <th>No.</th> -->
                        <th>Cabang</th>
                        <th>No Polis</th>
                        <th>Main Product</th>
                        <th>Sub Main Product</th>
                        <th>Nama Tertanggung</th>
                        <th>Alamat Resiko</th>
                        <th>Premium Name</th>
                        <th>Broker name</th>
                        <th>Other Name</th>
                        <th>Geografi Area</th>
                        <th>Sumber Bisnis</th>
                        <th>Pemberi Bisnis</th>
                        <th>Pembawa Bisnis</th>
                        <th>UW Year</th>
                        <th>Mata Uang</th>
                        <th>Kurs</th>
                        <th>Tgl Awal</th>
                        <th>Tgl Akhir</th>
                        <th>Tgl Transaksi</th>
                        <th>Status Polis</th>
                        <th>TSI</th>
                        <th>TSI 100</th>
                        <th>Premi</th>
                        <th>OUTGO</th>
                        <th>TGA Persen</th>
                        <th>Your Ref Num</th>
                        <th>DNCN</th>
                        <th>Tgl Nota</th>
                        <th>No Voucher</th>
                        <th>Tgl Voucher</th>
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
        $(".portofoliopremi").DataTable({
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
        autoWidth: true,
        scrollX: true,
        searching: true,
        cache: true,
        destroy: true,
        processing: true,
        serverSide: true,
        deferRender: true,
        type: "GET",
        dataType: "json",
        ajax: "{{ route('portofoliopremi') }}",
        columns: [
            // { "data": "id" },
            { "data": "br_nm" },
            { "data": "nopolis" },
            { "data": "Main_Product" },
            { "data": "Sub_Main_Product"},
            { "data": "Nama_Tertanggung"},
            { "data": "Alamat_Risiko"},
            { "data": "Premium_Name" },
            { "data": "Broker_Name" },
            { "data": "Other_Name" },
            { "data": "Geofgrafi_Area" },
            { "data": "Sumber_Bisnis" },
            { "data": "Pemberi_Bisnis" },
            { "data": "Pembawa_Bisnis" },
            { "data": "uw_yr" },
            { "data": "Mata_uang" },
            { "data": "Kurs" },
            { "data": "Tgl_Awal" },
            { "data": "Tgl_Akhir" },
            { "data": "Tgl_Trans" },
            { "data": "Status_Polis" },
            { "data": "TSI" },
            { "data": "TSI_100" },
            { "data": "PREMI" },
            { "data": "OUTGO" },
            { "data": "tga_pct" },
            { "data": "your_ref_num" },
            { "data": "DNCN" },
            { "data": "Tgl_Nota" },
            { "data": "NoVoucher" },
            { "data": "Tgl_Voucher" }
        ],

        
            
    });

    $('.portofoliopremi tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Cari ' + title + '" />');
    });

    var minDate, maxDate;
 
    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[4] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
        }
    );
 
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
 
    // DataTables initialisation
    var table = $('#example').DataTable();
 
    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });


    });
</script>

@endpush


@endsection
