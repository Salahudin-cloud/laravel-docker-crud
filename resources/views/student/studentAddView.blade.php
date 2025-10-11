@extends('layouts.app')

@section('title', 'New Student')


@section('content')
    <div class="container">
        <a href="/" class="btn btn-success">Kembali</a>
        <h2 class="fw-bold pt-2">Tambah Mahasiswa</h2>
        <form action="{{  route('store') }}">
            @csrf
            <div class="mb-3">
                <label for="studentNumber" class="form-label">Nomor Mahasiswa</label>
                <input type="text" class="form-control" id="studentNumber">
            </div>
            <div class="mb-3">
                <label for="firstName" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="firstName">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" id="lastName">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Jenis Kelamin" id="gender">
                    <option selected>Pilih jenis kelamin</option>
                    <option value="MALE">Laki - Laki</option>
                    <option value="FEMALE">Perempuan</option>
                    <option value="OTHER">Lainya</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="phoneNumber">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address">
            </div>
            <div class="mb-3">
                <label for="enrollmentYear" class="form-label">Tahun Masuk</label>
                <input type="text" class="form-control" id="enrollmentYear">
            </div>
            <div class="mb-3">
                <label for="enrollmentYear" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="enrollmentYear">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
