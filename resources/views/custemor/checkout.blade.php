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
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div>
                            <label for="no_hp" class="form-label">Nomor HP</label>
                            <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="No HP" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div>
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" name="umur" class="form-control" id="umur" placeholder="Umur" aria-describedby="defaultFormControlHelp" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div>
                        <label for="treatment_id" class="form-label">Kategori</label>
                            <select name="treatment_id" id="treatment_id" class="form-select">
                                <option value="">Pilih Treatment</option>
                                @foreach($treatment as $row)
                                <option value="{{ $row->id }}" {{ old('treatment_id') == $row->id ? 'selected' : '' }}>{{ $row->nama_treatment }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" rows="3">{{old('alamat')}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                <label for="keluhan" class="form-label">Keluhan</label>
                <textarea name="keluhan" class="form-control" id="keluhan" rows="3">{{old('keluhan')}}</textarea>
            </div>
            </div>

            <div class="row">

            <div class="col-md-6">
                <div class="card-body">
                <label for="tanggal_reservasi" class="form-label">Tanggal Reservasi</label>
                <input type="text" name="tanggal_reservasi" class="form-control" id="tanggal_reservasi" placeholder="tanggal reservasi" aria-describedby="defaultFormControlHelp" />
                </div>
            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>

    </div>



@endsection