@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
				  <div class="panel-heading"><h2>Tambah Data Spare Part</h2></div>
				  <div class="panel-body">
				  	<form action="{{ route('spp.store') }}" method="post">
				  		{{csrf_field()}}
				  		<div class="form-group">
						  <label for="">Nomor Spare Part:</label>
						  <input type="text" name="no_spp" placeholder="Masukan Nomor Spare Part" class="form-control" id="">
						</div>
						<div class="form-group">
						  <label for="">Nama Spare Part:</label>
						  <input type="text" name="nama_spp" placeholder="Masukan Nama Spare Part" class="form-control" id="">
						</div>
						<div class="form-group">
						  <label for="">Jumlah:</label>
						  <input type="text" name="jumlah" placeholder="Masukan Jumlah Spare Part" class="form-control" id="">
						</div>
						<div class="form-group">
						  <label for="">Remarks:</label>
						  <input type="text" name="remarks" placeholder="Berikan Keterangan (jika ada)" class="form-control" id="">
						</div>
						<div class="form-group">
						  <input type="submit" class="btn btn-primary" value="Simpan">
						</div>
				  	</form>

				  </div>
				</div>
				
				
			</div>
		</div>
	</div>
		
@endsection