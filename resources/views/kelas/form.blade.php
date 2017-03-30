@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($edit) ? 'Tambah' : 'Edit' }} Data Kelas
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Data Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <a href="{{url('kelas')}}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Kembali </a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <section class="content">
        		<div class="row">
        			<div class="box box-primary">
        				<form action="{{ empty($edit) ? url('kelas/add') : url('kelas/'.@$result->id_kelas.'/edit') }}" method="POST">
                  {{ csrf_field() }}

                  @if(!empty($result))
                  {{ method_field('PATCH') }}
                  @endif

        					<div class="box-body">
        						<div class="form-group">
        							<label for="nama_kelas">Nama Kelas</label>
        							<input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Nama Kelas" value="{{ @$result->nama_kelas }}"/>
        						</div>
        						<div class="form-group">
        							<label for="jurusan">Jurusan</label>
                      <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan" value="{{ @$result->nama_kelas }}"/>
        						</div>
        					</div>
        					<div class="box-footer">
        						<button type="submit" class="btn btn-primary">Submit</button>
        					</div>
        				</form>
        			</div>
        		</div>
        	</section>
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
