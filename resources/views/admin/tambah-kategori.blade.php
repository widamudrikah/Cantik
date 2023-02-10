@extends('dashboard.base')

@section('content')

<!-- Basic Layout -->
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tambah Data Kategori</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama_kategori">Nama Kategori</label>
                        <input name="nama_kategori" value="{{old('nama_kategori')}}" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" placeholder="Nama Kategori" />
                        @error('nama_kategori')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="MB-3">
                        <label for="gambar" class="form-label">Foto</label>
                        <input name="gambar" value="{{old('gambar')}}" class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile" onchange="preview()">
                        @error('gambar')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <img id="frame" src="" class="img-fluid mt-3" width="30%"/>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "";
        }
    </script>
    @endsection