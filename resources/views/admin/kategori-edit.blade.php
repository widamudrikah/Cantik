@extends('dashboard.base')

@section('content')

<!-- Basic Layout -->
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Silahkan isi data dengan lengkap !</h5>
            </div>

            <div class="card-body">
                
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="nama_kategori">Nama Kategori</label>
                        <input name="nama_kategori" value="{{ $kategori->nama_kategori}}" type="text" class="form-control" id="nama_kategori" placeholder="Nama Kategori" />
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <div class="mb-3">
                        <img id="preview-image" src="{{asset('storage/' . $kategori->gambar)}}" alt="preview image" style="max-height: 250px;">
                        </div>
                        <input name="gambar" value="{{ $kategori->gambar }}" class="form-control" type="file" id="gambar" placeholder="Pilih Gambar">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

                </form>

            </div>

        </div>

    </div>

    @endsection

