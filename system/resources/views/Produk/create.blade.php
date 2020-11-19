@extends ('template.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Produk
				<div class="card-body">
					<form action="{{ url('admin/adm_produk') }}" method="post">
						@csrf

					<div class="form-group">
						<label for="" class="control-label"> Nama </label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label for="" class="control-label"> Kategori </label>
						<input type="text" class="form-control" name="kategori">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Harga </label>
								<input type="text" class="form-control" name="harga">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Berat </label>
								<input type="text" class="form-control" name="berat">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Stok </label>
								<input type="text" class="form-control" name="stok">
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="" class="control-label"> Deskripsi </label>
						<textarea name="deskripsi" class="form-control"></textarea>
					</div>
				</div>
				
				<button class="btn btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection