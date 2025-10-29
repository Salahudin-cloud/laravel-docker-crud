@extends('layouts.app')

@section('title', 'Semua Mahasiswa')

@section('content')
    <a class="btn btn-success" href="/student/add">Tambah Mahasiswa</a>
    <h1 class="fw-bold pt-2">Data Mahasiswa</h1>
    <table class="table table-striped align-items-center">
        <thead class="border">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nomor Mahasiswa</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Nama Belakang</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Email</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        {{--            @php--}}
        {{--                dump($students);--}}
        {{--                exit;--}}

        {{--            @endphp--}}
        @if ($students->isEmpty())
            <tr>
                <td colspan="11" class="text-center">Tidak ada data mahasiswa.</td>
            </tr>
        @else
            @foreach ($students as $index => $student)
                <tr>
                    <td>{{ $student->firstItem() + $index}}</td>
                    <td>{{ $student->student_number }}</td>
                    <td>{{ $student->first_name  }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender == 'MALE' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone_number }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->enrollment_year }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('toUpdateStudentForm', $student->id)  }}" class="btn btn-sm btn-warning"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('deleteStudent', $student->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus mahasiswa ini?')">
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
        {{ $students->links() }}
    </div>
@endsection
