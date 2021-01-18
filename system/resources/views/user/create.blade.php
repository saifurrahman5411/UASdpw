@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data User
				</div>
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $errors)
									<li>{{$errors}}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form action="{{url('admin/user')}}" method="post">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama </label>
						<input type="text" name="nama" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Username </label>
						<input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Email </label>
						<input type="text" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Password </label>
						<input type="password" name="password" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">no Hp </label>
						<input type="text" name="no_handphone" class="form-control">
					</div>

					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection