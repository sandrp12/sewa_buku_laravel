@extends('layout.master')
@section('contents')
    <div class="container">
        <h4>Edit Data Peminjam</h4>
        <form method="POST" action="{{ route('data_peminjam.update', $peminjam->id) }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="">Kode Peminjam</label>
                <input type="text" name="kode_peminjam" readonly class="form-control" value="{{ $peminjam->kode_peminjam }} ">
            </div>
            <div class="form-group">
                <label for="">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" value="{{ $peminjam->nama_peminjam }}">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label><br>
                <select name="id_jenis_kelamin" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    @foreach ($list_jenis_kelamin as $key => $value)
                    <option value="{{ $key }}" {{$peminjam->id_jenis_kelamin == $key ? 'selected' : ''}}>
                        {{ $value }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $peminjam->tanggal_lahir }}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label><br>
                <textarea name="alamat" id="" cols="148" rows="3">{{ $peminjam->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="" class="form-control" value="{{ $peminjam->pekerjaan }}">
            </div>
            <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" name="nomor_telepon" id="" class="form-control" value="{{ $peminjam->nomor_telepon }}">
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control" value="{{ $peminjam->foto }}">
            </div><br>
            <div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
