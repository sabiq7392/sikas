@extends('master')
@section('content')
<div id="categories" class="container">
  <div class="d-grid gap-xl bg-white radius-xl p-sm">
    <div class="card">
      @include('../../partials/card-header')
      <div class="card-body">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif
        
        <table id="tableCategories" class="table table-bordered table-striped our-table">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Name</th>
              <th class="text-center">More</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr id="{{ $category->id }}">
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-center d-flex justify-content-center">
                  <a href="/categories/{{ $category->id }}/edit" aria-label="edit">
                    <i class="bi bi-pencil-fill"></i>
                  </a>
                  <form action="/categories/{{ $category->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button aria-label="delete">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3">SIKAS 2021 STORAGE</td>
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
    $(() => $("#tableCategories").DataTable())
  </script>
@endpush