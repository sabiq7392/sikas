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
          <a 
            id="goToAddForm" 
            href="/items/create" 
            title="add item"
          >
          <i class="bi bi-plus-circle"></i>
          Add {{ $title }} 
        </a>
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
              <th class="text-center">Name</th>
              <th class="text-center">Kategori</th>
              <th class="text-center">Harga</th>
              <th class="text-center">Jumlah</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr id="{{ $item->id }}">
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
                <td>Rp. {{ number_format($item->price, 2) }},-</td>
                <td>{{ $item->value }} Unit</td>
                <td class="text-center d-flex justify-content-center">
                  <a aria-label="edit" href="/boxes/{{ $item->box_id }}">
                    <i class="bi bi-eye text-primary"></i>
                  </a>
                  <a aria-label="edit" href="/items/{{ $item->id }}/edit">
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


