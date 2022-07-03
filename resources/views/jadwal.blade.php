@extends('layouts.master')

@section('content')
<br><br><br>
<div class="pagination justify-content-end my-4" style="margin-right: 15%">
    <h5>JADWAL PENTING <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahjadwal"><i class="bi bi-plus"></i></button></h5>
</div>
<div class="pagination justify-content-end my-4" style="margin-right: 15%">
    <label class="fs-4">Bulan <label>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Mei
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item">Mei</a></li>
        <li><a class="dropdown-item">Juni</a></li>
        <li><a class="dropdown-item">Juli</a></li>
    </ul>
</div>
<div class="main">
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-left: 5%">
        <div class="col">
            <div class="card h-100 w-75">
            <div class="card-header">
                <h5 class="fs-4 text-center">4 Mei 2022</h5>
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title">4 Mei 2022</h5> -->
                <br>
                <p class="card-text fs-2 text-center">Rapat Besar</p>
                <br>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">
                    <button type="button" class="btn btn-warning">&nbsp;Edit&nbsp;</button>
                    <button type="button" class="btn btn-danger">Hapus</button> 
                </small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 w-75">
            <div class="card-header">
                <h5 class="fs-4 text-center">8 Mei 2022</h5>
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title">8 Mei 2022</h5> -->
                <br>
                <p class="card-text fs-2 text-center">Hari Gajian</p>
                <br>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">
                    <button type="button" class="btn btn-warning">&nbsp;Edit&nbsp;</button>
                    <button type="button" class="btn btn-danger">Hapus</button> 
                </small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 w-75">
            <div class="card-header">
                <h5 class="fs-4 text-center">15 Mei 2022</h5>
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title">15 Mei 2022</h5> -->
                <br>
                <p class="card-text fs-2 text-center">Party Perusahaan</p>
                <br>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">
                    <button type="button" class="btn btn-warning">&nbsp;Edit&nbsp;</button>
                    <button type="button" class="btn btn-danger">Hapus</button> 
                </small>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="tambahjadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="row mb-3">
            <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inputEmail3">
        </div>
        </div>
        <div class="row mb-3">
        <label for="event" class="col-sm-2 col-form-label">Event</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
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