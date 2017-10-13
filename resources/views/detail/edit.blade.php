<h1> Edit </h1>

<form class="" action="/detail/{{$detail->id_detail}}" method="post">
    
    
   <input type="text" name="resep_id" value="{{ $detail->resep_id }}" placeholder="ID Resep"> <br>
    
    <input type="text" name="obat_id" value="{{ $detail->obat_id }}" placeholder="ID Obat"> <br>
    
    <input type="number" name="harga" value="{{ $detail->harga }}" placeholder="Harga"> <br>
    
    <input type="text" name="dosis" value="{{ $detail->dosis }}" placeholder="Dosis"> <br>
    
     <input type="text" name="sub_total" value="{{ $detail->sub_total }}" placeholder="Sub Total"> <br>

     <input type="hidden" name="_method" value="put"> 
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="edit"> <br>


</form>