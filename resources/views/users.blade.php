@extends('layout.admin')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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

            <a class="btn btn-success" href="javascript:void(0)" id="createNewUser"> Tambah User</a>
            <br><br>
            <table class="table table-hover user nowrap bg-light" >
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Opsi</th>
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


<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="userForm" name="userForm" class="form-horizontal">
                   <!-- <input type="hidden" name="id" id="id"> -->
                   <div class="form-group">
                        <label for="id" class="col-sm-2 control-label">Id</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="id" name="id" placeholder="Enter Id" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
       
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value=""  required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" value=""  required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="role" class="col-sm-2 control-label">Role</label>
                        <select class="form-control" name="role" id="role">
                        <option value="">- Pilih Role -</option>
                            <option value="IT">IT</option>
                            <option value="UW">UW</option>
                            <option value="Klaim">Klaim</option>
                            <option value="Aktuaris">Aktuaris</option>
                        </select>
                    </div>

                    
        
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Simpan
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@push('js')

<script type="text/javascript">
$(function () {

     /*------------------------------------------
     --------------------------------------------
     Pass Header Token
     --------------------------------------------
     --------------------------------------------*/ 
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

     /*------------------------------------------
    --------------------------------------------
    Render DataTable
    --------------------------------------------
    --------------------------------------------*/
        var table = $('.user').DataTable({
        autoWidth: false,
        scrollX: true,
        searching: true,
        cache: true,
        destroy: true,
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            { "data": "id" },
            { "data": "name" },
            { "data": "email" },
            { "data": "password"},
            { "data": "role"},
            { "data": "opsi", orderable: false, searchable: false},
        ],

    });


    /*------------------------------------------
    --------------------------------------------
    Click to Button
    --------------------------------------------
    --------------------------------------------*/
   $('#createNewUser').click(function () {
        $('#saveBtn').val("create-user");
        $('#id').val('');
        $('#userForm').trigger("reset");
        $('#modelHeading').html("Tambah User");
        $('#ajaxModel').modal('show');
    });

     /*------------------------------------------
    --------------------------------------------
    Click to Edit Button
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.editUser', function () {
      var id = $(this).data('id');
      $.get("{{ route('users.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#id').val(data.id);
          $('#name').val(data.name);
          $('#email').val(data.email);
          $('#password').val(data.password);
          $('#role').val(data.role);
      })
    });

      /*------------------------------------------
    --------------------------------------------
    Delete Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.deleteUser', function () {
    if(!confirm("Anda yakin ingin hapus?")) {
       return false;
     }
     
     var id = $(this).data("id");
     
     $.ajax({
         type: "DELETE",
         url: "{{ route('users.index') }}"+'/'+id,
         success: function (data) {
             table.draw();
         },
         error: function (data) {
             console.log('Error:', data);
         }
     });
 });

    /*------------------------------------------
    --------------------------------------------
    Create Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
          data: $('#userForm').serialize(),
          url: "{{ route('users.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#userForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Simpan');
          }
      });
    });

   

    });
</script>




@endpush




<!-- <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p> -->
@endsection