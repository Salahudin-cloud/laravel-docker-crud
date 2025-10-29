@extends('layouts.app')

@section('title', 'Semua Jurusan')

@section('content')
    <a class="btn btn-success" href="/department/add">Tambah Jurusan</a>
    <h1 class="fw-bold pt-2">Data Jurusan</h1>

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
                <td colspan="5" class="text-center">Tidak ada data jurusan.</td>
            </tr>
        @else
            @foreach ($departments as $index => $department)
                <tr>
                    <td>{{ $departments->firstItem() + $index }}</td>
                    <td>{{ $department->code }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->head }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('toEditDepartmentForm', $department->id) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('deleteDepartment', $department->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus jurusan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <div class="mt-4">
        {{ $departments->links() }}
    </div>
@endsection
