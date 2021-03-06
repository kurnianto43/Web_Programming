@extends('layouts.master')

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading"><h2>Data Spare Part</h2></div>
					<div class="panel-body">
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
					      <td>{{ $part -> remarks }}
		
					      	<div class="pull-right">			      		
					      		<form action="{{ route('spp.destroy', $part) }}" method="post">
					      			{{ csrf_field() }}
					      			{{ method_field('DELETE') }}
					      			<button type="submit" class="btn btn-xs btn-danger">Delete</button>
					      		</form>
							</div>

							<div class="pull-right">
					      		<a id="btn-edit" href="{{ route('spp.edit', $part) }}" class="btn btn-xs btn-warning">Edit</a>
					      	</div>

							
						  </td>
							
					    </tr>

					  </tbody>

					  @endforeach 
					</table>	
					<a href="{{ route('spp.create') }}" class="btn btn-primary">Tambah Data</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection