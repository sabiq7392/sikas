@extends('index')
@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Detail Kategori</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Kategori</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
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
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5"><b>SIKAS Storage 2021</b></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Barang yang berkategori {{ $category->name }}</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Price</th>
            <th>Stok</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($category->item as $item)
          <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price_per_box }}</td>
            <td>{{ $item->stock_box }}</td>
            <td>
              <a href="/item/{{ $item->id }}" title="detail" class="btn btn-success">
                <i class="far fa-eye"></i>
              </a>
              <a href="/item/{{ $item->id }}/edit" title="edit" class="btn btn-warning">
                <i class="far fa-edit"></i>
              </a>
              <form action="/item/{{ $item->id }}" class="d-inline" method="post">
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