<?php

namespace TubesRAI\Http\Controllers;

use Illuminate\Http\Request;

use TubesRAI\Http\Requests;
use TubesRAI\Http\Controllers\Controller;

use TubesRAI\Biodata;
use TubesRAI\Kegiatan;
use TubesRAI\Prestasi;
use TubesRAI\Artikel;

class KaderController extends Controller
{
    // Supaya Harus login
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kader.index');
    }

    // fungsi biodata 
    public function biodata(Request $request)
    {
        $biodata = $request->user()->biodata;

        return view('kader.biodata', compact('biodata'));
    }

    public function update_biodata(Request $request)
    {
        if($request->user()->biodata){
            $bio = $request->user()->biodata;
        } else {
            $bio = new Biodata;
        }

        $data = $request->all();
        $bio['kader_id'] = $request->user()->id;
        $bio['kelas'] = $data['kelas'];
        $bio['divisi'] = $data['divisi'];
        $bio['alamat'] = $data['alamat'];
        $bio['tempat_lahir'] = $data['tempat_lahir'];
        $bio['tanggal_lahir'] = $data['tanggal_lahir'];
        $bio->save();
        
        return redirect('kader');
    }


    // fungsi kegiatan kader
    public function kegiatan(Request $request)
    {
        $kegiatan = $request->user()->kegiatan->all();

        return view('kader.daftar_kegiatan', compact('kegiatan'));
    }

    public function tambah_kegiatan()
    {
        return view('kader.tambah_kegiatan');
    }

    public function edit_kegiatan(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('kader.edit_kegiatan', compact('kegiatan','id'));
    }

    public function store_kegiatan(Request $request)
    {
        $data = $request->all();

        $kegiatan = new Kegiatan;
        $kegiatan['kader_id'] = $request->user()->id;
        $kegiatan['tanggal'] = $data['tanggal'];
        $kegiatan['jumlah_mentoring'] = $data['jumlah_mentoring'];
        $kegiatan['jumlah_membina'] = $data['jumlah_membina'];
        $kegiatan->save();

        return redirect('kader/kegiatan');
    }

    public function update_kegiatan(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $data = $request->all();

        $kegiatan['jumlah_mentoring'] = $data['jumlah_mentoring'];
        $kegiatan['jumlah_membina'] = $data['jumlah_membina'];
        $kegiatan->save();

        return redirect('kader/kegiatan');
    }

    public function hapus_kegiatan(Request $request, $id)
    {
       $kegiatan = Kegiatan::findOrFail($id);
       return view('kader.hapus_kegiatan', compact('kegiatan', 'id'));
    }

    public function destroy_kegiatan(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        return redirect('kader/kegiatan');
    }


    // fungsi Prestasi
    public function prestasi(Request $request)
    {
        $prestasi = $request->user()->prestasi->all();
        return view('kader.daftar_prestasi', compact('prestasi'));
    }

    public function tambah_prestasi()
    {
        return view('kader.tambah_prestasi');
    }

    public function store_prestasi(Request $request)
    {
        Prestasi::create($request->all());
        return redirect('kader/prestasi');
    }

    public function edit_prestasi(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('kader.edit_prestasi', compact('prestasi', 'id', 'hapus'));
    }

    public function update_prestasi(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->update($request->all());
        return redirect('kader/prestasi');
    }

    public function hapus_prestasi(Request $request, $id)
    {
       $prestasi = Prestasi::findOrFail($id);
       $hapus = TRUE;
       return view('kader.hapus_prestasi', compact('prestasi', 'id', 'hapus'));
    }

    public function destroy_prestasi(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();

        return redirect('kader/prestasi');
    }


    // fungsi artikel
    public function artikel(Request $request)
    {
        $artikel = $request->user()->artikel->all();
        return view('kader.daftar_artikel', compact('artikel'));
    }

    public function tambah_artikel()
    {
        return view('kader.tambah_artikel');
    }

    public function store_artikel(Request $request)
    {
        Artikel::create($request->all());
        return redirect('kader/artikel');
    }

    public function edit_artikel(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('kader.edit_artikel', compact('artikel', 'id', 'hapus'));
    }

    public function update_artikel(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->update($request->all());
        return redirect('kader/artikel');
    }

    public function hapus_artikel(Request $request, $id)
    {
       $artikel = Artikel::findOrFail($id);
       $hapus = TRUE;
       return view('kader.hapus_artikel', compact('artikel', 'id', 'hapus'));
    }

    public function destroy_artikel(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect('kader/artikel');
    }

    public function lihat_artikel(Request $request, $id)
    {
       $artikel = Artikel::findOrFail($id);
       return view('kader.lihat_artikel', compact('artikel'));
    }
}
