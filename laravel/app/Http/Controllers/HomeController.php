<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tentang;
use App\Models\dasaruu;
use App\Models\panduan;
use App\Models\informasilainya;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function kunjungan()
    {
        return view('kunjungan');
    }

    public function visi()
    {
        $visi = tentang::all();
        return view('informasi1', compact('visi'));
    }

    public function dasaruu()
    {
        $dasaruu = dasaruu::all();
        return view('informasi2', compact('dasaruu'));
    }

    public function download($id)
    {
        $file = dasaruu::find($id);
        $path = public_path('dasaruu/'.$file->file);
        return response()->download($path);
    }

    public function aplikasi()
    {
        $panduan = panduan::all();
        return view('panduan_aplikasi', compact('panduan'));
    }

    public function panduan()
    {
        $panduan = panduan::all();
        return view('panduan_kunjungan', compact('panduan'));
    }
    public function informasi_lainnya()
    {
        $informasilainya = informasilainya::all();
        return view('informasi3', compact('informasilainya'));
    }
}
