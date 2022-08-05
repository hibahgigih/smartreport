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
                <table id="example1" class="table table-hover display text-nowrap" >
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Branch</th>
                        <th>No Polis</th>
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
                <tbody>
                    @foreach($dbbonding as $key => $p)
                    <tr>
                    <td>{{ $key+1 }}</td>
                            <td>{{ $p->branch }}</td>
                            <td>{{ $p->br_id }}-{{ $p->cob_id }}-{{ $p->pol_num }}/{{ date('Y', strtotime($p->Mulai_Pertangungan)) }}/{{ $p->renew_num }}/{{ $p->updt_num }}</td>
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
                      </tr>
                      @endforeach
                        </tbody>
                  </table>
                    <!-- <br>
                  {{ $dbbonding->links() }} -->
                </div>
            </div>
        </div>

</div>
</div>
</div>


    

@endsection