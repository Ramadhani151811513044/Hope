@extends('index')
@section('extracss')
<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
@endsection

    @section('extraheader')
        <div class="page-title">
            <ol class="breadcrumb text-right">
                <li><a href="#">User</a></li>
                <li><a href="#">Lihat User</a></li>
            </ol>
        </div>
    @endsection

@section('content')
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                <a href="/formuser">
                                    <button class="btn btn-primary">+Tambahkan Data</button>
                                </a>
                            </div> -->
                            
                            <div class="card-body">
                                
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                
                                    <thead>
                                        <tr>
                                            <!-- <th>ID User</th> -->
                                            <th>Role</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $us)
                                        <tr>
                                            <!-- <td>{{$us->id}}</td> -->
                                            <td>{{$us->role}}</td>
                                            <td>{{$us->name}}</td>
                                            <td>{{$us->email}}</td>
                                            <td style="text-align:center">
                                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                         </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    @section('script')
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
    

    <script type="text/javascript"> 
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
    </script>
    @endsection
    @endsection
</html>