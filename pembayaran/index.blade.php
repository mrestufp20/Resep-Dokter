<h1>List Pembayaran</h1>

<table border="1">       
	<thead>
		<th>ID Pembayaran</th>
		<th>ID Pasien</th>
		<th>Tanggal Bayar</th>
		<th>Jumlah Bayar</th>
		<th>Edit</th>
		<th>Delete</th>

		@foreach ($pembayaran as $data)
	</thead>

	<tbody>
		<tr>
			<td> {{ $data->id_pembayaran }} </td>
			<td> {{ $data->pasien_id }} </td>
			<td> {{ $data->tgl_bayar }} </td>
			<td> {{ $data->jumlah_bayar }} </td>
			<td>
				<a href="/pembayaran/{{$data->id_pembayaran}}/edit" class="btn btn-primary btn-xs">
					<span class="glyphicon glyphicon-pencil">Edit</span>
				</a>
			</td>
			<td>
				<form class="" action="/pembayaran/{{$data->id_pembayaran}}" method="post">
					<input type="hidden" name="_method" value="delete">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>       
</table>


<h1>Create pembayaran</h1>
@if (count($errors) > 0)
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif

<form class="" action="/pembayaran" method="post">
	<input type="text" name="pasien_id" value="" placeholder="pasien id"> <br>
	<input type="date" name="tgl_bayar" value="" placeholder="tanggal bayar"> <br>
	<input type="text" name="jumlah_bayar" value="" placeholder="jumlah bayar"> <br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
	<input type="submit" name="name" value="post"> <br>


</form>