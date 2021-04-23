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
                    <form action="/karyawan/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('nip') ? ' has-error' : ''}}">
                            <label for="InputNIP" class="form-label">Nomor Induk Pegawai</label>
                            <input name="nip" type="text" class="form-control" placeholder="Masukkan Nomor Induk Pegawai" value="{{old('nip')}}">
                            @if($errors->has('nip'))
                            <span class="help-block">{{$errors->first('nip')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('nik') ? ' has-error' : ''}}">
                            <label for="InputNIK" class="form-label">Nomor Induk Kependudukan</label>
                            <input name="nik" type="text" class="form-control" placeholder="Masukkan Nomor Induk Kependudukan" value="{{old('nik')}}">
                            @if($errors->has('nik'))
                            <span class="help-block">{{$errors->first('nik')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('nm_lkp') ? ' has-error' : ''}}">
                            <label for="InputNamaLengkap" class="form-label">Nama Lengkap</label>
                            <input name="nm_lkp" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{old('nm_lkp')}}">
                            @if($errors->has('nm_lkp'))
                            <span class="help-block">{{$errors->first('nm_lkp')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputNamaPanggilan" class="form-label">Nama Panggilan</label>
                            <input name="nm_pgil" type="text" class="form-control" placeholder="Masukkan Nama Panggilan" value="{{old('nm_pgil')}}">
                        </div>
                        </div>
                        <div class="mb 3">
                        <div class="form-group{{$errors->has('jk') ? ' has-error' : ''}}">
                            <label for="InputJenisKelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jk" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Pria" {{(old('jk') == 'Pria') ? ' selected' : ''}}>Pria</option>
                                <option value="Wanita" {{(old('jk') == 'Wanita') ? ' selected' : ''}}>Wanita</option>
                            </select>
                            @if($errors->has('jk'))
                            <span class="help-block">{{$errors->first('jk')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('tmp_lahir') ? ' has-error' : ''}}">
                            <label for="InputTempatLahir" class="form-label">Kota Kelahiran</label>
                            <input name="tmp_lahir" type="text" class="form-control" placeholder="Masukkan Kota Kelahiran" value="{{old('tmp_lahir')}}">
                            @if($errors->has('tmp_lahir'))
                            <span class="help-block">{{$errors->first('tmp_lahir')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('tgl_lahir') ? ' has-error' : ''}}">
                            <label for="InputTanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{old('tgl_lahir')}}">
                            @if($errors->has('tgl_lahir'))
                            <span class="help-block">{{$errors->first('tgl_lahir')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('almt_ktp') ? ' has-error' : ''}}">
                            <label for="FormControlTextarea1" class="form-label">Alamat (Sesuai KTP)</label>
                            <textarea name="almt_ktp" class="form-control" id="FormControlTextarea1" rows="3">{{old('almt_ktp')}}</textarea>
                            @if($errors->has('almt_ktp'))
                            <span class="help-block">{{$errors->first('almt_ktp')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('almt_domisili') ? ' has-error' : ''}}">
                            <label for="FormControlTextarea1" class="form-label">Alamat Domisili</label>
                            <textarea name="almt_domisili" class="form-control" id="FormControlTextarea1" rows="3">{{old('almt_domisili')}}</textarea>
                            @if($errors->has('almt_domisili'))
                            <span class="help-block">{{$errors->first('almt_domisili')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                            <label for="InputEmail" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="InputEmail" placeholder="Masukkan Email" value="{{old('email')}}">
                            @if($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('no_hp') ? ' has-error' : ''}}">
                            <label for="InputNoHanphone" class="form-label">Nomor Handphone</label>
                            <input name="no_hp" type="text" class="form-control" placeholder="Masukkan Nomor Handphone" value="{{old('no_hp')}}">
                            @if($errors->has('no_hp'))
                            <span class="help-block">{{$errors->first('no_hp')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb 3">
                        <div class="form-group">
                            <label for="InputStatus" class="form-label">Status Perkawinan</label>
                            <select name="stts_kawin" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Belum Menikah" {{(old('stts_kawin') == 'Belum Menikah') ? ' selected' : ''}}>Belum Menikah</option>
                                <option value="Menikah" {{(old('stts_kawin') == 'Menikah') ? ' selected' : ''}}>Menikah</option>
                                <option value="Janda" {{(old('stts_kawin') == 'Janda') ? ' selected' : ''}}>Janda</option>
                                <option value="Duda" {{(old('stts_kawin') == 'Duda') ? ' selected' : ''}}>Duda</option>
                            </select>
                        </div>
                        </div>
                        <div class="mb 3">
                        <div class="form-group{{$errors->has('agama') ? ' has-error' : ''}}">
                            <label for="InputAgama" class="form-label">Agama</label>
                            <select name="agama" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Islam" {{(old('agama') == 'Islam') ? ' selected' : ''}}>Islam</option>
                                <option value="Kristen" {{(old('agama') == 'Kristen') ? ' selected' : ''}}>Kristen</option>
                                <option value="Katholik" {{(old('agama') == 'Katholik') ? ' selected' : ''}}>Katholik</option>
                                <option value="Hindu" {{(old('agama') == 'Hindu') ? ' selected' : ''}}>Hindu</option>
                                <option value="Budha" {{(old('agama') == 'Budha') ? ' selected' : ''}}>Budha</option>
                                <option value="Kong Hu Chu" {{(old('agama') == 'Kong Hu Chu') ? ' selected' : ''}}>Kong Hu Chu</option>
                            </select>
                            @if($errors->has('agama'))
                            <span class="help-block">{{$errors->first('agama')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb 3">
                        <div class="form-group">
                            <label for="InputPendidikan" class="form-label">Pendidikan</label>
                            <select name="pddk" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="SMA / Sederajat" {{(old('pddk') == 'SMA / Sederajat') ? ' selected' : ''}}>SMA / Sederajat</option>
                                <option value="Strata-1" {{(old('pddk') == 'Strata-1') ? ' selected' : ''}}>Strata-1</option>
                                <option value="Strata-2" {{(old('pddk') == 'Strata-2') ? ' selected' : ''}}>Strata-2</option>
                                <option value="Strata-3" {{(old('pddk') == 'Strata-3') ? ' selected' : ''}}>Strata-3</option>
                            </select>
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputNoKK" class="form-label">Nomor Kartu Keluarga</label>
                            <input name="no_kk" type="text" class="form-control" placeholder="Masukkan Nomor Kartu Keluarga" value="{{old('no_kk')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputNamaAyah" class="form-label">Nama Ayah</label>
                            <input name="nm_ayah" type="text" class="form-control" placeholder="Masukkan Nama Ayah" value="{{old('nm_ayah')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputNamaIbu" class="form-label">Nama Ibu</label>
                            <input name="nm_ibu" type="text" class="form-control" placeholder="Masukkan Nama Ibu" value="{{old('nm_ibu')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputNamaPasangan" class="form-label">Nama Pasangan</label>
                            <input name="nm_pasangan" type="text" class="form-control" placeholder="Masukkan Nama Pasangan" value="{{old('nm_pasangan')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputNamaAnak1" class="form-label">Nama Anak Pertama</label>
                            <input name="nm_anak_1" type="text" class="form-control" placeholder="Masukkan Nama Anak Pertama" value="{{old('nm_anak_1')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputNamaAnak2" class="form-label">Nama Anak Kedua</label>
                            <input name="nm_anak_2" type="text" class="form-control" placeholder="Masukkan Nama Anak Kedua" value="{{old('nm_anak_2')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="NamaAnak3" class="form-label">Nama Anak Ketiga</label>
                            <input name="nm_anak_3" type="text" class="form-control" placeholder="Masukkan Nama Anak Ketiga" value="{{old('nm_anak_3')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('no_darurat') ? ' has-error' : ''}}">
                            <label for="InputNoDarurat" class="form-label">Nomor Darurat</label>
                            <input name="no_darurat" type="text" class="form-control" placeholder="Masukkan Nomor yang bisa dihubungi dalam keadaan darurat" value="{{old('no_darurat')}}">
                            @if($errors->has('no_darurat'))
                            <span class="help-block">{{$errors->first('no_darurat')}}</span>
                            @endif
                        </div>
                        </div>
                        <div class="mb 3">
                        <div class="form-group">
                            <label for="InputStatusPegawai" class="form-label">Status Kepegawaian</label>
                            <select name="stts_pegawai" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="Tetap" {{(old('stts_pegawai') == 'Tetap') ? ' selected' : ''}}>Tetap</option>
                                <option value="Kontrak" {{(old('stts_pegawai') == 'Kontrak') ? ' selected' : ''}}>Kontrak</option>
                                <option value="Program Bakti" {{(old('stts_pegawai') == 'Program Bakti') ? ' selected' : ''}}>Progam Bakti</option>
                                <option value="Magang" {{(old('stts_pegawai') == 'Magang') ? ' selected' : ''}}>Magang</option>
                            </select>
                        </div>
                        </div>
                        <div class="mb 3">
                        <div class="form-group">
                            <label for="InputGolongan" class="form-label">Golongan</label>
                            <select name="golongan" class="form-control" aria-label="Default select example">
                                <option selected>Masukkan Pilihan</option>
                                <option value="I-A" {{(old('golongan') == 'I-A') ? ' selected' : ''}}>I-A</option>
                                <option value="I-B" {{(old('golongan') == 'I-B') ? ' selected' : ''}}>I-B</option>
                                <option value="I-C" {{(old('golongan') == 'I-C') ? ' selected' : ''}}>I-C</option>
                                <option value="I-D" {{(old('golongan') == 'I-D') ? ' selected' : ''}}>I-D</option>
                                <option value="II-A" {{(old('golongan') == 'II-A') ? ' selected' : ''}}>II-A</option>
                                <option value="II-B" {{(old('golongan') == 'II-B') ? ' selected' : ''}}>II-B</option>
                                <option value="II-C" {{(old('golongan') == 'II-C') ? ' selected' : ''}}>II-C</option>
                                <option value="II-D" {{(old('golongan') == 'II-D') ? ' selected' : ''}}>II-D</option>
                                <option value="III-A" {{(old('golongan') == 'III-A') ? ' selected' : ''}}>III-A</option>
                                <option value="III-B" {{(old('golongan') == 'III-B') ? ' selected' : ''}}>III-B</option>
                                <option value="III-C" {{(old('golongan') == 'III-C') ? ' selected' : ''}}>III-C</option>
                                <option value="III-D" {{(old('golongan') == 'III-D') ? ' selected' : ''}}>III-D</option>
                                <option value="IV-A" {{(old('golongan') == 'IV-A') ? ' selected' : ''}}>IV-A</option>
                                <option value="IV-B" {{(old('golongan') == 'IV-B') ? ' selected' : ''}}>IV-B</option>
                                <option value="IV-C" {{(old('golongan') == 'IV-C') ? ' selected' : ''}}>IV-C</option>
                                <option value="IV-D" {{(old('golongan') == 'IV-D') ? ' selected' : ''}}>IV-D</option>
                            </select>
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputJabatan" class="form-label">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Masukkan Jabatan" value="{{old('jabatan')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputTanggalMasuk" class="form-label">Tanggal Masuk</label>
                            <input name="tgl_masuk" type="date" class="form-control" placeholder="Tanggal Masuk" value="{{old('tgl_masuk')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputTanggalAkhirKontrak" class="form-label">Tanggal Berakhir Kontrak (*Jika berstatus kontrak)</label>
                            <input name="tgl_akhir_kontrak" type="date" class="form-control" placeholder="Tanggal Berakhir Kontrak" value="{{old('tgl_akhir_kontrak')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group">
                            <label for="InputPenempatan" class="form-label">Penempatan</label>
                            <input name="penempatan" type="text" class="form-control" placeholder="Masukkan Penempatan" value="{{old('penempatan')}}">
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Avatar</label>
                            <input name="avatar" type="file" class="form-control">
                            @if($errors->has('avatar'))
                            <span class="help-block">{{$errors->first('avatar')}}</span>
                            @endif
                        </div>
                        </div>
                </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop