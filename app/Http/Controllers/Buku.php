<?php

namespace App\Http\Controllers;

use App\Models\ModelBuku;
use Illuminate\Http\Request;

class Buku extends Controller
{
    public function index()
    {
        $data=[
            'judul' => 'Data Buku Perpustakaan',
            'dataBuku' => ModelBuku::all()
        ];
        return View('v_buku.data', $data);
    }

    public function tambah()
    {   $data=[
            'judul' => 'Tambah Data Buku Perpustakaan',
        ];
        return View('v_buku.formTambah', $data);
    }

    public function simpan(Request $r)
    {
        $kode_buku = $r->kode_buku;
        $nama_buku = $r->nama_buku;
        $stok = $r->stok;

        try {
            $buku = new ModelBuku;
            $buku->kode_buku = $kode_buku;
            $buku->nama_buku = $nama_buku;
            $buku->stok = $stok;
            $buku->save();
    
            $r->session()->flash('pesan', 'Data Berhasil Disimpan');
            return redirect('buku/tambah/');
        } catch (Throwable $e) {
            echo $e;
        }
      
    }

    public function edit($id_buku)
    {
        $buku = ModelBuku::find($id_buku);
        $data=[
            'judul' => 'Edit Data Buku Perpustakaan',
            'id_buku' => $buku->id_buku,
            'kode_buku' => $buku->kode_buku,
            'nama_buku' => $buku->nama_buku,
            'stok' => $buku->stok,
        ];
        return View('v_buku.edit', $data);
    }

    public function simpan_edit(Request $r)
    {
        $id_buku = $r->id_buku;
        $kode_buku = $r->kode_buku;
        $nama_buku = $r->nama_buku;
        $stok = $r->stok;

        try {
            $buku = ModelBuku::find($id_buku);
            $buku->id_buku = $id_buku;
            $buku->kode_buku = $kode_buku;
            $buku->nama_buku = $nama_buku;
            $buku->stok = $stok;
            $buku->save();
    
            $r->session()->flash('pesan', 'Data Berhasil Diupdate');
            return redirect('buku/index/');
        } catch (Throwable $e) {
            echo $e;
        }
      
    }

    public function hapus($id_buku)
    {
       ModelBuku::find($id_buku)->delete();
       return redirect()->back();
    }
}
