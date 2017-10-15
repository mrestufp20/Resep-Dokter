<h1> Edit pembayaran </h1>

<form action="/pembayaran/{{$pembayaran->id_pembayaran}}" method="post">
	
	
	<input type="number" name="pasien_id" value="{{ $pembayaran->pasien_id }}" placeholder="pasien id"> <br>
	<input type="date" name="tgl_bayar" value="{{ $pembayaran->tgl_bayar }}" placeholder="tgl bayar"> <br>
	<input type="number" name="jumlah_bayar" value="{{ $pembayaran->jumlah_bayar }}" placeholder="jumlah bayar"> <br>
	
	<input type="hidden" name="_method" value="put"> 
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
	<input type="submit" name="name" value="edit"> <br>


</form>

<a href="/pembayaran"> cancel</a>