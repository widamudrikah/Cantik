@extends('dashboard.base')

@section('content')

<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Succes Job</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Custemor Name</th>
            <th>Treatment</th>
            <th>Tanggal Reservasi</th>
            <th>keluhan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($transaksi as $row)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $row->nama }}</strong></td>
            <td>{{ $row->treatment->nama_treatment }}</td>
            <td>{{ $row->tanggal_reservasi }}</td>
            <td>{{ $row->keluhan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>



@endsection