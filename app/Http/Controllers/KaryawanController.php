<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        /// INSERT KE TABEL USER
        $user = new \App\Models\User;
        $user->role = 'staf';
        $user->name = $request->nm_lkp;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        /// INSERT KE TABEL KARYAWAN
        $request->request->add(['user_id' => $user->id]);
        $karyawan = \App\Models\Karyawan::create($request->all());

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
        /// INPUT AVATAR DARI EDIT FORM
        if($request->hasFile('avatar'))
        {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $karyawan->avatar = $request->file('avatar')->getClientOriginalName();
            $karyawan->save();
        }
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Di-Update!');
    }

    public function delete($id)
    {
        $karyawan = \App\Models\Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Dihapus!');
    }

    public function profile($id)
    {
        $karyawan = \App\Models\Karyawan::find($id);
        return view('karyawan.profile', ['karyawan' => $karyawan]);
    }
}
