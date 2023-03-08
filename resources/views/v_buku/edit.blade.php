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

            <form method="POST" action="{{ url('/buku/simpan_edit/') }}" >
              @csrf
              @method('PUT')
              <table style="widows: 70%;">
                <tr>
                  <td>
                    <input hidden type="text" name="id_buku" value="{{ $id_buku }}" id="id_buku">
                  </td>
                </tr>
                <tr>
                  <td>Kode Buku: </td>
                  <td>
                    <input readonly type="text" name="kode_buku" value="{{ $kode_buku }}" id="kode_buku">
                  </td>
                </tr>
                <tr>
                  <td>Nama Buku: </td>
                  <td>
                    <input required type="text" name="nama_buku" value="{{ $nama_buku }}" id="nama_buku">
                  </td>
                </tr>
                <tr>
                <td>Stok : </td>
                  <td>
                    <input required type="text" name="stok" value="{{ $stok }}" id="stok">
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <button type="submit">
                      Update
                    </button>
                  </td>
                </tr>
              </table>
            </form>
            
        </center>
    </body>
</html>
