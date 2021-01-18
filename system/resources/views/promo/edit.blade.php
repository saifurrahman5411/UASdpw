@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						
						<form action="{{url('admin/promo', $promo->id)}}" method="post">
							@csrf
							@method('put')
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$promo->nama}}">
					</div>
					<div class="row no-gutters">
					<div class="col-md-6">
						<div class="form-group">
						<label class="control-label" for="">Berat</label>
						<input type="text" name="berat" class="form-control" value="{{$promo->berat}}">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Harga</label>
							<input type="text" name="harga" class="form-control" value="{{$promo->harga}}">
						</div>
					</div>
				</div>			
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection