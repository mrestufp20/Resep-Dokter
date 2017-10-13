<h1> Edit </h1>

<form class="" action="/resep/{{$resep->id_resep}}" method="post">
    
    
  <input type="date" name="tgl_resep" value="{{ $resep->tgl_resep }}" placeholder="tgl_resep"> <br>
    
    <input type="text" name="dokter_id" value="{{ $resep->dokter_id }}" placeholder="dokter_id"> <br>
    
    <input type="text" name="pasien_id" value="{{ $resep->pasien_id }}" placeholder="pasien_id"> <br>
    
    <input type="text" name="poliklinik_id" value="{{ $resep->poliklinik_id }}" placeholder="poliklinik_id"> <br>
    
     <input type="number" name="total_harga" value="{{ $resep->total_harga }}" placeholder="total_harga"> <br>
    
    <input type="number" name="bayar_kembali" value="{{ $resep->bayar_kembali }}" placeholder="bayar_kembali"> <br>

     <input type="hidden" name="_method" value="put"> 
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="edit"> <br>


</form>