@extends ('template.base')

@section ('content')
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('admin/adm_produk/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Kategori </label>
							<input type="text" class="form-control" name="kategori" value="{{$kategori ?? ""}}">
						</div>
						<button class="btn btn-primary"><i class="fa fa-search"></i>Filter</button>
					</form>
				</div>
			</div>
			<hr>
			<div class="card">
				<div class="card-header">
					<h3>
					Data Produk
					</h3>
					<hr>
					<a href="{{ url('admin/adm_produk/create') }}">
					<button class="btn btn-primary"> Tambah Data
					</button></a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Kategori </th>
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

										<a href="{{ url('admin/adm_produk', $produk->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

										<a href="{{ url('admin/adm_produk', $produk->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include ('template.utils.delete', ['url' => url('admin/adm_produk', $produk->id)])
									</div>	

								</td>
								<td>{{$produk->kategori}}</td>
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