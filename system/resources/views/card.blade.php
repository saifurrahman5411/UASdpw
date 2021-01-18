<!-- @extends('template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Alamat Pengirim ngab
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<label class="control-label">ganti dulu Provinsi nya</label>
							<select name="" class="form-control" onchange="gantiProvinsi(this.value)">
								<option value="">Pilih Provinsi</option>
								@foreach($list_provinsi as $provinsi)
									<option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Kabupaten</label>
							<select name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
								<option value="">Pilih Provinsi Terlebih Dahulu</option>
									<option value=""></option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Kecamatan</label>
							<select name="" class="form-control select2" id="kecamatan" onchange="gantiKecamatan(this.value)">
								<option value="">Pilih Kabupaten Terlebih Dahulu</option>
									<option value=""></option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Desa</label>
							<select name="" class="form-control select2" id="desa">
								<option value="">Pilih Kecamatan Terlebih Dahulu</option>
									<option value=""></option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('script')
<script>
	function gantiProvinsi(id){
		// alert(id); /*untuk melihat id Provinsi*/
		$.get("api/provinsi/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.nama}</option>`;
			}
			$("#kabupaten").html(option)
		});
	}
	function gantiKabupaten(id){
		// alert(id); untuk melihat id Provinsi
		$.get("api/kabupaten/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.nama}</option>`;
			}
			$("#kecamatan").html(option)
		});
	}
	function gantiKecamatan(id){
		// alert(id); untuk melihat id Provinsi
		$.get("api/kecamatan/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.nama}</option>`;
			}
			$("#desa").html(option)
		});
	}
</script>
@endpush -->