@extends('dashboard.base')

@section('content')

<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Bordered Table</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      @if(Session::get('Ok'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('Ok') }}
      </div>
      @endif
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Custemor Name</th>
            <th>Treatment</th>
            <th>Tanggal Reservasi</th>
            <th>keluhan</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($transaksi as $row)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $row->nama }}</strong></td>
            <td>{{ $row->treatment->nama_treatment }}</td>
            <td>{{ $row->tanggal_reservasi }}</td>
            <td>{{ $row->keluhan }}</td>
            <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit.status', $row->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
              </div>
            </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>



@endsection