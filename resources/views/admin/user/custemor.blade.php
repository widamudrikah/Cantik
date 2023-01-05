@extends('dashboard.base')

@section('content')

<div class="card">
<div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Custemor</h6>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama Custemor</th>
          <th>Email</th>
          <th>Waktu Bergabung</th>
          <!-- <th>Detail</th> -->
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
       @foreach($custemor as $row)
        <tr>
          <td>{{ $row->name }}</td>
          <td>{{ $row->email}}</td>
          <td>{{ $row->created_at }}</td>
          <!-- <td>
            <a href="#">
            <i class='bx bxs-user-detail' style='color:primary'  ></i>
            </a>
          </td> -->
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Striped Rows -->

@endsection