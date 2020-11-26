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
						Rp. {{number_format($produk->harga)}}  |	
					
				
						Stok : {{($produk->stok)}}  |
					
				
						Berat : {{($produk->berat)}}  |

						Seller : {{($produk->seller->nama)}}  |

						Kategori : {{($produk->kategori->nama)}}  |
						<hr>
				
						{!! nl2br ($produk->deskripsi) !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection