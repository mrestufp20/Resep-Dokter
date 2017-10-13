<h1> Edit </h1>

<form class="" action="/dokter/{{$dokter->id_dokter}}" method="post">
    
    
   <input type="text" name="nama_dokter" value="{{ $dokter->nama_dokter }}" placeholder="nama_dokter"> <br>
    
    <input type="text" name="spesialis" value="{{ $dokter->spesialis }}" placeholder="spesialis"> <br>
    
    <input type="text" name="alamat_dokter" value="{{ $dokter->alamat_dokter }}" placeholder="alamat_dokter"> <br>
    
    <input type="number" name="telepon_dokter" value="{{ $dokter->telepon_dokter }}" placeholder="telepon_dokter"> <br>
    
     <input type="text" name="poliklinik_id" value="{{ $dokter->poliklinik_id }}" placeholder="poliklinik_id"> <br>
    
     <input type="number" name="tarif" value="{{ $dokter->tarif }}" placeholder="tarif"> <br>

     <input type="hidden" name="_method" value="put"> 
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="edit"> <br>


</form>