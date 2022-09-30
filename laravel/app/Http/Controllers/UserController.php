<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
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
        $users = User::all();
        return view('admin.user', compact('users'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $where = array('id' => $id);
        $detail = User::findOrFail($where);
        return view('detail_profil', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $where = array('id' => $id);
        $detail = User::findOrFail($where);
        return view('edit_profil', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nik' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);
        $foto = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('images/foto/'), $foto);
        $update = ['foto' => $foto, 'nik' => $request->nik, 'nama' => $request->nama, 'jk' => $request->jk, 'tempat_lahir' => $request->tempat_lahir, 'tgl_lahir' => $request->tgl_lahir, 'no_hp' => $request->no_hp, 'alamat' => $request->alamat];
        User::where('id',$id)->update($update);
        return redirect()->route('detail-profil',Auth::user()->id)->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $where = array('id' => $id);
        $user = User::where($where)->first();
        $user->delete();
        if ($user) {
            return redirect()->route('datauser')->with('status', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('datauser')->with('status', 'Data Gagal Dihapus');
        }
    }
}
