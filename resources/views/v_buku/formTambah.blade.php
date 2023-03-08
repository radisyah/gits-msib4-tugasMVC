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
            <p>
              <button type="button" onclick="window.location='/buku/index'">
                Kembali
              </button>
            </p>

            @if(session('pesan'))
              {{session('pesan')}}
            @endif
            <form method="POST" action="{{ url('/buku/simpan') }}" >
              @csrf
              <table style="widows: 70%;">
                <tr>
                  <td>Kode Buku: </td>
                  <td>
                    <input required type="text" name="kode_buku" id="kode_buku">
                  </td>
                </tr>
                <tr>
                  <td>Nama Buku: </td>
                  <td>
                    <input required type="text" name="nama_buku" id="nama_buku">
                  </td>
                </tr>
                <tr>
                <td>Stok : </td>
                  <td>
                    <input required type="text" name="stok" id="stok">
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <button type="submit">
                      Simpan
                    </button>
                  </td>
                </tr>
              </table>
            </form>
            
        </center>
    </body>
</html>
