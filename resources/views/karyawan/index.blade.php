<H1>DATA KARYAWAN</h1>
<table>
    <tr>
        <th>NIP</th>
        <th>NAMA LENGKAP</th>
        <th>JENIS KELAMIN</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>ALAMAT DOMISILI</th>
        <th>EMAIL</th>
    </tr>
    @foreach($data_karyawan as $karyawan)
    <tr>
        <td>{{$karyawan->nip}}</td>
        <td>{{$karyawan->nm_lkp}}</td>
        <td>{{$karyawan->jk}}</td>
        <td>{{$karyawan->tmp_lahir}}</td>
        <td>{{$karyawan->tgl_lahir}}</td>
        <td>{{$karyawan->almt_domisili}}</td>
        <td>{{$karyawan->email}}</td>
    </tr>
    @endforeach
</table>