@extends('admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
			<div class="panel-heading">Laporan Data Penjualan
			<div class="panel-title- pull-right"></div></div>
			<div class="panel-body">
			<form action="{{url('/jual/penjualan')}}" method="post">
			{{csrf_field()}}
			<label>Dari Tanggal</label>
			<input type="date" name="a" required="">
			<label>Sampai Tanggal</label>
			<input type="date" name="b" required="">
			<input type="submit" name="submit" class="btn btn-info" value="Submit"></form>
				<table class="table">
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama Penitip</th>
						<th>Nama Barang</th>
						<th>Total</th>
					</tr>
				</table>
			</div>
								
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
