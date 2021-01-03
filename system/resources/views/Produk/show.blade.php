@extends ('template.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Produk
				<div class="card-body">
					<h2>{{$produk -> nama}}</h2>
					<hr>
					<p>
						<h3><b>{{($produk->harga)}}</b></h3> <br>
					
				
						Stok : {{($produk->stok)}}  | <br>
					
				
						Berat : {{($produk->berat)}} Kg | <br>

						Seller : {{($produk->seller->nama)}}  |

						Kategori : {{($produk->kategori->nama)}}  | <br>

						Tanggal Rilis : {{$produk->created_at->format("d M Y")}}
						<hr>
				
						{!! nl2br ($produk->deskripsi) !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection