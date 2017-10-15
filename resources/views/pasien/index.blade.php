<h1>List Pasien</h1>

<table border="1">       
	<thead>
		<th>ID Pasien</th>
		<th>Nama Pasien</th>
		<th>Alamat Pasien</th>
		<th>Gender Pasien</th>                      
		<th>Umur Pasienbb</th>
		<th>Telepon Pasien</th>
		<th>Edit</th>
		<th>Delete</th>
		@foreach ($pasien as $data)
	</thead>

	<tbody>
		<tr>
			<td> {{ $data->id_pasien }} </td>
			<td> {{ $data->nama_pasien }} </td>
			<td> {{ $data->alamat_pasien }} </td>
			<td> {{ $data->gender_pasien }} </td>
			<td> {{ $data->umur_pasien }} </td>
			<td> {{ $data->telepon_pasien }} </td>
			<td>
				<a href="/pasien/{{$data->id_pasien}}/edit" class="btn btn-primary btn-xs">
					<span class="glyphicon glyphicon-pencil">Edit</span>
				</a>
			</td>
			<td>
				<form class="" action="/pasien/{{$data->id_pasien}}" method="post">
					<input type="hidden" name="_method" value="delete">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>       
</table>


<h1>Create Pasien</h1>
@if (count($errors) > 0)
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif

<form class="" action="/pasien" method="post">
	<input type="text" name="nama_pasien" value="" placeholder="nama"> <br>
	<input type="text" name="alamat_pasien" value="" placeholder="Alamat"> <br>
	<input type="text" name="gender_pasien" value="" placeholder="gender"> <br>
	<input type="number" name="umur_pasien" value="" placeholder="umut"> <br>
	<input type="number" name="telepon_pasien" value="" placeholder="tlp"> <br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>

	<input type="submit" name="name" value="post"> <br>


</form>