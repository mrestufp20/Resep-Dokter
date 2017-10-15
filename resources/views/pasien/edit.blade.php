<h1> Edit Pasien </h1>

<form class="" action="/pasien/{{$pasien->id_pasien}}" method="post">
	
	
	<input type="text" name="nama_pasien" value="{{ $pasien->nama_pasien }}" placeholder="nama"> <br>
	<input type="text" name="alamat_pasien" value="{{ $pasien->alamat_pasien }}" placeholder="alamat"> <br>
	<input type="text" name="gender_pasien" value="{{ $pasien->gender_pasien }}" placeholder="gender"> <br>
	<input type="number" name="umur_pasien" value="{{ $pasien->umur_pasien }}" placeholder="umur"> <br>
	<input type="number" name="telepon_pasien" value="{{ $pasien->telepon_pasien }}" placeholder="tlp"> <br>

	<input type="hidden" name="_method" value="put"> 
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
	<input type="submit" name="name" value="edit"> <br>


</form>

<a href="/pasien"> cancel</a>