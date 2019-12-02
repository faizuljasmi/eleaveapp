@extends('layouts.master')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>it all starts here</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->

    @if($role->name == "Admin")
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Employees List</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <tr>
            <th style="width: 10px">ID</th>
            <th>Name</th>
            <th>Created at</th>
            <th style="width: 40px">Status</th>
          </tr>
          @foreach($users as $u)
            <tr>
              <td>{{$u->id}}</td>
              <td>{{$u->name}}</td>
              <td>{{$u->created_at->format('F d, Y')}}</td>
            </tr>
            @endforeach
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    @endif
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
