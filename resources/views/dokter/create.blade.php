@if (count($errors) > 0)
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif




<h1>Create List</h1>

<form class="" action="/dokter" method="post">
    
    
    <input type="text" name="nama_dokter" value="" placeholder="nama_dokter"> <br>
    
    <input type="text" name="spesialis" value="" placeholder="spesialis"> <br>
    
    <input type="text" name="alamat_dokter" value="" placeholder="alamat_dokter"> <br>
    
    <input type="number" name="telepon_dokter" value="" placeholder="telepon_dokter"> <br>
    
     <input type="text" name="poliklinik_id" value="" placeholder="poliklinik_id"> <br>
    
     <input type="number" name="tarif" value="" placeholder="tarif"> <br>
    
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="post"> <br>


</form>