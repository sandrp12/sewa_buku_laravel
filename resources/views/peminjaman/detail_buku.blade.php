@extends('layout.master')
@section('contents')
    <div class="container">
        <h4>Detail Peminjam</h4>
        <p>Kode Buku : {{ $data_buku->kode_buku }}</p>
        <p>Nama Buku : {{ $data_buku->judul_buku }}</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1 @endphp
                @foreach($data_buku->data_peminjam as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->nama_peminjam }}</td>
                </tr>
                @php $i++ @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection