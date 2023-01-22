@extends('dashboard.base')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit</span> Status Transaksi
</h4>

<div class="card">

    <form action="{{ route('update.status', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <div>
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
                            <option value="">Pilih Status</option>
                            <option value="1">Pending</option>
                            <option value="2">Sukses</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
@endsection