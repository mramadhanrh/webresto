@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($edit) ? 'Tambah' : 'Edit' }} Data Koki
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Data Koki</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <a href="{{url('koki')}}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Kembali </a>
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
        				<form action="{{ empty($edit) ? url('koki/add') : url('koki/'.@$result->id_koki.'/edit') }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}

                  @if(!empty($result))
                  {{ method_field('PATCH') }}
                  @endif

        					<div class="box-body">
                    <!-- <div class="form-group">
        							<label for="nis">NIS</label>
        							<input type="text" name="nis" class="form-control" id="nis" placeholder="NIS" value="{{ @$result->nis }}"/>
        						</div> -->
        						<div class="form-group">
        							<label for="nama_lengkap">Nama Koki</label>
        							<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Koki" value="{{ @$result->nama_lengkap }}"/>
        						</div>
        						<div class="form-group">
        							<label for="jenis_kelamin">Jurusan</label>
                      <select class="form-control" name="jenis_kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
        						</div>
                    <div class="form-group">
        							<label for="agama">Agama</label>
                      <select class="form-control" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Shinto">Shinto</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
        						</div>
                    <div class="form-group">
        							<label for="alamat">Alamat</label>
        							<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{ @$result->alamat }}"/>
        						</div>
                    <div class="form-group">
        							<label for="no_telp">No Telepon</label>
        							<input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="No Telepon" value="{{ @$result->no_telp }}"/>
        						</div>
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" name="foto">
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
