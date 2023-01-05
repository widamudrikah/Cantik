@extends('dashboard.base')

@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tambah</span> Data Treatment
</h4>

<div class="card">

        <form action="{{ route('store.treatment') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div>
                            <label for="nama_treatment" class="form-label">Nama Treatment</label>
                            <input type="text" name="nama_treatment" class="form-control" id="nama_treatment" placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div>
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div>
                        <label for="dokter_id" class="form-label">Dokter</label>
                            <select id="dokter_id" name="dokter_id" class="form-select">
                                <option value="">Pilih Dokter</option>
                                @foreach($dokter as $row)
                            <option value="{{ $row->id }}" {{ old('dokter_id') == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div>
                        <label for="kategori_id" class="form-label">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-select">
                                <option value="">Pilih Kategori</option>
                                @foreach($kategori as $row)
                                <option value="{{ $row->id }}" {{ old('kategori_id') == $row->id ? 'selected' : '' }}>{{ $row->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3">{{old('deskripsi')}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="gambar" class="form-label">Foto Dokter</label>
                        <input name="gambar" value="{{old('gambar')}}" class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile" onchange="preview()">
                        @error('gambar')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <img id="frame" src="" class="img-fluid mt-3" />
                </div>
            </div>
            </div>

            <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>



@endsection