@extends('master')
@section('content')
<div class="row">
  <div class="col-lg-4">
    <div id="items">
      <div class="form-input bg-none">
        <div class="card">
          <h3>{{ $boxes->id }}</h3>
          @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
          @endif
          <form id="formInput" action="/boxes/{{ $boxes->id }}" method="post">
            @method('put')
            @csrf
            <div class="input-container">
              <input 
                id="name" 
                name="sender"
                type="text"
                class="outskirt-input inputsBoxes" 
                value="{{ $boxes->sender }}" required readonly>
              <label for="name" class="outskirt-label">
                Pengirim
              </label>
            </div>
            <div class="input-container">
              <input 
                id="name" 
                name="receiver"
                type="text"
                class="outskirt-input inputsBoxes" 
                value="{{ $boxes->receiver }}" required readonly>
              <label for="name" class="outskirt-label">
                Penerima
              </label>
            </div>
            <div class="input-container">
              <input 
                id="stockBox" 
                name="address"
                type="text"
                class="outskirt-input inputsBoxes" 
                value="{{ $boxes->address }}" required readonly>
              <label for="stockBox" class="outskirt-label">
                Alamat
              </label>
            </div>
            <div class="input-container">
              <input 
                id="pricePerBox" 
                name="telepon"
                type="number"
                class="outskirt-input inputsBoxes" 
                value="{{ $boxes->telepon }}" required readonly>
              <label for="pricePerBox" class="outskirt-label">
                Telepon
              </label>
            </div>
            <button type="submit" id="btnEditBox">Edit</button>
            <button type="submit" id="btnConfirmEditBox">Confirm</button>
            <button type="submit" id="btnCancelEditBox">Cancel</button>
            
          </form>
          <form action="/boxes/{{ $boxes->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger w-100">
              Delete
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8">
    
    <div class="row">
      <div class="card">
        <div class="card-body">
          <div class=" d-flex justify-content-between">
            <h3 class="text-dark">
              Data Barang
            </h3>
            <a href="" id="btnTambahBarang">
              <i class="bi bi-plus-circle"></i> Tambah Barang
            </a>
          </div>
          @if (session()->has('successDelete'))
          <div class="alert alert-success" role="alert">
            {{ session('successDelete') }}
          </div>
          @endif
          @if (session()->has('successCreate'))
          <div class="alert alert-success" role="alert">
            {{ session('successCreate') }}
          </div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kasir</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($boxes->item as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
                <td>{{ $item->value }} Unit</td>
                <td>Rp. {{ number_format($item->price, 2) }},-</td>
                <td>
                  <a href="/items/{{ $item->id }}/edit"><i class="bi bi-pencil-fill text-warning"></i></a>
                  <form action="/items/{{ $item->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-danger bg-none"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <td colspan="5">
                  <b>Total : </b> 
                </td>
                <td>Rp. {{ number_format($totalHarga, 2) }},-</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <div class="row" id="rowAddBarang">
      <div class="col-lg-8">
        <div id="items">
          <div class="form-input bg-none">
            <div class="card">
              <div class=" d-flex justify-content-between">
                <b class="text-dark">
                  Tambah Barang {{ $boxes->id }}
                </b>
                <a href="" id="btnCloseTambahBarang" class="text-danger">
                  <i class="bi bi-x-circle"></i>
                </a>
              </div>
              <form id="formInput" action="/items" method="post">
                @csrf
                <div class="input-container">
                  <input 
                    id="name" 
                    name="name"
                    type="text"
                    class="outskirt-input"
                  />
                  <label for="name" class="outskirt-label">
                    Nama Barang
                  </label>
                </div>
                <div class="input-container">
                  <select id="categories" name="category_id" class="outskirt-input">
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">
                        {{ $category->name }}
                      </option>
                    @endforeach
                  </select>
                  <label for="categories" class="outskirt-label">
                    Kategori
                  </label>
                </div>
                <div class="input-container">
                  <input 
                    id="price" 
                    name="price"
                    type="number"
                    class="outskirt-input" 
                  />
                  <label for="price" class="outskirt-label">
                    Harga
                  </label>
                </div>
                <div class="input-container">
                  <input 
                    id="value" 
                    name="value"
                    type="number"
                    class="outskirt-input" 
                  />
                  <label for="value" class="outskirt-label">
                    Jumlah
                  </label>
                </div>
                <input id="name" name="box_id" type="hidden" value="{{ $boxes->id }}"/>
                <button type="submit">Create</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  const rowAddBarang = $('#rowAddBarang')
  rowAddBarang.hide()
  
  const btnCloseTambahBarang = $('#btnCloseTambahBarang')
  btnCloseTambahBarang.on('click', function(e) {
    e.preventDefault()
    rowAddBarang.hide()
    btnTambahBarang.show()
  })

  const btnTambahBarang = $('#btnTambahBarang')
  btnTambahBarang.on('click', function(e) {
    e.preventDefault()
    rowAddBarang.show()
    btnTambahBarang.hide()
  })
  const btnCancelEditBox = $('#btnCancelEditBox')
  btnCancelEditBox.hide()

  const btnConfirmEditBox = $('#btnConfirmEditBox')
  btnConfirmEditBox.hide()

  const btnEditBox = $('#btnEditBox')
  btnEditBox.show()


  const inputsBoxes = $('.inputsBoxes')

  btnEditBox.on('click', function(e) {
    e.preventDefault()

    for(let i = 0; i < inputsBoxes.length; i++) {
      inputsBoxes[i].removeAttribute('readonly')
    }

    btnConfirmEditBox.show()
    btnCancelEditBox.show()
    btnEditBox.hide()
  })

  btnCancelEditBox.on('click', function(e) {
    e.preventDefault()

      inputsBoxes.attr('readonly', 'true')

    btnConfirmEditBox.hide()
    btnCancelEditBox.hide()
    btnEditBox.show()
  })

</script>
@endsection