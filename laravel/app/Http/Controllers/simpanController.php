<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dasaruu;

class simpanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createdasaruu()
    {
        return view('admin.create_dasaruu');
    }
    public function dasaruu()
    {
        $dasaruu = dasaruu::all();
        return view('admin.dasaruu', compact('dasaruu'));
    }

    public function showdasaruu($id)
    {
        $where = array('id' => $id);
        $dasaruu = dasaruu::findOrFail($where);
        return view('admin.edit_dasaruu', compact('dasaruu'));
    }

    public function updatedasaruu(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
        ]);
        $where = array('id' => $id);
        $dasaruu = dasaruu::where($where)->first();
        $dasaruu->deskripsi = $request->deskripsi;
        // dd($panduan);
        $dasaruu->update();
        // dd($kunjungan);
        if ($dasaruu) {
            return redirect()->route('dasaruu')->with('status', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('dasaruu')->with('status', 'Data Gagal Diupdate');
        }
    }



    public function storedasaruu(Request $request)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
            'file' => 'required',
        ]);
        $file = $request->file('file')->getClientOriginalName();
        $request->file->move(public_path('dasaruu'), $file);
        $dasaruu = dasaruu::create([
            'deskripsi' => $request->deskripsi,
            'file' => $file,
        ]);
        if ($dasaruu) {
            return redirect()->route('dasaruu')->with('status', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('dasaruu')->with('status', 'Data Gagal Ditambahkan');
        }
    }

    public function deletedasaruu($id)
    {
        $where = array('id' => $id);
        $dasaruu = dasaruu::where($where)->first();
        $dasaruu->delete();
        if ($dasaruu) {
            return redirect()->route('dasaruu')->with('status', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dasaruu')->with('status', 'Data Gagal Dihapus');
        }
    }
}
