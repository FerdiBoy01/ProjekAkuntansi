@extends('layouts.app')

@section('title', 'Data Hjurnal')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel  Data Jurnal Umum</h6>
            {{-- Tambahkan tombol jika perlu --}}
            {{-- <a href="#" class="btn btn-sm btn-success">Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                <tr>
                    <th>No</th>
                    <th>nomor_jurnal</th>
                    <th>kode_jurnal</th>
                    <th>tanggal_selesai</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nomor_jurnal  }}</td>
                    <td>{{ $item->kode_jurnal }}</td>
                    <td>{{ $item->tanggal_selesai }}</td>
                </tr>
                @endforeach
                    </tbody>
                </table>

                {{-- Jika ingin pagination Laravel --}}
                <div class="mt-3">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
