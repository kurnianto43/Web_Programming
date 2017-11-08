@extends('layouts.master')

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2>Daftar Spare Parts</h2>
				<br>
				
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Nomor Spare Part</th>
					      <th scope="col">Nama Spare Part</th>
					      <th scope="col">Jumlah</th>
					      <th scope="col">Remarks</th>

					    </tr>
					  </thead>
					 @foreach ($parts as $part)
					 <tbody>
					    <tr>
					      <td>{{ $part -> id }}</td>
					      <td>{{ $part -> no_spp }}</td>
					      <td>{{ $part -> nama_spp }}</td>
					      <td>{{ $part -> jumlah }}</td>
					      <td>{{ $part -> remarks }}</td>
					    </tr>  
					  </tbody>
					  @endforeach 
					</table>
					

					<a href="{{ route('spp.create') }}" class="btn btn-primary">Tambah Data</a>
			</div>
		</div>
	</div>
	
@endsection