@extends('layouts.master')

@section('content')

<div class="position-absolute top-0 end-0" style="margin-top: 3%">
<h5>JADWAL PENTING<button type="button" class="btn btn-success"><i class="bi bi-plus"></i></button></h5>
</div>
<div class="dropdown position-absolute top-0 end-0" style="margin-top: 5%">
    Bulan
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Mei
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item">Mei</a></li>
        <li><a class="dropdown-item">Juni</a></li>
        <li><a class="dropdown-item">Juli</a></li>
    </ul>
</div>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 w-75">
            <div class="card-body">
                <h5 class="card-title">4 Mei 2022</h5>
                <p class="card-text">Rapat Besar</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button> 
                </small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 w-75">
            <div class="card-body">
                <h5 class="card-title">8 Mei 2022</h5>
                <p class="card-text">Hari Gajian</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button> 
                </small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 w-75">
            <div class="card-body">
                <h5 class="card-title">15 Mei 2022</h5>
                <p class="card-text">Party Perusahaan</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button> 
                </small>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection