@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/penjualan/create') }}">Tambah Penjualan</a></div>

                <div class="panel-body">
                    <div class="col-md-18">
                        <div class="table-responsive" width="80%
                        ">
							<table class="table">
								<tr>
									<td>No</td>
                                    <td>Tanggal Penjualan</td>
                                    <td>Nama Penitip</td>
                                    <td>Nama Barang</td>
                                    <td>Jumlah</td>
                                    <td>Harga Satuan</td>
                                    <td>Total Harga</td>
									<td colspan="2">Opsi</td>
								</tr>
								@foreach($penjualan as $data)
								@php
								$no = 1;
								@endphp
								<tr>
									<td>{{ $no }}</td>
                                    <td>{{ $data->tgl }}</td>
                                    <td>{{ $data->penitip->nama }}</td>
                                    <td>{{ $data->barang->nama }}</td>
                                    <td>{{ $data->jumlah }}</td>
									<td>{{ $data->harga }}</td>
									<td>{{ $data->total }}</td>

                                    <td>
								<form action="{{route('penjualan.destroy', $data->id)}}" method="POST">
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
