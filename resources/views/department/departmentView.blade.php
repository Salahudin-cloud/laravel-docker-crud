@extends('layouts.app')

@section('title', 'Semua Jurusan')

@section('content')
    <a class="btn btn-success" href="/department/add">Tambah Jurusan</a>
    <h1 class="fw-bold pt-2">Data Mahasiswa</h1>
    <table class="table table-striped align-items-center">
        <thead class="border">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Jurusan</th>
            <th scope="col">Nama Jurusan</th>
            <th scope="col">Kepala Jurusan</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @if ($departments->isEmpty())
            <tr>
                <td colspan="11" class="text-center">Tidak ada data jurusan.</td>
            </tr>
        @else
            @foreach ($departments as $department)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $department->code }}</td>
                    <td>{{ $department->name  }}</td>
                    <td>{{ $department->head }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ $department->id  }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ $department->id  }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
