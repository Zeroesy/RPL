@extends('layouts.master')

@section('content')

<br><br><br>
<div class="container">
    <div class="my-2">
        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahlaporan">Add New</a><br>
    </div>
    <table  class="table table-bordered table-hover">
        <tr>
            <td>Keterangan</td>
            <td>Kategori</td>
            <td>Untuk</td>
            <td>AKSI</td>
        </tr>
            <tr>
                <td>Membuat laporan</td>
                <td>Laporan</td>
                <td>Karyawan</td>
                <td>
                <button type="button" class="btn btn-secondary">Lihat</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>

<div class="modal fade" id="tambahlaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="row mb-3">
            <label for="event" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        </div>
        <div class="row mb-3">
            <label for="date" class="col-sm-2 col-form-label">Kategori </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3">
        </div>
        </div>
        <div class="row mb-3">
            <label for="date" class="col-sm-2 col-form-label">Untuk </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3">
        </div>
        </div>
        </form>
      </div>
      <div class="modal-footer mx-auto">
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

@endsection