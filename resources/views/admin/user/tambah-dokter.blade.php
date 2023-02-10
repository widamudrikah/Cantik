@extends('dashboard.base')

@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tambah</span> Data Dokter
</h4>

<div class="card">
    <form action="{{ route('store-dokter')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="" aria-describedby="defaultFormControlHelp" />
                        @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="" aria-describedby="defaultFormControlHelp" />
                        @error('password')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" aria-describedby="defaultFormControlHelp" />
                        @error('email')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
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
                    <img id="frame" src="" class="img-fluid mt-3" width="40%" />

                </div>
            </div>

        </div>
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