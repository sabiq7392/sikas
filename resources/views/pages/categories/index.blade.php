@extends('index')
@section('content')
    
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Category</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Barang</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ count($category->item) }} Barang</td>
              <td>
                <a href="/category/{{ $category->id }}" title="detail" class="btn btn-success">
                  <i class="far fa-eye"></i>
                </a>
                <a href="/category/{{ $category->id }}/edit" title="edit" class="btn btn-warning">
                  <i class="far fa-edit"></i>
                </a>
                <form action="/category/{{ $category->id }}" class="d-inline" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5"><b>SIKAS Storage 2021</b></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

@endsection

@push('script')
  <script src="{{ asset('template/plugins/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>
@endpush