@extends('dashboard.base')

@section('content')

<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">My Custemor</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamt</th>
          </tr>
        </thead>
        <tbody>
        @foreach($custemor as $row)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $row->nama }}</strong></td>
            <td>{{ $row->umur }} tahun</td>
            <td>{{ $row->alamat }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->

@endsection