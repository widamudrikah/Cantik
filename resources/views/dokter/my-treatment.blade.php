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
            <th>Harga</th>
            <th>Kuota</th>
          </tr>
        </thead>
        <tbody>
        @foreach($treatment as $row)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $row->nama_treatment }}</strong></td>
            <td> Rp. {{ $row->harga }}</td>
            <td>{{ $row->kuota }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->


@endsection