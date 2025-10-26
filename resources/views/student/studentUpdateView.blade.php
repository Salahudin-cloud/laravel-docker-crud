@extends('layouts.app')

@section('title', 'Perbarui Mahasiswa')


@section('content')
    <div class="container">
        <a href="/" class="btn btn-success mb-3">Kembali</a>
        <h2 class="fw-bold pt-2 mb-4">Perbarui Mahasiswa</h2>

        <form action="{{ route('updateStudent', $student->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row g-3">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="studentNumber" class="form-label">Nomor Mahasiswa</label>
                        <input type="text" class="form-control" id="studentNumber" name="student_number"
                               autocomplete="off" value="{{ $student->student_number }}">
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" autocomplete="off"
                               value="{{ $student->first_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" autocomplete="off"
                               value="{{ $student->last_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender" name="gender">
                            <option disabled>Pilih jenis kelamin</option>
                            <option value="MALE" {{ $student->gender == 'MALE' ? 'selected' : '' }}>Laki - Laki</option>
                            <option value="FEMALE" {{ $student->gender == 'FEMALE' ? 'selected' : '' }}>Perempuan
                            </option>
                            <option value="OTHER" {{ $student->gender == 'OTHER' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <select name="department_id" class="form-select">
                        <option disabled>Pilih Jurusan</option>
                        @foreach ($departments as $department)
                            <option
                                value="{{ $department->id }}" {{ $student->department_id == $department->id ? 'selected' : '' }}>
                                {{ $department->code }} - {{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label for="date_birth" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="date_birth" name="date_of_birth" autocomplete="off"
                               value="{{ $student->date_of_birth }}">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off"
                               value="{{ $student->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phone_number" autocomplete="off"
                               value="{{ $student->phone_number }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address"
                                  rows="3">{{ old('address', $student->address) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="enrollmentYear" class="form-label">Tahun Masuk</label>
                        <input type="text" class="form-control" id="enrollmentYear" name="enrollment_year"
                               autocomplete="off" value="{{ $student->enrollment_year }}">
                    </div>

                </div>
            </div>

            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>

@endsection
