<?php

namespace TubesRAI\Http\Controllers;

use Illuminate\Http\Request;

use TubesRAI\Http\Controllers\Controller;
use TubesRAI\Http\Requests\AdminRequest;
use TubesRAI\Http\Requests\SuperAdminRequest;

use TubesRAI\Kegiatan;
use TubesRAI\Prestasi;
use TubesRAI\Artikel;
use TubesRAI\User;

class AdminController extends Controller
{
    // Supaya Harus login
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function kegiatan(AdminRequest $request)
    {
        $kegiatan = Kegiatan::all();
        return view('kader.daftar_kegiatan', compact('kegiatan'));
    }

    public function prestasi(AdminRequest $request)
    {
        $prestasi = Prestasi::all();
        return view('kader.daftar_prestasi', compact('prestasi'));
    }

    public function artikel(AdminRequest $request)
    {
        $artikel = Artikel::all();
        return view('kader.daftar_artikel', compact('artikel'));
    }
    
    public function kader(SuperAdminRequest $request)
    {
        $kader = User::all();
        return view('admin.daftar_kader', compact('kader'));
    }

    public function update_kader(SuperAdminRequest $request, $id)
    {
        $kader = User::findOrFail($id);
        $data = $request->all();

        if($kader->hak_akses == 2){
            $kader->hak_akses = 1;
        } else {
            $kader->hak_akses = 2;
        }
        $kader->save();

        return redirect('admin/kader');
    }

    public function hapus_kader(SuperAdminRequest $request, $id)
    {
        $kader = User::findOrFail($id);
        
        return view('admin.hapus_kader', compact('kader', 'id'));
    }

    public function destroy_kader(SuperAdminRequest $request, $id)
    {
        $kader = User::findOrFail($id);
        $kader->delete();

        return redirect('admin/kader'); 
    }
}
