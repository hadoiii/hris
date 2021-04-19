@extends('layouts.master')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset('adminlte/img/user4-128x128.jpg')}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$karyawan->nm_lkp}}</h3>

                <p class="text-muted text-center">{{$karyawan->jabatan}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Nama Panggil</b> <a class="float-right">{{$karyawan->nm_pgil}}</a>
                    </li>  
                    <li class="list-group-item">
                        <b>NIP</b> <a class="float-right">{{$karyawan->nip}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right">{{$karyawan->email}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Nomor HP</b> <a class="float-right">{{$karyawan->no_hp}}</a>
                    </li>
                </ul>

                <a href="/karyawan/{{$karyawan->id}}/edit" class="btn btn-warning btn-block"><b>Edit Profil</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi Dasar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong></i> Jenis Kelamin</strong>

                <p class="text-muted">
                    {{$karyawan->jk}}
                </p>

                <hr>

                <strong> TTL</strong>

                <p class="text-muted">
                    {{$karyawan->tmp_lahir}}, {{$karyawan->tgl_lahir}}
                </p>

                <hr>

                <strong> Alamat KTP</strong>

                <p class="text-muted">
                    {{$karyawan->almt_ktp}}
                </p>

                <hr>

                <strong> Alamat Domisili</strong>

                <p class="text-muted">
                    {{$karyawan->almt_domisili}}
                </p>

                <hr>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#infolanjut" data-toggle="tab">Informasi Lengkap</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="infolanjut">
                  <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <td>Nomor KK </td>
                            <td>{{$karyawan->no_kk}}</td>
                        </tr>
                        <tr>
                            <td>NIK </td>
                            <td>{{$karyawan->nik}}</td>
                        </tr>
                        <tr>
                            <td>Agama </td>
                            <td>{{$karyawan->agama}}</td>
                        </tr>
                        <tr>
                            <td>Status Perkawinan </td>
                            <td>{{$karyawan->stts_kawin}}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan </td>
                            <td>{{$karyawan->pddk}}</td>
                        </tr>
                        <tr>
                            <td>Nama Ayah </td>
                            <td>{{$karyawan->nm_ayah}}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu </td>
                            <td>{{$karyawan->nm_ibu}}</td>
                        </tr>
                        <tr>
                            <td>Nama Pasangan </td>
                            <td>{{$karyawan->nm_pasangan}}</td>
                        </tr>
                        <tr>
                            <td>Nama Anak Pertama </td>
                            <td>{{$karyawan->nm_anak_1}}</td>
                        </tr>
                        <tr>
                            <td>Nama Anak Kedua </td>
                            <td>{{$karyawan->nm_anak_2}}</td>
                        </tr>
                        <tr>
                            <td>Nama Anak Ketiga </td>
                            <td>{{$karyawan->nm_anak_3}}</td>
                        </tr>
                        <tr>
                            <td>Nomor Kontak Darurat </td>
                            <td>{{$karyawan->no_darurat}}</td>
                        </tr>
                        <tr>
                            <td>Status Pegawai </td>
                            <td>{{$karyawan->stts_pegawai}}</td>
                        </tr>
                        <tr>
                            <td>Golongan </td>
                            <td>{{$karyawan->golongan}}</td>
                        </tr>
                        <tr>
                            <td>Jabatan </td>
                            <td>{{$karyawan->jabatan}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk </td>
                            <td>{{$karyawan->tgl_masuk}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Berakhir Kontrak </td>
                            <td>{{$karyawan->tgl_akhir_kontrak}}</td>
                        </tr>
                        <tr>
                            <td>Penempatan </td>
                            <td>{{$karyawan->penempatan}}</td>
                        </tr>
                    </table>
                </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    NO CONTENT TEMPORARY
                      <div>
                        </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    KOSONGAN
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@stop