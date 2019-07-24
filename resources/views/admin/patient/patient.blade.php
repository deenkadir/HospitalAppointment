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
            Patients
            <small>Patients Record</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Registered Patients</h3>
                        <a class="col-lg-offset-5 btn btn-sm btn-success" as href="{{ route('patients.create') }}">Add New</a>
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
                            <th>Firstname</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->surname }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->created_at }}</td>
                                <td>
                                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-xs btn-warning">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <form id="delete-form-{{ $patient->id }}" action="{{ route('patients.destroy', $patient->id) }}" style="display: none" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                    </form>
                                    <a href="" class="btn btn-xs btn-danger" onclick="
                                            if(confirm('Are you sure you want to delete this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $patient->id }}').submit();
                                            }
                                            else
                                            {
                                            event.preventDefault();
                                            }
                                            ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Firstname</th>
                            <th>Surname</th>
                            <th>Email</th>
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
