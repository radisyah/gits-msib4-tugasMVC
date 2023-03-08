<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{$judul}}</title>
    </head>
    <body>
        <center>
            <label><h2>{{$judul}}<h2></label>
            @if(session('pesan'))
              {{session('pesan')}}
            @endif 
            <p>
              <button type="button" onclick="window.location='/buku/tambah'">
                Tambah
              </button>
            </p>
            <table style="width: 80%; border-collapse: 1; border:1px solid #000" border="1">
              <thead>
                  <th>No</th>
                  <th>Kode Buku</th>
                  <th>Nama Buku</th>
                  <th>Stok</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                @foreach ( $dataBuku as $value )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->kode_buku }}</td>
                    <td>{{ $value->nama_buku }}</td>
                    <td>{{ $value->stok }}</td>
                    <td>
                      <button type="button" onclick="window.location='/buku/edit/{{ $value->id_buku }}'">
                        Edit
                      </button>

                      <form action="/buku/hapus/{{ $value->id_buku }}" method="post"
                        style="display: inline;"
                        onsubmit="return hapusData()">
  
                        @csrf
                        @method('DELETE')
  
                        <button type="submit">
                          Hapus
                        </button>
                      
                      </form>
                    </td>
                    
                   
                  </tr>
                @endforeach
              </tbody>
            </table>
        </center>

        <script>
          function hapusData() {  
            pesan = confirm("Yakin Data ini Dihapus?");
            if(pesan)
            return true; else return false;
          }
        </script>
    </body>
</html>

