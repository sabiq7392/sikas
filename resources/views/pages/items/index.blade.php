@extends('master')
@section('content')
<div id="items" class="container">
  <div class="d-grid gap-xl bg-white radius-xl p-sm">
    <div class="card">
      @include('../../partials/card-header')
      <div class="card-body">
        <table id="tableItems" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Name</th>
              <th class="text-center">Category</th>
              <th class="text-center">Stock</th>
              <th class="text-center">Price</th>
              <th class="text-center">More</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr id="{{ $item->id }}">
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
                <td>{{ $item->stock_box }}</td>
                <td>{{ $item->price_per_box }}</td>
                <td class="text-center d-flex justify-content-center">
                  <a aria-label="edit" href="/items/{{ $item->id }}/edit">
                    <i class="bi bi-pencil-fill"></i>
                  </a>
                  <form action="/items/{{ $item->id }}" method="POST">
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
              <td colspan="6">SIKAS 2021 STORAGE</td>
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


