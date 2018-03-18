@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/barang/create') }}">Tambah Barang</a></div>

                <div class="panel-body">
                    <div class="col-md-18">
                        <div class="table-responsive" width="80%
                        ">
							<table class="table">
								<tr>
									<td>No</td>
                                    <td>Nama Barang</td>
                                    <td>Nama Penitip</td>
                                    <td>Kategori</td>
                                    <td>Jumlah</td>
                                    <td>Gambar</td>
                                    <td>Harga Awal</td>
                                    <td>Harga Jual</td>
                                    <td>Keterangan</td>
									<td colspan="2">Opsi</td>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($barang as $data)
								<tr>
									<td>{{ $no }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->penitip->nama }}</td>
                                    <td>{{ $data->kategori->nama }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    
                                    <td><img src="{{asset('img/'. $data->foto)}}" height="50px"></td>
									
									

									<td>{{ $data->harga }}</td>
									<td>{{ $data->hargajual }}</td>
                                    <td>{{ $data->keterangan }}</td>

                                    <td><a href="{{ route('barang.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>

                                    <td>
								<form action="{{route('barang.destroy', $data->id)}}" method="POST">
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
