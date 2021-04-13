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
}
