@extends('mahasiswas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <br><br>
        <div class="text-center mt-2">
            <h1>KARTU HASIL STUDI (KHS)</h1>
        </div>
    </div>
</div>
<br><br>
<p><b>Nama</b> : {{$Mahasiswa->nama}}</p>
<p><b>NIM</b> : {{$Mahasiswa->nim}}</p>
<p><b>Kelas</b> : {{$Mahasiswa->kelas->nama_kelas}}</p>
<br>
<table class="table table-bordered">
    <tr>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>
    @foreach ($Mahasiswa->matakuliah as $mhs)
    <tr>
        <td>{{ $mhs->nama_matkul }}</td>
        <td>{{ $mhs->sks }}</td>
        <td>{{ $mhs->semester }}</td>
        <td>{{ $mhs->pivot->nilai}}</td>

    </tr>
    @endforeach
</table>
@endsection