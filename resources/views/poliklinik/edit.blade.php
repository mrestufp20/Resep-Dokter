<h1> Edit Poliklinik </h1>

<form class="" action="/poliklinik/{{$poliklinik->id_poliklinik}}" method="post">
	
	
	<input type="text" name="nama_poliklinik" value="{{ $poliklinik->nama_poliklinik }}" placeholder="nama"> <br>
	
	<input type="hidden" name="_method" value="put"> 
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
	<input type="submit" name="name" value="edit"> <br>


</form>

<a href="/poliklinik"> cancel</a>