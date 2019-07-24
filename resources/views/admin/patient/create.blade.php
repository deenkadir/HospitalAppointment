@extends('admin.layouts.master')

@section('styles')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Admin
            <small>Register new patient</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                  <!-- Form Element sizes -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Patient Details</h3>
                    </div>
                    <form method="POST" action="{{ route('patients.store') }}">
                      {{ csrf_field() }}
                      <div class="box-body">
                        <input class="form-control" type="text" name="name" placeholder="Enter Patient's Firstname">
                        <br>
                        <input class="form-control" type="text" name="surname" placeholder="Enter Patient's Surname">
                        <br>
                        <input class="form-control" type="email" name="email" placeholder="Enter Patient's email">
                        <br>
                        <input class="form-control" type="password" name="password" placeholder="Enter Password">
                        <br>
                        <input class="form-control" type="password" placeholder="Confirm Password">
                        
                      </div>
                      <!-- /.box-body -->
                      
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        &nbsp;
                        <a href="{{ route('patients.index') }}" class="btn btn-warning">Close</a>
                      </div>
                    </form>

                  </div>
                  <!-- /.box -->
              </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
