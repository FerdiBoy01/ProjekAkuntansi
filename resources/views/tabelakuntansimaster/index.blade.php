@extends('layouts.app')

@section('title', 'Data Hjurnal')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel  Data Migrasi</h6>
            {{-- Tambahkan tombol jika perlu --}}
            {{-- <a href="#" class="btn btn-sm btn-success">Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                <tr>
                    <th>No</th>
                    <th>id_perkiraan </th>
                    <th>nomor_perkiraan</th>
                    <th>nama_perkiraan</th>
                    <th>tipe</th>
                    <th>induk</th>
                    <th>level</th>
                    <th>kelompok</th>
                    <th>normal</th>
                    <th>awal_debet</th>
                    <th>awal_kredit</th>
                    <th>mut_debet</th>
                    <th>mut_kredit</th>
                    <th>sisa_debet</th>
                    <th>sisa_kredit</th>
                    <th>rl_debet</th>
                    <th>rl_kredit</th>
                    <th>nrc_debet</th>
                    <th>nrc_kredit</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->id_perkiraan  }}</td>
                    <td>{{ $item->nomor_perkiraan }}</td>
                    <td>{{ $item->nama_perkiraan }}</td>
                    <td>{{ $item->tipe }}</td>
                    <td>{{ $item->induk }}</td>
                    <td>{{ $item->level }}</td>
                    <td>{{ $item->kelompok }}</td>
                    <td>{{ $item->normal }}</td>
                    <td>{{ $item->awal_debet }}</td>
                    <td>{{ $item->awal_kredit }}</td>
                    <td>{{ $item->mut_debet }}</td>
                    <td>{{ $item->mut_kredit }}</td>
                    <td>{{ $item->sisa_debet }}</td>
                    <td>{{ $item->sisa_kredit }}</td>
                    <td>{{ $item->rl_debet }}</td>
                    <td>{{ $item->rl_kredit }}</td>
                    <td>{{ $item->nrc_debet }}</td>
                    <td>{{ $item->nrc_kredit }}</td>
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
