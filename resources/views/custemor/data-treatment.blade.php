@extends('dashboard.base')

@section('content')


<!-- Bootstrap Toasts Styles -->
<div class="card mb-4">
  <h3 class="card-header">Our Treatment</h3>
        @foreach($treatment as $row)
        <div class="col-md">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-5">
                <img class="card-img card-img-left p-5" src="{{ asset('storage/'.$row->gambar) }}" alt="Card image"/>
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h3 class="card-title"><strong>{{ $row->nama_treatment }}</strong></h3>
                  <strong>Dokter : {{ $row->dokter->name }}</strong>
                  <br>
                  <strong>Harga : {{ $row->harga }}</strong>
                  <p class="card-text mt-3">
                   <strong>About : </strong>
                  {!! $row->deskripsi !!}
                  </p>
                </div>

              </div>
            </div>
          </div>
          @endforeach
        </div>
</div>
@endsection