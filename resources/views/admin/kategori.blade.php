@extends('dashboard.base')

@section('content')
<!-- Bootstrap Dark Table -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Kategori Treatment</h6>
        <a href="{{ route('kategori.tambah') }}">
            <button type="button" class="btn btn-primary btn-sm">
                + Kategori
            </button>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(Session::get('Ok'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Ok') }}
            </div>
            @endif
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-light" style='color:#696cff'>
            <thead>

                <tr>
                    <th width="10%">Foto</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody class="table-border-bottom-0">
                @foreach($kategori as $row)
                <tr>
                <td>
            <img src="{{ asset('storage/'.$row->gambar) }}" alt="{{ $row->gambar }}" class="img-fluid">
          </td>
                    <td>
                        <strong>{{ $row->nama_kategori }}</strong>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route ('kategori.edit', $row->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <!-- <a class="dropdown-item" href=""><i class="bx bx-trash me-1"></i> Delete</a> -->
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
<!--/ Bootstrap Dark Table -->

@endsection