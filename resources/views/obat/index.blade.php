<table class="table table-hover z-depth-3 " border="1">       
                <thead>
                  <th>ID Obat</th>
                  <th>Nama Obat</th>
                  <th>Jenis Obat</th>
                  <th>Kategori</th>                      
                  <th>Harga Obat</th>
                  <th>Jumlah Obat</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  @foreach ($obat as $cure)
                </thead>

                <tbody>
                  <tr>
                    <td> {{ $cure->id_obat }} </td>
                    <td> {{ $cure->nama_obat }} </td>
                    <td> {{ $cure->jenis_obat }} </td>
                    <td> {{ $cure->kategori }} </td>
                    <td> {{ $cure->harga_obat }} </td>
                    <td> {{ $cure->jumlah_obat }} </td>
                    <td>
                      <a href="/obat/{{$cure->id_obat}}/edit" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-pencil">Edit</span>
                      </a>
                    </td>
                    <td>
                      <form class="" action="/obat/{{$cure->id_obat}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token() }}">
                        <input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>       
              </table>