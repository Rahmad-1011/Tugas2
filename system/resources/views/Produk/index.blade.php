@extends ('template.base')

@section ('content')
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<h2>
					Data Produk
					</h2>
					<hr>
					<a href="{{ url('/adm_produk/create') }}">
					<button class="btn btn-primary"> Tambah Data
					</button></a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Nama </th>
							<th> Harga </th>
							<th> Stok </th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn btn-group">

										<a href="{{ url('adm_produk', $produk->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

										<a href="{{ url('adm_produk', $produk->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include ('template.utils.delete', ['url' => url('adm_produk', $produk->id)])
									</div>	

								</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection