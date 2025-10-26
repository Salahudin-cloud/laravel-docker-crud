@extends('layouts.app')

@section('title', 'Perbarui Jurusan')


@section('content')
    <div class="container">
        <a href="/department" class="btn btn-success">Kembali</a>
        <h2 class="fw-bold pt-2">Perbarui Jurusan</h2>
        <form action="{{  route('updateDepartment', $department->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="departmentCode" class="form-label">Kode Jurusan</label>
                <input type="text" class="form-control" id="departmentCode" name="code" value="{{ $department->code }}">
            </div>
            <div class="mb-3">
                <label for="departmentName" class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control" id="departmentName" name="name" value="{{ $department->name }}">
            </div>
            <div class="mb-3">
                <label for="departmentHead" class="form-label">Kepala Jurusan</label>
                <input type="text" class="form-control" id="departmentHead" name="head" value="{{ $department->head }}">
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
