@extends('layouts.app')

@section('title', 'Data Perkiraan')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel  Data Perkiraan</h6>
            {{-- Tambahkan tombol jika perlu --}}
            <a href="{{ route('tperkiraan.create') }}" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                <tr>
                    <th>No</th>
                    <th>NomorPerkiraan</th>
                    <th>NamaPerkiraan</th>
                    <th>Kelompok</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->NomorPerkiraan  }}</td>
                    <td>{{ $item->NamaPerkiraan }}</td>
                    <td>{{ $item->Kelompok }}</td>
                    <td>{{ $item->Keterangan }}</td>
                    <td class="d-flex gap-3">
                    <button type="button" class="btn btn-primary" style="margin-right: 15px;">edit</button>
                    <button type="button" class="btn btn-danger">delet</button>
                    </td>
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
