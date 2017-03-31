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

      @if(session('error'))
      <div class="alert alert-danger">
        <p>{{ session('error') }}</p>
      </div>
      @endif

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <a href="{{url('makanan')}}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Kembali </a>
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
        				<form action="{{ empty($edit) ? url('makanan/add') : url('makanan/'.@$result->id_makanan.'/edit') }}" method="POST" enctype="multipart/form-data">
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
        							<label for="nama_makanan">Nama Makanan</label>
        							<input type="text" name="nama_makanan" class="form-control" id="nama_makanan" placeholder="Nama Makanan" value="{{ @$result->nama_makanan }}"/>
        						</div>

                    <div class="form-group">
                      <label for="harga_makanan">Harga Makanan</label>
                      <input type="number" name="harga_makanan" class="form-control" id="harga_makanan" placeholder="Harga Makanan" value="{{ @$result->harga_makanan }}"/>
                    </div>

                    <div class="form-group">
                      <label for="nama_koki">Nama Koki</label>
                      <!-- <input type="text" name="nama_koki" class="form-control" id="nama_koki" placeholder="Nama Koki" value="{{ @$result->nama_koki }}"/> -->
                      <select name="nama_koki" class="form-control">
                        @foreach($koki as $row)
                          <option value="{{ $row->nama_lengkap }}">{{ $row->nama_lengkap }}</option>
                        @endforeach
                      </select>
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
