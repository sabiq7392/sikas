@extends('index')
@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
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
          <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category_id }}</td>
            <td>{{ $item->price_per_box }}</td>
            <td>{{ $item->stock_box }}</td>
            <td>
              <a href="/items/edit/{{ $item->id }}" title="edit" class="btn btn-warning">
                <i class="far fa-edit"></i>
              </a>
              <a href="" title="delete" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
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