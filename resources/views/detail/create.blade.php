@if (count($errors) > 0)
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif




<h1>Create List</h1>

<form class="" action="/detail" method="post">
    
    
    <input type="text" name="resep_id" value="" placeholder="ID Resep"> <br>
    
    <input type="text" name="obat_id" value="" placeholder="ID Obat"> <br>
    
    <input type="number" name="harga" value="" placeholder="Harga"> <br>
    
    <input type="text" name="dosis" value="" placeholder="Dosis"> <br>
    
     <input type="text" name="sub_total" value="" placeholder="Sub Total"> <br>
    
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="post"> <br>


</form>