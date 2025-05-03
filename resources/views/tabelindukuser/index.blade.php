@extends('layouts.app')

@section('title', 'Data Djurnal')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Induk Users</h6>
            {{-- Tambahkan tombol jika perlu --}}
            {{-- <a href="#" class="btn btn-sm btn-success">Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>User ID</th>
                            <th>username </th>
                            <th>password</th>
                            <th>nama_lengkap</th>
                            <th>asal_kantor</th>
                            <th>kode_cu</th>
                            <th>email</th>
                            <th>leveluser</th>
                            <th>divisi</th>
                            <th>publish</th>
                            <th>tgldaftar</th>
                            <th>tgllogin</th>
                            <th>statuslogin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id_user  }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->asal_kantor }}</td>
                            <td>{{ $item->kode_cu }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->leveluser }}</td>
                            <td>{{ $item->divisi }}</td>
                            <td>{{ $item->publish }}</td>
                            <td>{{ $item->tgldaftar }}</td>
                            <td>{{ $item->tgllogin }}</td>
                            <td>{{ $item->statuslogin }}</td>
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
