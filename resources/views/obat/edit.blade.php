<h1> Edit </h1>

<form class="" action="/obat/{{$obat->id_obat}}" method="post">
    
    
   <input type="text" name="nama_obat" value="{{ $obat->nama_obat }}" placeholder="nama_obat"> <br>
    
     <div class="form-group {{ $errors->has('jenis_obat') ? ' has-error' : '' }}">
						<label>Jenis Obat</label>
						<select name="jenis_obat" class="form-control">    
		                    <option value="tablet" 
		                    	<?php 
									if($obat->jenis_obat == "tablet"){
										echo "checked";
									}
								?>
								> Tablet
		                    </option>

							<option value="pil"
								<?php 
									if($obat->jenis_obat == "pil"){
										echo "checked";
									}
								?>
						 	> Pil
						 	</option>

						 	<option value="cair"
								<?php 
									if($obat->jenis_obat == "cair"){
										echo "checked";
									}
								?>
							> Cair
							</option>
						</select>
	                </div>
    
                <div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
						<label>Kategori</label>
						<select name="kategori" class="form-control">    
		                    <option value="bebas" 
		                    	<?php 
									if($obat->kategori == "bebas"){
										echo "checked";
									}
								?>
								> Bebas
		                    </option>

							<option value="terbatas"
								<?php 
									if($obat->kategori == "terbatas"){
										echo "checked";
									}
								?>
						 	> Terbatas
						 	</option>

						</select>
	                </div>

    <input type="number" name="harga_obat" value="{{ $obat->harga_obat }}" placeholder="harga_obat"> <br>
    
     <input type="number" name="jumlah_obat" value="{{ $obat->jumlah_obat }}" placeholder="jumlah_obat"> <br>

     <input type="hidden" name="_method" value="put"> 
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="edit"> <br>


</form>