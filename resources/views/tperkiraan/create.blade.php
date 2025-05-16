@extends('layouts.app') {{-- Ganti dengan layout kamu jika berbeda --}}
@section('content')

<div class="container">
    <h2>Tambah Data Perkiraan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('tperkiraan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nomor Perkiraan</label>
            <input type="text" name="NomorPerkiraan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Perkiraan</label>
            <input type="text" name="NamaPerkiraan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kelompok</label>
            <input type="text" name="Kelompok" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="Keterangan" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('tperkiraan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
