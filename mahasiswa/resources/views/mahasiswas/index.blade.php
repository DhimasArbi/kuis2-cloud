@extends('mahasiswas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-left my-8">
            <form action="{{ route('mahasiswas.index') }}" method="GET" role="search" id="searchForm">
                <div class="searchbar">
                    <input type="text" class="search_input" name="term" placeholder="Cari Mahasiswa..." id="term">
                    <a href="" onclick="document.getElementById('searchForm').submit()" class="search_icon"><i class="fas fa-search"></i></a>
                </div>

            </form>
        </div>
        <div class="float-right my-2">
            <a href="{{ route('mahasiswas.index') }}" class=" mt-1">
                <span class="input-group-btn">
                    <button class="btn btn-danger" type="button" title="Refresh page">
                        Refresh
                        <span class="fas fa-sync-alt"></span>
                    </button>
                </span>
            </a>
            <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No_handphone</th>
        <th>E-mail</th>
        <th>Tanggal Lahir</th>
        <th width="300px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswa)
    <tr>
        <td>{{ $Mahasiswa->nim }}</td>
        <td>{{ $Mahasiswa->nama }}</td>
        <td>{{ $Mahasiswa->kelas->nama_kelas }}</td>
        <td>{{ $Mahasiswa->jurusan }}</td>
        <td>{{ $Mahasiswa->no_handphone }}</td>
        <td>{{ $Mahasiswa->email }}</td>
        <td>{{ $Mahasiswa->tanggal_lahir }}</td>
        <td>
            <form action="{{ route('mahasiswas.destroy',$Mahasiswa->nim) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="{{ route('mahasiswas.nilai', $Mahasiswa->nim) }}">Nilai</a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex">
    {{ $mahasiswas->links() }}
</div>
@endsection