@extends('layouts.app')

@section('title', 'Data Hjurnal')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel  Data Perkiraan</h6>
            {{-- Tambahkan tombol jika perlu --}}
            {{-- <a href="#" class="btn btn-sm btn-success">Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Induk</th>
                    <th>Level</th>
                    <th>Kelompok</th>
                    <th>Normal</th>
                    <th>Awal Debet</th>
                    <th>Awal Kredit</th>
                    <th>Mut Debet</th>
                    <th>Mut Kredit</th>
                    <th>Sisa Debet</th>
                    <th>Sisa Kredit</th>
                    <th>RL Debet</th>
                    <th>RL Kredit</th>
                    <th>NRC Debet</th>
                    <th>NRC Kredit</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                <tr>
                    <td>{{ $row->PerkiraanID }}</td>
                    <td>{{ $row->NomorPerkiraan }}</td>
                    <td>{{ $row->NamaPerkiraan }}</td>
                    <td>{{ $row->tipe }}</td>
                    <td>{{ $row->induk }}</td>
                    <td>{{ $row->level }}</td>
                    <td>{{ $row->Kelompok }}</td>
                    <td>{{ $row->normal }}</td>
                    <td>{{ number_format($row->awal_debet) }}</td>
                    <td>{{ number_format($row->awal_kredit) }}</td>
                    <td>{{ number_format($row->mut_debet) }}</td>
                    <td>{{ number_format($row->mut_kredit) }}</td>
                    <td>{{ number_format($row->sisa_debet) }}</td>
                    <td>{{ number_format($row->sisa_kredit) }}</td>
                    <td>{{ number_format($row->rl_debet) }}</td>
                    <td>{{ number_format($row->rl_kredit) }}</td>
                    <td>{{ number_format($row->nrc_debet) }}</td>
                    <td>{{ number_format($row->nrc_kredit) }}</td>
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
