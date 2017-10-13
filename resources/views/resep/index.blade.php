<table class="table table-hover z-depth-3 " border="1">       
                <thead>
                  <th>ID Resep</th>
                  <th>Tanggal Resep</th>
                  <th>ID Dokter</th>                      
                  <th>ID Pasien</th>
                  <th>ID Poliklinik</th>
                  <th>Total Harga</th>
                  <th>Bayar Kembali</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  @foreach ($resep as $recipe)
                </thead>

                <tbody>
                  <tr>
                    <td> {{ $recipe->id_resep }} </td>
                    <td> {{ $recipe->tgl_resep }} </td>
                    <td> {{ $recipe->dokter_id }} </td>
                    <td> {{ $recipe->pasien_id }} </td>
                    <td> {{ $recipe->poliklinik_id }} </td>
                    <td> {{ $recipe->total_harga }} </td>
                    <td> {{ $recipe->bayar_kembali }} </td>
                    <td>
                      <a href="/resep/{{$recipe->id_resep}}/edit" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-pencil">Edit</span>
                      </a>
                    </td>
                    <td>
                      <form class="" action="/resep/{{$recipe->id_resep}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token() }}">
                        <input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>       
              </table>