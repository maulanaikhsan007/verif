@extends('layouts.master')

@section('title')
    Prabowo
@endsection

@section('content')

<div class="container">
    <div class="main-content">
        <section class="section"><br>
            <div class="section-header">
                <h2 class="text-dark">Data Mahasiswa</h2>
            </div>

            <div class="section-body">
                <p class="section-lead">
                Halaman Data Mahasiswa
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <a href="{{ route('verif.rizky')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                            </div>
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-primary">
                                        {{Session('success')}}
                                    </div> 
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table_kelas">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NPM</th>
                                                <th>Jurusan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($verif as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->npm}}</td>
                                                <td>{{$data->jurusan}}</td>
                                                <td>
                                                    <a href="{{route('verif.edit', $data->id)}}" class="btn btn-warning"><i class="fas fa-pen"></i>Edit</a>
                                                    <a href="{{route('verif.destroy', $data->id)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i>Hapus</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada data</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection