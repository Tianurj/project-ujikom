@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/penitip/create') }}">Tambah Penitip</a></div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
								<tr>
									<td>No</td>
									<td>Nama Penitip</td>
									<td>Alamat</td>
									<td>No Telpon</td>
									<td>No KTP</td>
									<td>Tanggal Penitipan</td>
									<td colspan="2">Opsi</td>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($penitip as $data)
								<tr>
									<td>{{ $no }}</td>
									<td>{{ $data->nama }}</td>
									<td>{{ $data->alamat }}</td>
									<td>{{ $data->no_tlp }}</td>
									<td>{{ $data->no_ktp }}</td>
									<td>{{ $data->tgl_titip }}</td>
									<td><a href="{{ route('penitip.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
									<td>
								<form action="{{route('penitip.destroy', $data->id)}}" method="POST">
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
