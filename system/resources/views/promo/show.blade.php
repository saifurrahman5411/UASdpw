@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Promo
					</div>
					<div class="card-body">
						<h4>{{$promo->nama}}</h4><hr>
						<p>Rp. {{number_format($promo->harga)}} |
							Berat : {{$promo->berat}} gr | 
							
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection