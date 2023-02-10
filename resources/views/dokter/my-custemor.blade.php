@extends('dashboard.base')

@section('content')

<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">My Customer</h5>
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
            <td><strong>{{ $row->nama }}</strong></td>
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