<h1>List Poliklinik</h1>

<table border="1">       
	<thead>
		<th>ID Poliklinik</th>
		<th>Nama Poliklinik</th>
		<th>Edit</th>
		<th>Delete</th>
		@foreach ($poliklinik as $data)
	</thead>

	<tbody>
		<tr>
			<td> {{ $data->id_poliklinik }} </td>
			<td> {{ $data->nama_poliklinik }} </td>
			<td>
				<a href="/poliklinik/{{$data->id_poliklinik}}/edit" class="btn btn-primary btn-xs">
					<span class="glyphicon glyphicon-pencil">Edit</span>
				</a>
			</td>
			<td>
				<form class="" action="/poliklinik/{{$data->id_poliklinik}}" method="post">
					<input type="hidden" name="_method" value="delete">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>       
</table>


<h1>Create Poliklinik</h1>
@if (count($errors) > 0)
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif

<form class="" action="/poliklinik" method="post">
	<input type="text" name="nama_poliklinik" value="" placeholder="nama"> <br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>

	<input type="submit" name="name" value="post"> <br>


</form>