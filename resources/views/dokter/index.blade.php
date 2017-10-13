<table class="table table-hover z-depth-3 " border="1">       
                <thead>
                  <th>ID Dokter</th>
                  <th>Nama Dokter</th>
                  <th>Spesialis</th>
                  <th>Alamat</th>                      
                  <th>No Telepon</th>
                  <th>ID Poliklinik</th>
                  <th>Tarif</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  @foreach ($dokter as $doctor)
                </thead>

                <tbody>
                  <tr>
                    <td> {{ $doctor->id_dokter }} </td>
                    <td> {{ $doctor->nama_dokter }} </td>
                    <td> {{ $doctor->spesialis }} </td>
                    <td> {{ $doctor->alamat_dokter }} </td>
                    <td> {{ $doctor->telepon_dokter }} </td>
                    <td> {{ $doctor->poliklinik_id }} </td>
                    <td> {{ $doctor->tarif }} </td>
                    <td>
                      <a href="/dokter/{{$doctor->id_dokter}}/edit" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-pencil">Edit</span>
                      </a>
                    </td>
                    <td>
                      <form class="" action="/dokter/{{$doctor->id_dokter}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token() }}">
                        <input class="btn btn-danger btn-xs" type="submit" name="name" value="delete" >
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>       
              </table>