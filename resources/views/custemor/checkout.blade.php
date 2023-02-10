@extends('dashboard.base')

@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Checkout</span> Treatment
</h4>

<div class="card">

    <form action="{{ route('checkout.custemor') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="" aria-describedby="defaultFormControlHelp" />
                        @error('nama')
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
                        <label for="no_hp" class="form-label">Nomor HP</label>
                        <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No HP" aria-describedby="defaultFormControlHelp" />
                        @error('no_hp')
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
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Umur" aria-describedby="defaultFormControlHelp" />
                        @error('umur')
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
                        <label for="treatment_id" class="form-label">Treatment</label>
                        <select name="treatment_id" id="treatment_id" class="form-select @error('treatment_id') is-invalid @enderror">
                            <option value="">Pilih Treatment</option>
                            @foreach($treatment as $row)
                            <option value="{{ $row->id }}" {{ old('treatment_id') == $row->id ? 'selected' : '' }}>{{ $row->nama_treatment }}</option>
                            @endforeach
                        </select>
                        @error('treatment_id')
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
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3">{{old('alamat')}}</textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <label for="keluhan" class="form-label">Note</label>
                    <textarea name="keluhan" class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" rows="3">{{old('keluhan')}}</textarea>
                    @error('keluhan')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="card-body">
                        <label for="tanggal_reservasi" class="form-label">Tanggal Reservasi</label>
                        <input type="date" name="tanggal_reservasi" class="form-control @error('tanggal_reservasi') is-invalid @enderror" id="html5-date-input" placeholder="tanggal reservasi" aria-describedby="defaultFormControlHelp" />
                        @error('tanggal_reservasi')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Checkout</button>
                </div>
            </div>
    </form>
</div>

@endsection