@extends('index')
@section('content')
    
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Items</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Price Per Box</th>
            <th>Stock Box</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->category_id }}</td>
              <td>{{ $item->price_per_box }}</td>
              <td>{{ $item->stock_box }}</td>
              <td>
                <a href="/items/detail/{{ $item->id }}" title="detail" class="btn btn-success">
                  <i class="far fa-eye"></i>
                </a>
                <a href="/items/edit/{{ $item->id }}" title="edit" class="btn btn-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="" title="delete" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
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