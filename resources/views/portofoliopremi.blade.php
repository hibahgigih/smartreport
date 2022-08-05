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
    
            <div class="card-body">
                <table id="example1" class="table table-hover display text-nowrap" place >
                  <thead>
                    <tr>
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
                    @foreach($dbportofolio_premi as $p)
                    <tbody>
                            <td>{{ $p->br_nm }}</td>
                            <td>{{ $p->nopolis }}</td>
                            <td>{{ $p->Main_Product }}</td>
                            <td>{{ $p->Sub_Main_Product }}</td>
                            <td>{{ $p->Nama_Tertanggung }}</td>
                            <td>{{ $p->Alamat_Risiko }}</td>
                            <td>{{ $p->Premium_Name }}</td>
                            <td>{{ $p->Broker_Name }}</td>
                            <td>{{ $p->Other_Name }}</td>
                            <td>{{ $p->Geofgrafi_Area }}</td>
                            <td>{{ $p->Sumber_Bisnis }}</td>
                            <td>{{ $p->Pemberi_Bisnis }}</td>
                            <td>{{ $p->Pembawa_Bisnis }}</td>
                            <td>{{ $p->uw_yr }}</td>
                            <td>{{ $p->Mata_uang }}</td>
                            <td>{{ $p->Kurs }}</td>
                            <td>{{ date('d/m/Y', strtotime($p->Tgl_Awal)) }}</td>
                            <td>{{ date('d/m/Y', strtotime($p->Tgl_Akhir)) }}</td>
                            <td>{{ $p->Tgl_Trans }}</td>
                            <td>{{ $p->Status_Polis }}</td>
                            <td>{{ $p->TSI }}</td>
                            <td>{{ $p->TSI_100 }}</td>
                            <td>{{ $p->PREMI }}</td>
                            <td>{{ $p->OUTGO }}</td>
                            <td>{{ $p->tga_pct }}</td>
                            <td>{{ $p->your_ref_num }}</td>
                            <td>{{ $p->DNCN }}</td>
                            <td>{{ $p->Tgl_Nota }}</td>
                            <td>{{ $p->NoVoucher }}</td>
                            <td>{{ date('d/m/Y', strtotime($p->Tgl_Voucher)) }}</td>
                        </tbody>
                  @endforeach
                </div>
            </div>
        </div>
</table>
<br>
{{ $dbportofolio_premi->links() }}
</div>
</div>
</div>





@endsection
