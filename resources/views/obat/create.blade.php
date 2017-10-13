@if (count($errors) > 0)
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif




<h1>Create List</h1>

<form class="" action="/obat" method="post">
    
    
    <input type="text" name="nama_obat" value="" placeholder="nama_obat"> <br>
    
     <div class="form-group">
                  <label>Jenis Obat</label>
                  <select name="jenis_obat" class="form-control">
  	                <option value="tablet">Tablet</option>
  	                <option value="pil">Pil</option>
                    <option value="cair">Cair</option>
                  </select>
                </div>
    
     <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori" class="form-control">
  	                <option value="bebas">Bebas</option>
  	                <option value="terbatas">Terbatas</option>
                  </select>
                </div>

    <input type="number" name="harga_obat" value="" placeholder="harga_obat"> <br>
    
     <input type="number" name="jumlah_obat" value="" placeholder="jumlah_obat"> <br>
    
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="post"> <br>


</form>