@extends('admin.layouts.master')

@section('styles')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Doctors
            <small>Doctors Record</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Registered Doctors</h3>
                        <a class="col-lg-offset-5 btn btn-sm btn-success" as href="{{ route('doctors.create') }}">Add New</a>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Specialty</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-xs btn-warning">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="" class="btn btn-xs btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>

                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Specialty</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('scripts')
   <!-- DataTables -->
   <script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.j')}}s"></script>
   <script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

   <!-- page script -->
    <script>
        $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        })
    </script>
@endsection
