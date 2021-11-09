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
                            <form method="post" action="{{route('verif.store')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" required="" autocomplete="off" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>NPM</label>
                                        <input type="number" name="npm" class="form-control" required="" autocomplete="off" placeholder="Masukkan NPM">
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <input type="text" name="jurusan" class="form-control" required="" autocomplete="off" placeholder="Masukkan Jurusan">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambah</button>
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