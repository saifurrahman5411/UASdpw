@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data Promo
						<a href="{{url('admin/promo/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>berat</th>
							</thead>
							<tbody>
								@foreach($list_promo as $promo)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('admin/promo', $promo->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/promo', $promo->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.util.delete', ['url' => url('admin/promo', $promo->id)])
										</div>
									</td>
									<td>{{$promo->nama}}</td>
									<td>{{$promo->harga}}</td>
									<td>{{$promo->berat}}</td>
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