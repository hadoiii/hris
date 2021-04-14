@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
                            {{csrf_field()}}
                                <div class="mb-3">
                                    <label for="InputNIP" class="form-label">Nomor Induk Pegawai</label>
                                    <input name="nip" type="text" class="form-control" placeholder="Nomor Induk Pegawai" value="{{$karyawan->nip}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNIK" class="form-label">Nomor Induk Kependudukan</label>
                                    <input name="nik" type="text" class="form-control" placeholder="Nomor Induk Kependudukan" value="{{$karyawan->nik}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNamaLengkap" class="form-label">Nama Lengkap</label>
                                    <input name="nm_lkp" type="text" class="form-control" placeholder="Nama Lengkap" value="{{$karyawan->nm_lkp}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNamaPanggilan" class="form-label">Nama Panggilan</label>
                                    <input name="nm_pgil" type="text" class="form-control" placeholder="Nama Panggilan" value="{{$karyawan->nm_pgil}}">
                                </div>
                                <div class="mb 3">
                                    <label for="InputJenisKelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" class="form-control" aria-label="Default select example">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="Pria" @if($karyawan->jk == 'Pria') selected  @endif>Pria</option>
                                        <option value="Wanita" @if($karyawan->jk == 'Wanita') selected  @endif>Wanita</option>
                                    </select>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="InputTempatLahir" class="form-label">Kota Kelahiran</label>
                                    <input name="tmp_lahir" type="text" class="form-control" placeholder="Kota Kelahiran" value="{{$karyawan->tmp_lahir}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputTanggalLahir" class="form-label">Tanggal Lahir</label>
                                    <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" value="{{$karyawan->tgl_lahir}}">
                                </div>
                                <div class="mb-3">
                                    <label for="FormControlTextarea1" class="form-label">Alamat (Sesuai KTP)</label>
                                    <textarea name="almt_ktp" class="form-control" id="FormControlTextarea1" rows="3">{{$karyawan->almt_ktp}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="FormControlTextarea1" class="form-label">Alamat Domisili</label>
                                    <textarea name="almt_domisili" class="form-control" id="FormControlTextarea1" rows="3">{{$karyawan->almt_domisili}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="InputEmail" placeholder="Email" value="{{$karyawan->email}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNoHanphone" class="form-label">Nomor Handphone</label>
                                    <input name="no_hp" type="text" class="form-control" placeholder="Nomor Handphone" value="{{$karyawan->no_hp}}">
                                </div>
                                <div class="mb 3">
                                    <label for="InputStatusPerkawinan" class="form-label">Status Perkawinan</label>
                                    <select name="stts_kawin" class="form-control" aria-label="Default select example">
                                        <option selected>Status Perkawinan</option>
                                        <option value="Belum Menikah" @if($karyawan->stts_kawin == 'Belum Menikah') selected  @endif>Belum Menikah</option>
                                        <option value="Menikah" @if($karyawan->stts_kawin == 'Menikah') selected  @endif>Menikah</option>
                                        <option value="Janda" @if($karyawan->stts_kawin == 'Janda') selected  @endif>Janda</option>
                                        <option value="Duda" @if($karyawan->stts_kawin == 'Duda') selected  @endif>Duda</option>
                                    </select>
                                </div>
                                <br>
                                <div class="mb 3">
                                    <label for="InputAgama" class="form-label">Agama</label>
                                    <select name="agama" class="form-control" aria-label="Default select example">
                                        <option selected>Agama</option>
                                        <option value="Islam" @if($karyawan->agama == 'Islam') selected  @endif>Islam</option>
                                        <option value="Kristen" @if($karyawan->agama == 'Kristen') selected  @endif>Kristen</option>
                                        <option value="Katholik" @if($karyawan->agama == 'Katholik') selected  @endif>Katholik</option>
                                        <option value="Hindu" @if($karyawan->agama == 'Hindu') selected  @endif>Hindu</option>
                                        <option value="Budha" @if($karyawan->agama == 'Budha') selected  @endif>Budha</option>
                                        <option value="Kong Hu Chu" @if($karyawan->agama == 'Kong Hu Chu') selected  @endif>Kong Hu Chu</option>
                                    </select>
                                </div>
                                <br>
                                <div class="mb 3">
                                    <label for="InputPendidikan" class="form-label">Pendidikan</label>
                                    <select name="pddk" class="form-control" aria-label="Default select example">
                                        <option selected>Pendidikan</option>
                                        <option value="SMA / Sederajat" @if($karyawan->pddk == 'SMA / Sederajat') selected  @endif>SMA / Sederajat</option>
                                        <option value="Strata-1" @if($karyawan->pddk == 'Strata-1') selected  @endif>Strata-1</option>
                                        <option value="Strata-2" @if($karyawan->pddk == 'Strata-2') selected  @endif>Strata-2</option>
                                        <option value="Strata-3" @if($karyawan->pddk == 'Strata-3') selected  @endif>Strata-3</option>
                                    </select>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="InputNoKK" class="form-label">Nomor Kartu Keluarga</label>
                                    <input name="no_kk" type="text" class="form-control" placeholder="Nomor Kartu Keluarga" value="{{$karyawan->no_kk}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNamaAyah" class="form-label">Nama Ayah</label>
                                    <input name="nm_ayah" type="text" class="form-control" placeholder="Nama Ayah" value="{{$karyawan->nm_ayah}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNamaIbu" class="form-label">Nama Ibu</label>
                                    <input name="nm_ibu" type="text" class="form-control" placeholder="Nama Ibu" value="{{$karyawan->nm_ibu}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNamaPasangan" class="form-label">Nama Pasangan</label>
                                    <input name="nm_pasangan" type="text" class="form-control" placeholder="Nama Pasangan" value="{{$karyawan->nm_pasangan}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNamaAnak1" class="form-label">Nama Anak Pertama</label>
                                    <input name="nm_anak_1" type="text" class="form-control" placeholder="Nama Anak Pertama" value="{{$karyawan->nm_anak_1}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNamaAnak2" class="form-label">Nama Anak Kedua</label>
                                    <input name="nm_anak_2" type="text" class="form-control" placeholder="Nama Anak Kedua" value="{{$karyawan->nm_anak_2}}">
                                </div>
                                <div class="mb-3">
                                    <label for="NamaAnak3" class="form-label">Nama Anak Ketiga</label>
                                    <input name="nm_anak_3" type="text" class="form-control" placeholder="Nama Anak Ketiga" value="{{$karyawan->nm_anak_3}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNoDarurat" class="form-label">Nomor Darurat</label>
                                    <input name="no_darurat" type="text" class="form-control" placeholder="Nomor yang bisa dihubungi dalam keadaan darurat" value="{{$karyawan->no_darurat}}">
                                </div>
                                <div class="mb 3">
                                    <label for="InputStatusPegawai" class="form-label">Status Kepegawaian</label>
                                    <select name="stts_pegawai" class="form-control" aria-label="Default select example">
                                        <option selected>Status Kepegawaian</option>
                                        <option value="Tetap" @if($karyawan->stts_pegawai == 'Tetap') selected  @endif>Tetap</option>
                                        <option value="Kontrak" @if($karyawan->stts_pegawai == 'Kontrak') selected  @endif>Kontrak</option>
                                        <option value="Program Bakti" @if($karyawan->stts_pegawai == 'Program Bakti') selected  @endif>Progam Bakti</option>
                                        <option value="Magang" @if($karyawan->stts_pegawai == 'Magang') selected  @endif>Magang</option>
                                    </select>
                                </div>
                                <br>
                                <div class="mb 3">
                                    <label for="InputGolongan" class="form-label">Golongan</label>
                                    <select name="golongan" class="form-control" aria-label="Default select example">
                                        <option selected>Golongan</option>
                                        <option value="I-A" @if($karyawan->golongan == 'I-A') selected  @endif>I-A</option>
                                        <option value="I-B" @if($karyawan->golongan == 'I-B') selected  @endif>I-B</option>
                                        <option value="I-C" @if($karyawan->golongan == 'I-C') selected  @endif>I-C</option>
                                        <option value="I-D" @if($karyawan->golongan == 'I-D') selected  @endif>I-D</option>
                                        <option value="II-A" @if($karyawan->golongan == 'II-A') selected  @endif>II-A</option>
                                        <option value="II-B" @if($karyawan->golongan == 'II-B') selected  @endif>II-B</option>
                                        <option value="II-C" @if($karyawan->golongan == 'II-C') selected  @endif>II-C</option>
                                        <option value="II-D" @if($karyawan->golongan == 'II-D') selected  @endif>II-D</option>
                                        <option value="III-A" @if($karyawan->golongan == 'III-A') selected  @endif>III-A</option>
                                        <option value="III-B" @if($karyawan->golongan == 'III-B') selected  @endif>III-B</option>
                                        <option value="III-C" @if($karyawan->golongan == 'III-C') selected  @endif>III-C</option>
                                        <option value="III-D" @if($karyawan->golongan == 'III-D') selected  @endif>III-D</option>
                                        <option value="IV-A" @if($karyawan->golongan == 'IV-A') selected  @endif>IV-A</option>
                                        <option value="IV-B" @if($karyawan->golongan == 'IV-B') selected  @endif>IV-B</option>
                                        <option value="IV-C" @if($karyawan->golongan == 'IV-C') selected  @endif>IV-C</option>
                                        <option value="IV-D" @if($karyawan->golongan == 'IV-D') selected  @endif>IV-D</option>
                                    </select>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="InputJabatan" class="form-label">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="{{$karyawan->jabatan}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputTanggalMasuk" class="form-label">Tanggal Masuk</label>
                                    <input name="tgl_masuk" type="date" class="form-control" placeholder="Tanggal Masuk" value="{{$karyawan->tgl_masuk}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputTanggalAkhirKontrak" class="form-label">Tanggal Berakhir Kontrak (*Jika berstatus kontrak)</label>
                                    <input name="tgl_akhir_kontrak" type="date" class="form-control" placeholder="Tanggal Berakhir Kontrak" value="{{$karyawan->tgl_akhir_kontrak}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputPenempatan" class="form-label">Penempatan</label>
                                    <input name="penempatan" type="text" class="form-control" placeholder="Penempatan" value="{{$karyawan->penempatan}}">
                                </div>
                                <div class="mb-3">
                                    <label for="InputTanggalInput" class="form-label">Diinput Tanggal :</label>
                                    <input name="created_at" type="date" class="form-control" placeholder="Tanggal Input" value="{{$karyawan->created_at}}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>
                        </div>    
                        <!-- form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('content1')
        <h1>EDIT DATA KARYAWAN</h1>
        <!-- Notifikasi Keberhasilan Proses Input -->
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <!-- Akhir Skrip Notifikasi -->

            <div class="row">
                <div class="col lg-12">
                    <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="InputNIP" class="form-label">Nomor Induk Pegawai</label>
                            <input name="nip" type="text" class="form-control" placeholder="Nomor Induk Pegawai" value="{{$karyawan->nip}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNIK" class="form-label">Nomor Induk Kependudukan</label>
                            <input name="nik" type="text" class="form-control" placeholder="Nomor Induk Kependudukan" value="{{$karyawan->nik}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaLengkap" class="form-label">Nama Lengkap</label>
                            <input name="nm_lkp" type="text" class="form-control" placeholder="Nama Lengkap" value="{{$karyawan->nm_lkp}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaPanggilan" class="form-label">Nama Panggilan</label>
                            <input name="nm_pgil" type="text" class="form-control" placeholder="Nama Panggilan" value="{{$karyawan->nm_pgil}}">
                        </div>
                        <div class="mb 3">
                            <label for="InputJenisKelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jk" class="form-select" aria-label="Default select example">
                                <option selected>Jenis Kelamin</option>
                                <option value="Pria" @if($karyawan->jk == 'Pria') selected  @endif>Pria</option>
                                <option value="Wanita" @if($karyawan->jk == 'Wanita') selected  @endif>Wanita</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="InputTempatLahir" class="form-label">Kota Kelahiran</label>
                            <input name="tmp_lahir" type="text" class="form-control" placeholder="Kota Kelahiran" value="{{$karyawan->tmp_lahir}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" value="{{$karyawan->tgl_lahir}}">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlTextarea1" class="form-label">Alamat (Sesuai KTP)</label>
                            <textarea name="almt_ktp" class="form-control" id="FormControlTextarea1" rows="3">{{$karyawan->almt_ktp}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="FormControlTextarea1" class="form-label">Alamat Domisili</label>
                            <textarea name="almt_domisili" class="form-control" id="FormControlTextarea1" rows="3">{{$karyawan->almt_domisili}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="InputEmail" placeholder="Email" value="{{$karyawan->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNoHanphone" class="form-label">Nomor Handphone</label>
                            <input name="no_hp" type="text" class="form-control" placeholder="Nomor Handphone" value="{{$karyawan->no_hp}}">
                        </div>
                        <div class="mb 3">
                            <label for="InputStatusPerkawinan" class="form-label">Status Perkawinan</label>
                            <select name="stts_kawin" class="form-control" aria-label="Default select example">
                                <option selected>Status Perkawinan</option>
                                <option value="Belum Menikah" @if($karyawan->stts_kawin == 'Belum Menikah') selected  @endif>Belum Menikah</option>
                                <option value="Menikah" @if($karyawan->stts_kawin == 'Menikah') selected  @endif>Menikah</option>
                                <option value="Janda" @if($karyawan->stts_kawin == 'Janda') selected  @endif>Janda</option>
                                <option value="Duda" @if($karyawan->stts_kawin == 'Duda') selected  @endif>Duda</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb 3">
                            <label for="InputAgama" class="form-label">Agama</label>
                            <select name="agama" class="form-control" aria-label="Default select example">
                                <option selected>Agama</option>
                                <option value="Islam" @if($karyawan->agama == 'Islam') selected  @endif>Islam</option>
                                <option value="Kristen" @if($karyawan->agama == 'Kristen') selected  @endif>Kristen</option>
                                <option value="Katholik" @if($karyawan->agama == 'Katholik') selected  @endif>Katholik</option>
                                <option value="Hindu" @if($karyawan->agama == 'Hindu') selected  @endif>Hindu</option>
                                <option value="Budha" @if($karyawan->agama == 'Budha') selected  @endif>Budha</option>
                                <option value="Kong Hu Chu" @if($karyawan->agama == 'Kong Hu Chu') selected  @endif>Kong Hu Chu</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb 3">
                            <label for="InputPendidikan" class="form-label">Pendidikan</label>
                            <select name="pddk" class="form-control" aria-label="Default select example">
                                <option selected>Pendidikan</option>
                                <option value="SMA / Sederajat" @if($karyawan->pddk == 'SMA / Sederajat') selected  @endif>SMA / Sederajat</option>
                                <option value="Strata-1" @if($karyawan->pddk == 'Strata-1') selected  @endif>Strata-1</option>
                                <option value="Strata-2" @if($karyawan->pddk == 'Strata-2') selected  @endif>Strata-2</option>
                                <option value="Strata-3" @if($karyawan->pddk == 'Strata-3') selected  @endif>Strata-3</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="InputNoKK" class="form-label">Nomor Kartu Keluarga</label>
                            <input name="no_kk" type="text" class="form-control" placeholder="Nomor Kartu Keluarga" value="{{$karyawan->no_kk}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaAyah" class="form-label">Nama Ayah</label>
                            <input name="nm_ayah" type="text" class="form-control" placeholder="Nama Ayah" value="{{$karyawan->nm_ayah}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaIbu" class="form-label">Nama Ibu</label>
                            <input name="nm_ibu" type="text" class="form-control" placeholder="Nama Ibu" value="{{$karyawan->nm_ibu}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaPasangan" class="form-label">Nama Pasangan</label>
                            <input name="nm_pasangan" type="text" class="form-control" placeholder="Nama Pasangan" value="{{$karyawan->nm_pasangan}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaAnak1" class="form-label">Nama Anak Pertama</label>
                            <input name="nm_anak_1" type="text" class="form-control" placeholder="Nama Anak Pertama" value="{{$karyawan->nm_anak_1}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNamaAnak2" class="form-label">Nama Anak Kedua</label>
                            <input name="nm_anak_2" type="text" class="form-control" placeholder="Nama Anak Kedua" value="{{$karyawan->nm_anak_2}}">
                        </div>
                        <div class="mb-3">
                            <label for="NamaAnak3" class="form-label">Nama Anak Ketiga</label>
                            <input name="nm_anak_3" type="text" class="form-control" placeholder="Nama Anak Ketiga" value="{{$karyawan->nm_anak_3}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputNoDarurat" class="form-label">Nomor Darurat</label>
                            <input name="no_darurat" type="text" class="form-control" placeholder="Nomor yang bisa dihubungi dalam keadaan darurat" value="{{$karyawan->no_darurat}}">
                        </div>
                        <div class="mb 3">
                            <label for="InputStatusPegawai" class="form-label">Status Kepegawaian</label>
                            <select name="stts_pegawai" class="form-control" aria-label="Default select example">
                                <option selected>Status Kepegawaian</option>
                                <option value="Tetap" @if($karyawan->stts_pegawai == 'Tetap') selected  @endif>Tetap</option>
                                <option value="Kontrak" @if($karyawan->stts_pegawai == 'Kontrak') selected  @endif>Kontrak</option>
                                <option value="Program Bakti" @if($karyawan->stts_pegawai == 'Program Bakti') selected  @endif>Progam Bakti</option>
                                <option value="Magang" @if($karyawan->stts_pegawai == 'Magang') selected  @endif>Magang</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb 3">
                            <label for="InputGolongan" class="form-label">Golongan</label>
                            <select name="golongan" class="form-controlt" aria-label="Default select example">
                                <option selected>Golongan</option>
                                <option value="I-A" @if($karyawan->golongan == 'I-A') selected  @endif>I-A</option>
                                <option value="I-B" @if($karyawan->golongan == 'I-B') selected  @endif>I-B</option>
                                <option value="I-C" @if($karyawan->golongan == 'I-C') selected  @endif>I-C</option>
                                <option value="I-D" @if($karyawan->golongan == 'I-D') selected  @endif>I-D</option>
                                <option value="II-A" @if($karyawan->golongan == 'II-A') selected  @endif>II-A</option>
                                <option value="II-B" @if($karyawan->golongan == 'II-B') selected  @endif>II-B</option>
                                <option value="II-C" @if($karyawan->golongan == 'II-C') selected  @endif>II-C</option>
                                <option value="II-D" @if($karyawan->golongan == 'II-D') selected  @endif>II-D</option>
                                <option value="III-A" @if($karyawan->golongan == 'III-A') selected  @endif>III-A</option>
                                <option value="III-B" @if($karyawan->golongan == 'III-B') selected  @endif>III-B</option>
                                <option value="III-C" @if($karyawan->golongan == 'III-C') selected  @endif>III-C</option>
                                <option value="III-D" @if($karyawan->golongan == 'III-D') selected  @endif>III-D</option>
                                <option value="IV-A" @if($karyawan->golongan == 'IV-A') selected  @endif>IV-A</option>
                                <option value="IV-B" @if($karyawan->golongan == 'IV-B') selected  @endif>IV-B</option>
                                <option value="IV-C" @if($karyawan->golongan == 'IV-C') selected  @endif>IV-C</option>
                                <option value="IV-D" @if($karyawan->golongan == 'IV-D') selected  @endif>IV-D</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="InputJabatan" class="form-label">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="{{$karyawan->jabatan}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalMasuk" class="form-label">Tanggal Masuk</label>
                            <input name="tgl_masuk" type="date" class="form-control" placeholder="Tanggal Masuk" value="{{$karyawan->tgl_masuk}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalAkhirKontrak" class="form-label">Tanggal Berakhir Kontrak (*Jika berstatus kontrak)</label>
                            <input name="tgl_akhir_kontrak" type="date" class="form-control" placeholder="Tanggal Berakhir Kontrak" value="{{$karyawan->tgl_akhir_kontrak}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputPenempatan" class="form-label">Penempatan</label>
                            <input name="penempatan" type="text" class="form-control" placeholder="Penempatan" value="{{$karyawan->penempatan}}">
                        </div>
                        <div class="mb-3">
                            <label for="InputTanggalInput" class="form-label">Diinput Tanggal :</label>
                            <input name="created_at" type="date" class="form-control" placeholder="Tanggal Input" value="{{$karyawan->created_at}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>  
                </div>
@endsection