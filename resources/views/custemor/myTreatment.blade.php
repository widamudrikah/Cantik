@extends('dashboard.base')

@section('content')

<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">My Treatment</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Treatment</th>
            <th>Nama Custemor</th>
            <th>Kode Transaksi</th>
            <th>Jumlah Bayar</th>
            <th>Reservasi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $row)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $row->treatment->nama_treatment }}</strong></td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->kode_transaksi }}</td>
            <td>
             Rp.{{ $row->treatment->harga }}
            </td>
            <td>{{ $row->tanggal_reservasi }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->

@endsection