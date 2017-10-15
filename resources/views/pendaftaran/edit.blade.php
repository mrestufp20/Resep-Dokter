<h1> Edit Pendaftaran </h1>

<form action="/pendaftaran/{{$pendaftaran->id_pendaftaran}}" method="post">
	
	
	<input type="text" name="tgl_pendaftaran" value="{{ $pendaftaran->tgl_pendaftaran }}" placeholder="tgl daftar"> <br>
	<input type="text" name="dokter_id" value="{{ $pendaftaran->dokter_id }}" placeholder="dokter id"> <br>
	<input type="text" name="pasien_id" value="{{ $pendaftaran->pasien_id }}" placeholder="pasien id"> <br>
	<input type="text" name="poliklinik_id" value="{{ $pendaftaran->poliklinik_id }}" placeholder="poliklinik id"> <br>
	<input type="text" name="biaya" value="{{ $pendaftaran->biaya }}" placeholder="biaya"> <br>
	<input type="text" name="keterangan" value="{{ $pendaftaran->keterangan }}" placeholder="keterangan"> <br>
	
	<input type="hidden" name="_method" value="put"> 
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
	<input type="submit" name="name" value="edit"> <br>


</form>

<a href="/pendaftaran"> cancel</a>