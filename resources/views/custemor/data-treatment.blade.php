@extends('dashboard.base')

@section('content')

<!-- Bootstrap Toasts Styles -->
<div class="card mb-4">
  <h3 class="card-header">Our Treatment</h3>
  <div class="row g-0">
    <div class="col p-4">
      <div class="text-light small fw-semibold mb-3">ENJOY YOUR CHOICE</div>
      <div class="toast-container">
        @foreach($treatment as $row)
        <div class="col-md">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img class="card-img card-img-left" src="{{ asset('storage/'.$row->gambar) }}" alt="Card image" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title"><strong>{{ $row->nama_treatment }}</strong></h3>
                  <strong>Dokter : {{ $row->dokter->name }}</strong>
                  <br>
                  <strong>Harga : {{ $row->harga }}</strong>
                  <p class="card-text">
                   <strong>About : </strong>
                  {{ $row->deskripsi }}
                  </p>
                </div>

              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection