@extends('layouts.app')

@section('title', 'Data Hjurnal')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel  H-Jurnal</h6>
            {{-- Tambahkan tombol jika perlu --}}
            {{-- <a href="#" class="btn btn-sm btn-success">Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                    <tr>
                        <th>NomorJurnal </th>
                        <th>JurnalKode</th>
                        <th>TanggalSelesai</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->NomorJurnal }}</td>
                        <td>{{ $item->JurnalKode }}</td>
                        <td>{{ $item->TanggalSelesai }}</td>
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
