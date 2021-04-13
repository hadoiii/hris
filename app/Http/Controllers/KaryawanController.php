<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $data_karyawan = \App\Models\Karyawan::all();
        return view('karyawan.index', ['data_karyawan' => $data_karyawan]);
    }

    public function create(Request $request)
    {
        \App\Models\Karyawan::create($request->all());
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Di-input!');
    }
}
