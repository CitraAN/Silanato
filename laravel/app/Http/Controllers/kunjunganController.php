<?php

namespace App\Http\Controllers;

use App\Models\kunjungan;
use Illuminate\Http\Request;

class kunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kunjungans = kunjungan::all();
        return view('riwayat_kunjungan', compact('kunjungans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_kunjungan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'hubungan' => 'required',
            'nama_wbp' => 'required',
            'jadwal_kunjungan' => 'required',
            'jam_kunjungan' => 'required',
            'jk' => 'required',
            'file_id' => 'required',
            'foto' => 'required',
            'jumlah_pengunjung' => 'required',
        ]);

        $file_id = $request->file_id->getClientOriginalName();
        $request->file_id->move(public_path('images/file_id'), $file_id);
        $foto = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('images/foto'), $foto);
        $kunjungan = new kunjungan;
        $kunjungan->nama = $request->nama;
        $kunjungan->nik = $request->nik;
        $kunjungan->alamat = $request->alamat;
        $kunjungan->no_hp = $request->no_hp;
        $kunjungan->hubungan = $request->hubungan;
        $kunjungan->nama_wbp = $request->nama_wbp;
        $kunjungan->jadwal_kunjungan = $request->jadwal_kunjungan;
        $kunjungan->jam_kunjungan = $request->jam_kunjungan;
        $kunjungan->jk = $request->jk;
        $kunjungan->file_id = $file_id;
        $kunjungan->foto = $foto;
        $kunjungan->jumlah_pengunjung = $request->jumlah_pengunjung;

        // dd($kunjungan);
        $kunjungan->save();
        if ($kunjungan) {
            return redirect()->route('kunjungan')->with('success', 'Data Berhasil Ditambahkan, silahkan tunggu konfirmasi dari admin');
        } else {
            return redirect()->route('kunjungan')->with('error', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $where = array('id' => $id);
        $kunjungan = kunjungan::findOrFail($where);
        return view('detail_riwayat', compact('kunjungan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function edit(kunjungan $kunjungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kunjungan $kunjungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kunjungan $kunjungan)
    {
        //
    }
}
