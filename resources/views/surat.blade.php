@extends('layouts.master')

@section('content')

<br><br><br>
<div class="container">
    <a class="btn btn-success">Add New</a><br>
    <table  class="table table-bordered table-hover">
        <tr>
            <td>Keterangan</td>
            <td>File</td>
            <td>AKSI</td>
        </tr>
            <tr>
                <td>Surat Permohonan Gedung</td>
                <td>SPG.pdf</td>
                <td>
                <button type="button" class="btn btn-secondary">Lihat</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>

@endsection