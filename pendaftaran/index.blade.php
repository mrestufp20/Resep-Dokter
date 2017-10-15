<h1>List Pendaftar</h1>

<table border="1">       
	<thead>
		<th>ID Pendaftaran</th>
		<th>Tanggal Pendaftaran</th>
		<th>ID Dokter</th>
		<th>ID Pasien</th>
		<th>ID Poliklinik</th>
		<th>Biaya</th>
		<th>Keterangan</th>
		<th>Edit</th>
		<th>Delete</th>

		@foreach ($pendaftaran as $data)
	</thead>

	<tbody>
		<tr>
			<td> {{ $data->id_pendaftaran }} </td>
			<td> {{ $data->tgl_pendaftaran }} </td>
			<td> {{ $data->dokter_id }} </td>
			<td> {{ $data->pasien_id }} </td>
			<td> {{ $data->poliklinik_id }} </td>
			<td> {{ $data->biaya }} </td>
			<td> {{ $data->keterangan }} </td>
			<td>
				<a href="/pendaftaran/{{$data->id_pendaftaran}}/edit" class="btn btn-primary btn-xs">
					<span class="glyphicon glyphicon-pencil">Edit</span>
				</a>
			</td>
			<td>
				<form class="" action="/pendaftaran/{{$data->id_pendaftaran}}" method="post">
					<input type="hidden" name="_method" value="delete">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>       
</table>


<h1>Create Pendaftaran</h1>
@if (count($errors) > 0)
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif

<form class="" action="/pendaftaran" method="post">
	<input type="date" name="tgl_pendaftaran" value="" placeholder="tanggal daftar"> <br>
	<input type="text" name="dokter_id" value="" placeholder="id dokter"> <br>
	<input type="text" name="pasien_id" value="" placeholder="id pasien"> <br>
	<input type="text" name="poliklinik_id" value="" placeholder="id poliklinik"> <br>
	<input type="number" name="biaya" value="" placeholder="biaya"> <br>
	<input type="text" name="keterangan" value="" placeholder="keterangan"> <br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>

	<input type="submit" name="name" value="post"> <br>


</form>