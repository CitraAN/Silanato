<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\kunjungan;
use Illuminate\Http\Request;
use App\Models\panduan;
use App\Models\tentang;
use App\Models\dasaruu;
use App\Models\informasilainya;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }


    public function riwayat()
    {
        $kunjungan = kunjungan::whereNotNull('status')->get();
        return view('admin.riwayat_kunjungan', compact('kunjungan'));
    }

    public function kunjungan()
    {
        $kunjungan = kunjungan::whereNull('status')->get();
        return view('admin.request_kunjungan', compact('kunjungan'));
    }

    public function showriwayat($id)
    {
        $where = array('id' => $id);
        $kunjungan = kunjungan::findOrFail($where);
        return view('admin.konfimasi', compact('kunjungan'));
    }

    public function updateriwayat(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);
        $where = array('id' => $id);
        $kunjungan = kunjungan::where($where)->first();
        $kunjungan->status = $request->status;
        $kunjungan->update();
        // dd($kunjungan);
        if ($kunjungan) {
            return redirect()->route('requestkunjungan')->with('status', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('requestkunjungan')->with('status', 'Data Gagal Diupdate');
        }
    }

    public function updateketerangan(Request $request, $id)
    {
        $this->validate($request, [
            'keterangan' => 'required',
        ]);
        $where = array('id' => $id);
        $kunjungan = kunjungan::where($where)->first();
        $kunjungan->keterangan = $request->keterangan;
        $kunjungan->update();
        // dd($kunjungan);
        if ($kunjungan) {
            return redirect()->route('requestkunjungan')->with('status', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('requestkunjungan')->with('status', 'Data Gagal Diupdate');
        }
    }

    public function showketerangan($id)
    {
        $where = array('id' => $id);
        $kunjungan = kunjungan::findOrFail($where);
        return view('admin.edit_req', compact('kunjungan'));
    }

    public function show_riwayat($id)
    {
        $where = array('id' => $id);
        $kunjungan = kunjungan::findOrFail($where);
        return view('admin.show_riwayat', compact('kunjungan'));
    }


    public function panduan()
    {
        $panduan = panduan::all();
        return view('admin.panduan', compact('panduan'));
    }

    public function showpanduan($id)
    {
        $where = array('id' => $id);
        $panduan = panduan::findOrFail($where);
        return view('admin.edit_panduan', compact('panduan'));
    }

    public function updatepanduan(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $where = array('id' => $id);
        $panduan = panduan::where($where)->first();
        $panduan->judul = $request->judul;
        $panduan->deskripsi = $request->deskripsi;
        // dd($panduan);
        $panduan->update();
        // dd($kunjungan);
        if ($panduan) {
            return redirect()->route('panduan')->with('status', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('panduan')->with('status', 'Data Gagal Diupdate');
        }
    }

    public function createpanduan()
    {
        return view('admin.createpanduan');
    }

    public function storepanduan(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $panduan = panduan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($panduan) {
            return redirect()->route('panduan')->with('status', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('panduan')->with('status', 'Data Gagal Ditambahkan');
        }
    }

    public function deletepanduan($id)
    {
        $where = array('id' => $id);
        $panduan = panduan::where($where)->first();
        $panduan->delete();
        if ($panduan) {
            return redirect()->route('panduan')->with('status', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('panduan')->with('status', 'Data Gagal Dihapus');
        }
    }

    public function tentang()
    {
        $tentang = tentang::all();
        return view('admin.tentang', compact('tentang'));
    }

    public function showtentang($id)
    {
        $where = array('id' => $id);
        $tentang = tentang::findOrFail($where);
        return view('admin.edit_tentang', compact('tentang'));
    }

    public function updatetentang(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
        ]);
        $where = array('id' => $id);
        $tentang = tentang::where($where)->first();
        $tentang->deskripsi = $request->deskripsi;
        // dd($panduan);
        $tentang->update();
        // dd($kunjungan);
        if ($tentang) {
            return redirect()->route('tentang')->with('status', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('tentang')->with('status', 'Data Gagal Diupdate');
        }
    }

    public function informasilainya()
    {
        $informasilainya = informasilainya::all();
        return view('admin.informasi_lainya', compact('informasilainya'));
    }

    public function showinformasilainya($id)
    {
        $where = array('id' => $id);
        $informasilainya = informasilainya::findOrFail($where);
        return view('admin.edit_informasi', compact('informasilainya'));
    }

    public function updateinformasilainya(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);
        $where = array('id' => $id);
        $informasilainya = informasilainya::where($where)->first();
        $informasilainya->judul = $request->judul;
        $informasilainya->deskripsi = $request->deskripsi;
        $foto = $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('informasilainya'), $foto);
        $informasilainya->update();
        // dd($informasilainya);
        if ($informasilainya) {
            return redirect()->route('informasilainya')->with('status', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('informasilainya')->with('status', 'Data Gagal Diupdate');
        }
    }

    public function createinformasilainya()
    {
        return view('admin.createinformasilainya');
    }

    public function storeinformasilainya(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);
        $foto = $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('informasilainya'), $foto);
        $informasilainya = informasilainya::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);
        // dd($informasilainya);
        if ($informasilainya) {
            return redirect()->route('informasilainya')->with('status', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('informasilainya')->with('status', 'Data Gagal Ditambahkan');
        }
    }

    public function deleteinformasilainya($id)
    {
        $where = array('id' => $id);
        $informasilainya = informasilainya::where($where)->first();
        $informasilainya->delete();
        if ($informasilainya) {
            return redirect()->route('informasilainya')->with('status', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('informasilainya')->with('status', 'Data Gagal Dihapus');
        }
    }

    public function deletekunjungan($id)
    {
        $where = array('id' => $id);
        $kunjungan = kunjungan::where($where)->first();
        $kunjungan->delete();
        if ($kunjungan) {
            return redirect()->route('riwayat_kunjungan')->with('status', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('riwayat_kunjungan')->with('status', 'Data Gagal Dihapus');
        }
    }

}

