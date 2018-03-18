@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/karyawan/create') }}">Tambah Karyawan</a></div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
								<tr>
									<td>No</td>
									<td>Nama Karyawan</td>
									<td>Email</td>
									<td>Jabatan</td>
									<td colspan="2">Opsi</td>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($karyawan as $data)
								<tr>
									<td>{{ $no }}</td>
									<td>{{ $data->nama }}</td>
									<td>{{ $data->email }}</td>
									<td>{{ $data->jabatan }}</td>
									<td><a href="{{ route('karyawan.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
									<td>
								<form action="{{route('karyawan.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<input type="submit" class="btn btn-danger" value="Delete">
									{{csrf_field()}}
								</form>
							</td>
								</tr>
								@php
								$no++;
								@endphp
								@endforeach
							</table>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
