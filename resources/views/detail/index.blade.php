<table class="table table-hover z-depth-3 " border="1">       
                <thead>
                  <th>ID Detail</th>
                  <th>ID Resep</th>
                  <th>ID Obat</th>
                  <th>Harga</th>                      
                  <th>Dosis</th>
                  <th>Sub Total</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  @foreach ($detail as $assign)
                </thead>

                <tbody>
                  <tr>
                    <td> {{ $assign->id_detail }} </td>
                    <td> {{ $assign->resep_id }} </td>
                    <td> {{ $assign->obat_id }} </td>
                    <td> {{ $assign->harga }} </td>
                    <td> {{ $assign->dosis }} </td>
                    <td> {{ $assign->sub_total }} </td>
                    <td>
                      <a href="/detail/{{$assign->id_detail}}/edit" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-pencil">Edit</span>
                      </a>
                    </td>
                    <td>
                      <form class="" action="/detail/{{$assign->id_detail}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token() }}">
                        <input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>       
              </table>