@extends('layouts.master')

@section('title')
    Create Kelas
@endsection

@section('content')

<div class="container">
    <div class="main-content">
        <section class="section"><br>
            <div class="section-header">
                <h2 class="text-dark">Tambah Data Mahasiswa</h2>
            </div>
            <div class="section-body">
                <p class="section-lead">
                Halaman Tambah Data Mahasiswa
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <form method="post" action="{{route('verif.update', $verif->id)}}">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="{{$verif->nama}}" class="form-control" required="" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>NPM</label>
                                        <input type="number" name="npm" value="{{$verif->npm}}" class="form-control" required="" autocomplete="off" >
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <input type="text" name="jurusan" value="{{$verif->jurusan}}" class="form-control" required="" autocomplete="off" >
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning"><i class="fas fa-sync"></i>  Ubah</button>
                                        <a class="btn btn-primary" href="/verif"><i class="fas fa-times-circle"></i> Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection