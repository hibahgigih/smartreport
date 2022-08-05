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

    <div class="card-body">
                <table id="example1" class="table table-hover display text-nowrap" place >
                  <thead>
                    <tr>
                        <th>Branch</th>
                        <th>Kode Cabang/th>
                        <th>Main Product</th>
                        <th>No Polis</th>
                        <th>Renewal</th>
                        <th>Update/th>
                        <th>Principal</th>
                        <th>Tanggal</th>
                        <th>TSI</th>
                        <th>Nilai Jaminan</th>
                        <th>Jenis Jaminan</th>
                        <th>Mulai Pertangungan</th>
                        <th>Akhir Pertanggungan</th>
                        <th>Today</th>
                        <th>Hari</th>
                        <th>Status</th>
                    </tr>
                </thead>
                    @foreach($dbbonding as $p)
                    <tbody>
                            <td>{{ $p->branch }}</td>
                            <td>{{ $p->br_id }}</td>
                            <td>{{ $p->cob_id }}</td>
                            <td>{{ $p->pol_num }}</td>
                            <td>{{ $p->renew_num }}</td>
                            <td>{{ $p->updt_num }}</td>
                            <td>{{ $p->Principal }}</td>
                            <td>{{ $p->Tanggal }}</td>
                            <td>{{ $p->TSI }}</td>
                            <td>{{ $p->Nilai_Jaminan }}</td>
                            <td>{{ $p->Jenis_Jaminan }}</td>
                            <td>{{ $p->Mulai_Pertangungan }}</td>
                            <td>{{ $p->Akhir_Pertanggungan }}</td>
                            <td>{{ $p->Today }}</td>
                            <td>{{ $p->Hari }}</td>
                            <td>{{ $p->_Status_ }}</td>
                        </tbody>
                  @endforeach
                </div>
            </div>
        </div>
</table>
<br>
{{ $dbbonding->links() }}
</div>
</div>
</div>
    

@endsection