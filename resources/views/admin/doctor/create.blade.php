@extends('admin.layouts.master')

@section('styles')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Doctor
            <small>Register new doctor</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                  <!-- Form Element sizes -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Doctor Details</h3>
                    </div>
                    <form method="POST" action="">
                      <div class="box-body">
                        <input class="form-control" type="text" name="name" placeholder="Enter Doctor's Firstname">
                        <br>
                        <input class="form-control" type="text" name="surname" placeholder="Enter Doctors's Surname">
                        <br>
                        <input class="form-control" type="email" name="email" placeholder="Enter Doctors's email">
                        <br>
                        <select class="form-control" name="specialty">
                          <option selected disabled>Select Specialty</option>
                          <option>Pediatrician</option>
                          <option>Gynaecologist</option>
                          <option>Opthalmologist</option>
                        </select>
                        <br>
                        <input class="form-control" type="password" name="password" placeholder="Enter Password">
                        <br>
                        <input class="form-control" type="password" placeholder="Confirm Password">
                        
                      </div>
                      <!-- /.box-body -->
                      
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        &nbsp;
                        <a href="{{ route('doctors.index') }}" class="btn btn-warning">Close</a>
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
