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
            href="/boxes/create" 
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
              <th class="text-center">Status</th>
              <th class="text-center">Code</th>
              <th class="text-center">Sender</th>
              <th class="text-center">Receiver</th>
              <th class="text-center">Date</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($boxes as $box)
              <tr id="{{ $box->id }}">
                <td class="text-center">{{ $box->status }}</td>
                <td class="text-center">{{ $box->id }}</td>
                <td>{{ $box->sender }}</td>
                <td>{{ $box->receiver }}</td>
                <td>{{ $box->created_at }}</td>
                <td class="text-center d-flex justify-content-center">
                  <a aria-label="edit" href="/boxes/{{ $box->id }}" class="text-primary">
                    <i class="bi bi-send-check-fill"></i>
                  </a>
                  <form action="/boxes/{{ $box->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" aria-label="delete">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td colspan="8">SIKAS 2021 STORAGE</td>
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


