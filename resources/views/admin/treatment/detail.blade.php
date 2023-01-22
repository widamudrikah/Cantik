@extends('dashboard.base')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">{{ $treatment->nama_treatment }}</h6>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/'.$treatment->gambar) }}" alt="{{ $treatment->nama_treatment }}" class="img-fluid">
                </div>
                <div class="col-md-6 ">
                    <h5 class="card-title"><strong> Treatment : {{ $treatment->nama_treatment }}</strong></h5>
                    <h6 class="card-subtitle mb-3 text-muted">Dokter: {{ $treatment->dokter->name }}</h6>
                    <h6 class="card-subtitle mb-3 text-muted">Kategori: {{ $treatment->kategori->nama_kategori }}</h6>
                    <h6 class="card-subtitle mb-3 text-muted">Harga: Rp.{{ $treatment->harga }}</h6>
                    <h6 class="card-subtitle mb-3 text-muted">Kuota: {{ $treatment->kuota }}</h6>
                    <p class="card-text">Deskripsi : {!! $treatment->deskripsi !!}</p>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection