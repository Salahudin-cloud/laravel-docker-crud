@extends('layouts.app')

@section('title', 'Tambah Jurusan')


@section('content')
    <div class="container">
        <a href="/department" class="btn btn-success">Kembali</a>
        <h2 class="fw-bold pt-2">Tambah Jurusan</h2>
        <form action="{{  route('saveDepartment') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="departmentCode" class="form-label">Kode Jurusan</label>
                <input type="text" class="form-control" id="departmentCode" name="code">
            </div>
            <div class="mb-3">
                <label for="departmentName" class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control" id="departmentName" name="name">
            </div>
            <div class="mb-3">
                <label for="departmentHead" class="form-label">Kepala Jurusan</label>
                <input type="text" class="form-control" id="departmentHead" name="head">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
