@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Minuman
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Data Minuman </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @if(session('success'))
      <div class="alert alert-success">
        <p>{{ session('success') }}</p>
      </div>
      @endif
      @if(session('error'))
      <div class="alert alert-danger">
        <p>{{ session('error') }}</p>
      </div>
      @endif
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Minuman</h3>
          <a href="{{ url ('minuman/add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data </a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama minuman</th>
                <th>Harga minuman</th>
                <th>Nama Koki</th>
              </tr>
            </thead>
            <tbody>
            @php
              $i = 1;
            @endphp
            @foreach($minuman as $row)
              <tr>
                <td>{{ $i }}</td>
                <td>
                  <img src="{{ asset('uploads/'.@$row->foto) }}" width="80px" class="img" alt="">
                </td>
                <td>{{ $row->nama_minuman }}</td>
                <td>{{ $row->harga_minuman }}</td>
                <td>{{ $row->nama_koki }}</td>
                <td>
                <a href="{{ url('minuman/' . $row->id_minuman . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                <a href="{{ url('minuman/' . $row->id_minuman . '/destroy') }}" class="btn btn-danger"><i class="fa fa-close"></i></a>
                </td>
              </tr>
            </tbody>
            @php
              $i++
            @endphp
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          SMKN 4 Bandung
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection

@push('style')
<!-- <link rel="stylesheet" href="bootstrap.css"> -->
@endpush

@push('script')
<!-- <script type="text/javascript" href="datepicker.js"></script> -->
@endpush
