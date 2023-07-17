@extends('layout.master')
@section('contents')
    <div class="container">
        <h4>Edit Data Buku</h4>

        @if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('buku.update', $buku->id) }}">
        @csrf
            <div class="form-group">
                <label for="">Kode Buku</label>
                <input type="text" name="kode_buku" readonly class="form-control" value="{{ $buku->kode_buku }} ">
            </div>
            <div class="form-group">
                <label for="">Judul Buku</label>
                <input type="text" name="judul_buku" class="form-control" value="{{ $buku->judul_buku }}">
            </div>
            <div class="form-group">
                <label for="">Jumlah Halaman</label>
                <input type="number" name="jumlah_halaman" min="0" class="form-control" value="{{ $buku->jumlah_halaman }}">
            </div>
            <div class="form-group">
                <label for="">ISBN</label><br>
                <input type="text" name="ISBN" class="form-control" value="{{ $buku->ISBN }}">
            </div>
            <div class="form-group">
                <label for="">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="{{ $buku->pengarang }}">
            </div>
            <div class="form-group">
                <?php
                    $tahun_terbit = $buku['tahun_terbit'];
                    $x = intval($tahun_terbit);
                    $already_selected_value = $x;
                    $tahun_awal = 2000;
                    print '<select name="tahun_terbit" class="form-control">';
                    foreach(range(date('Y', strtotime(date('Y', time()). ' + 625 day')), $tahun_awal) as $tahun_terbit){
                        print '<option value="'.$tahun_terbit.'"'.($tahun_terbit === $already_selected_value ? ' selected="selected"' 
                        : '').'>'.$tahun_terbit.'</option>';
                    }
                    print '</select>';
                ?>
            </div><br>
            <div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
