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
                
                <form action="{{ route('update-dokter', $dokter->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{ $dokter->name }}" name="name" class="form-control" id="name" placeholder="" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Foto Mentor</label>
                        <div class="mb-3">
                        <img id="preview-image" src="{{asset('storage/' . $dokter->gambar)}}" alt="preview image" style="max-height: 250px;">
                        </div>

                        <input name="gambar" value="{{ $dokter->gambar }}" class="form-control" type="file" id="gambar">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

                </form>

            </div>

        </div>

    </div>

@endsection