@if (count($errors) > 0)
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif




<h1>Create List</h1>

<form class="" action="/resep" method="post">
    
    
    <input type="date" name="tgl_resep" value="" placeholder="tgl_resep"> <br>
    
    <input type="text" name="dokter_id" value="" placeholder="dokter_id"> <br>
    
    <input type="text" name="pasien_id" value="" placeholder="pasien_id"> <br>
    
    <input type="text" name="poliklinik_id" value="" placeholder="poliklinik_id"> <br>
    
     <input type="number" name="total_harga" value="" placeholder="total_harga"> <br>
    
    <input type="number" name="bayar_kembali" value="" placeholder="bayar_kembali"> <br>
    
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="post"> <br>


</form>