@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data user
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<h3>{{$user->nama}}</h3>
							<hr>
							<p>
								{{"@". $user->username}} |
								Email : {{$user->email}}
							</p>
							<p>
								
							</p>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection