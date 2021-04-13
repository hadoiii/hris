<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        /// Fitur Pencarian Data Karyawan
        if($request->has('cari'))
        {
            $data_karyawan = \App\Models\Karyawan::where('nm_lkp', 'LIKE' , '%'.$request->cari.'%')->get();
        }
        else
        {
            $data_karyawan = \App\Models\Karyawan::all();
        }
        
        return view('karyawan.index', ['data_karyawan' => $data_karyawan]);
    }

    public function create(Request $request)
    {
        \App\Models\Karyawan::create($request->all());
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Di-input!');
    }

    public function edit($id)
    {
        $karyawan = \App\Models\Karyawan::find($id);
        return view('karyawan/edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request, $id)
    {
        $karyawan = \App\Models\Karyawan::find($id);
        $karyawan->update($request->all());
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Di-Update!');
    }

    public function delete($id)
    {
        $karyawan = \App\Models\Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Dihapus!');
    }
}
