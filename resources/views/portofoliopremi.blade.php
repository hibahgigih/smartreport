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
            <table class="table table-hover portofoliopremi nowrap bg-light" >
                  <thead>
                    <tr>
                        <th>No.</th>
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
        ajax: "{{ route('portofoliopremi') }}",
        columns: [
            { "data": "id" },
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
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
    });
    });
</script>

@endpush


@endsection
