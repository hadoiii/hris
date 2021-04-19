@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <!-- Button Untuk Menambah Data -->
                            <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#exampleModal">
                            TAMBAH
                            </button>
                            <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>ALAMAT DOMISILI</th>
                                    <th>EMAIL</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data_karyawan as $karyawan)
                                <tr>
                                    <td>{{$karyawan->nip}}</td>
                                    <td><a href="/karyawan/{{$karyawan->id}}/profile">{{$karyawan->nm_lkp}}</a></td>
                                    <td>{{$karyawan->jk}}</td>
                                    <td>{{$karyawan->tmp_lahir}}</td>
                                    <td>{{$karyawan->tgl_lahir}}</td>
                                    <td>{{$karyawan->almt_domisili}}</td>
                                    <td>{{$karyawan->email}}</td>
                                    <td><a href="/karyawan/{{$karyawan->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                    <td><a href="/karyawan/{{$karyawan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin nih mau dihapus?')">Hapus</a></td>
                                </tr>
                    @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA KARYAWAN</h5>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/karyawan/create" method="POST">
                    {{csrf_field()}}
                        <div class="mb-3">
                            <label for="InputNIP" class="form-label">Nomor Induk Pegawai</label>
                            <input name="nip" type="text" class="form-control" placeholder="Masukkan Nomor Induk Pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="InputNIK" class="form-label">Nomor Induk Kependudukan</label>
                            <input name="nik" type="text" class="form-control" placeholder="Masukkan Nomor Induk Kependudukan">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaLengkap" class="form-label">Nama Lengkap</label>
                            <input name="nm_lkp" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaPanggilan" class="form-label">Nama Panggilan</label>
                            <input name="nm_pgil" type="text" class="form-control" placeholder="Masukkan Nama Panggilan">
                        </div>
                        <div class="mb 3">
                            <label for="InputJenisKelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jk" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="InputTempatLahir" class="form-label">Kota Kelahiran</label>
                            <input name="tmp_lahir" type="text" class="form-control" placeholder="Masukkan Kota Kelahiran">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control" placeholder="Masukkan Tanggal Lahir">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlTextarea1" class="form-label">Alamat (Sesuai KTP)</label>
                            <textarea name="almt_ktp" class="form-control" id="FormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="FormControlTextarea1" class="form-label">Alamat Domisili</label>
                            <textarea name="almt_domisili" class="form-control" id="FormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="InputEmail" placeholder="Masukkan Email">
                        </div>
                        <div class="mb-3">
                            <label for="InputNoHanphone" class="form-label">Nomor Handphone</label>
                            <input name="no_hp" type="text" class="form-control" placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="mb 3">
                            <label for="InputStatus" class="form-label">Status Perkawinan</label>
                            <select name="stts_kawin" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Janda">Janda</option>
                                <option value="Duda">Duda</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb 3">
                            <label for="InputAgama" class="form-label">Agama</label>
                            <select name="agama" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb 3">
                            <label for="InputPendidikan" class="form-label">Pendidikan</label>
                            <select name="pddk" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="SMA / Sederajat">SMA / Sederajat</option>
                                <option value="Strata-1">Strata-1</option>
                                <option value="Strata-2">Strata-2</option>
                                <option value="Strata-3">Strata-3</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="InputNoKK" class="form-label">Nomor Kartu Keluarga</label>
                            <input name="no_kk" type="text" class="form-control" placeholder="Masukkan Nomor Kartu Keluarga">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaAyah" class="form-label">Nama Ayah</label>
                            <input name="nm_ayah" type="text" class="form-control" placeholder="Masukkan Nama Ayah">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaIbu" class="form-label">Nama Ibu</label>
                            <input name="nm_ibu" type="text" class="form-control" placeholder="Masukkan Nama Ibu">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaPasangan" class="form-label">Nama Pasangan</label>
                            <input name="nm_pasangan" type="text" class="form-control" placeholder="Masukkan Nama Pasangan">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaAnak1" class="form-label">Nama Anak Pertama</label>
                            <input name="nm_anak_1" type="text" class="form-control" placeholder="Masukkan Nama Anak Pertama">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaAnak2" class="form-label">Nama Anak Kedua</label>
                            <input name="nm_anak_2" type="text" class="form-control" placeholder="Masukkan Nama Anak Kedua">
                        </div>
                        <div class="mb-3">
                            <label for="NamaAnak3" class="form-label">Nama Anak Ketiga</label>
                            <input name="nm_anak_3" type="text" class="form-control" placeholder="Masukkan Nama Anak Ketiga">
                        </div>
                        <div class="mb-3">
                            <label for="InputNoDarurat" class="form-label">Nomor Darurat</label>
                            <input name="no_darurat" type="text" class="form-control" placeholder="Masukkan Nomor yang bisa dihubungi dalam keadaan darurat">
                        </div>
                        <div class="mb 3">
                            <label for="InputStatusPegawai" class="form-label">Status Kepegawaian</label>
                            <select name="stts_pegawai" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Program Bakti">Progam Bakti</option>
                                <option value="Magang">Magang</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb 3">
                            <label for="InputGolongan" class="form-label">Golongan</label>
                            <select name="golongan" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="I-A">I-A</option>
                                <option value="I-B">I-B</option>
                                <option value="I-C">I-C</option>
                                <option value="I-D">I-D</option>
                                <option value="II-A">II-A</option>
                                <option value="II-B">II-B</option>
                                <option value="II-C">II-C</option>
                                <option value="II-D">II-D</option>
                                <option value="III-A">III-A</option>
                                <option value="III-B">III-B</option>
                                <option value="III-C">III-C</option>
                                <option value="III-D">III-D</option>
                                <option value="IV-A">IV-A</option>
                                <option value="IV-B">IV-B</option>
                                <option value="IV-C">IV-C</option>
                                <option value="IV-D">IV-D</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="InputJabatan" class="form-label">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Masukkan Jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalMasuk" class="form-label">Tanggal Masuk</label>
                            <input name="tgl_masuk" type="date" class="form-control" placeholder="Tanggal Masuk">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalAkhirKontrak" class="form-label">Tanggal Berakhir Kontrak (*Jika berstatus kontrak)</label>
                            <input name="tgl_akhir_kontrak" type="date" class="form-control" placeholder="Tanggal Berakhir Kontrak">
                        </div>
                        <div class="mb-3">
                            <label for="InputPenempatan" class="form-label">Penempatan</label>
                            <input name="penempatan" type="text" class="form-control" placeholder="Masukkan Penempatan">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalInput" class="form-label">Diinput Tanggal :</label>
                            <input name="created_at" type="date" class="form-control" placeholder="Tanggal Input">
                        </div>
                </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop