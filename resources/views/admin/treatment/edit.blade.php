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
                
                <form action="{{ route('update.treatment', $treatment->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="nama_treatment" class="form-label ">Nama Treatment</label>
                        <input type="text" name="nama_treatment" value="{{ $treatment->nama_treatment }}" class="form-control" id="nama_treatment" placeholder="" aria-describedby="defaultFormControlHelp" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" value="{{ $treatment->harga }}" class="form-control" id="harga" placeholder="Harga" aria-describedby="defaultFormControlHelp" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="dokter_id" class="form-label">Dokter</label>
                        <select name="dokter_id" value="{{ $treatment->dokter_id }}" id="dokter_id" class="form-select @error('dokter_id') is-invalid @enderror">
                        @foreach($dokter as $dokter)
                        <option value="{{ $dokter->id }}" @if($dokter->id == $treatment->dokter_id) selected @endif>
                            {{ $dokter->name }}
                            @endforeach
                        </option>

                        </select>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="kategori_id" class="form-label">Kategori</label>
                        <select name="kategori_id" value="{{ $treatment->kategori_id }}" id="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror">
                        @foreach($kategori as $kategori)
                        <option value="{{ $kategori->id }}" @if($kategori->id == $treatment->kategori_id) selected @endif>
                            {{ $kategori->nama_kategori }}
                            @endforeach
                        </option>

                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3">{{ $treatment->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="gambar" class="form-label">Gambar</label>
                        <input name="gambar" value="{{$treatment->gambar}}" class="form-control" type="file" id="gambar">
                    </div>
                    <img class="mt-3" id="preview-image" src="{{asset('storage/' . $treatment->gambar)}}" alt="preview image" style="max-height: 250px;">
                </div>
            </div>
        </div>

        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
                </form>

            </div>

        </div>

    </div>

@endsection