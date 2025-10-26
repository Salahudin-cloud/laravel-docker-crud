@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')


@section('content')
    <div class="container">
        <a href="/" class="btn btn-success mb-3">Kembali</a>
        <h2 class="fw-bold pt-2 mb-4">Tambah Mahasiswa</h2>

        <form action="{{ route('saveStudent') }}" method="POST">
            @csrf
            <div class="row g-3">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="studentNumber" class="form-label">Nomor Mahasiswa</label>
                        <input type="text" class="form-control" id="studentNumber" name="student_number" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender" name="gender">
                            <option selected disabled>Pilih jenis kelamin</option>
                            <option value="MALE">Laki - Laki</option>
                            <option value="FEMALE">Perempuan</option>
                            <option value="OTHER">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Jurusan</label>
                        <select class="form-select" id="department" name="department_id">
                            <option selected disabled>Pilih jurusan</option>
                            @foreach($departments as $item)
                                <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date_birth" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="date_birth" name="date_of_birth" autocomplete="off">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phone_number" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3" style="resize:none"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="enrollmentYear" class="form-label">Tahun Masuk</label>
                        <input type="text" class="form-control" id="enrollmentYear" name="enrollment_year" autocomplete="off">
                    </div>

                </div>
            </div>

            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>

@endsection
