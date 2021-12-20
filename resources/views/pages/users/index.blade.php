@extends('master')
@section('content')
<div id="items" class="container">
  <div class="d-grid gap-xl bg-white radius-xl p-sm">
    <div class="card">
      <div class="card-header">
        <div class=" d-flex justify-content-between">
          <h3 class="text-dark">
            Show All {{ $title }}
          </h3>
        </div>
      </div>
      <div class="card-body">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif
        <table id="tableItems" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Status</th>
              <th class="text-center">Role</th>
              <th class="text-center">Name</th>
              <th class="text-center">Email</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr id="{{ $user->id }}">
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $user->status->name }}</td>
                <td>{{ $user->role->name }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-center d-flex justify-content-center">
                  <a aria-label="edit" href="/users/{{ $user->id }}/edit">
                    <i class="bi bi-pencil-fill"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td colspan="6">SISTORAGE 2021</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@push('data-table')
  @include('../../partials/data-table')
  <script>
    $(() => $("#tableItems").DataTable());
  </script>
@endpush


