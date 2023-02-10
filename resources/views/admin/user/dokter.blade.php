@extends('dashboard.base')

@section('content')

<div class="card">
<div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
        <a href="{{ route('tambah-dokter') }}">
            <button type="button" class="btn btn-primary btn-sm">
                + Dokter
            </button>
        </a>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th width="10%">Foto</th>
          <th>Nama Dokter</th>
          <th>Email</th>
          <th>Waktu Bergabung</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($dokter as $row)
        <tr>
          <td>
            <img src="{{ asset('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" class="img-fluid">
          </td>
          <td>{{ $row->name }}</td>
          <td>{{ $row->email}}</td>
          <td>{{ $row->created_at }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit-dokter', $row->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Striped Rows -->

@endsection