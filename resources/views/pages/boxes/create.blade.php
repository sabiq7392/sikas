@extends('master')
@section('content')
<div id="items">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-5">
        <div class="form-input bg-none m-auto">
          <div class="card">
            <h3>Add {{ $title }}</h3>
            <form id="formInput" action="/items" method="post">
              @csrf
              <div class="input-container">
                <input 
                  id="name" 
                  name="name"
                  type="text"
                  class="outskirt-input inputBarang" 
                />
                <label for="name" class="outskirt-label">
                  Name
                </label>
                <small class="inputTextDanger text-danger"></small>
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
                  Categories
                </label>
              </div>
              <div class="input-container">
                <input 
                  id="stockBox" 
                  name="price"
                  type="number"
                  class="outskirt-input inputBarang" 
                />
                <label for="stockBox" class="outskirt-label">
                  Price
                </label>
                <small class="inputTextDanger text-danger"></small>
              </div>
              <div class="input-container">
                <input 
                  id="pricePerBox" 
                  name="value"
                  type="number"
                  class="outskirt-input inputBarang" 
                />
                <label for="pricePerBox" class="outskirt-label">
                  Total
                </label>
                <small class="inputTextDanger text-danger"></small>
              </div>
              <button type="submit" id="btnTambahBarang">Add</button>
            </form>
          </div>
        </div>
      </div>
      {{-- kolom kanan --}}
    
    <div class="col-lg-7" id="columnKanan">
      <div class="card">
        <div class="card-header"><b>Data Barang</b></div>

        <form action="/boxes" method="post" id="formAddBoxes">
          @csrf
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody id="tBody">
                
              </tbody>
            </table>
          </div>
          <div class="card">
            <div class="form-input bg-none">
              <div class="card">
                <h3>Tambah Box</h3>
                <div class="mb-3">
                  <label for="sender" class="form-label">Pengirim</label>
                  <input type="text" class="form-control boxesInputs" id="sender" name="sender" placeholder="Pengirim">
                  <small class="inputBoxesTextDanger text-danger"></small>
                </div>
                <div class="mb-3">
                  <label for="receiver" class="form-label">Penerima</label>
                  <input type="text" class="form-control boxesInputs" id="receiver" name="receiver" placeholder="Penerima">
                  <small class="inputBoxesTextDanger text-danger"></small>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Alamat</label>
                  <input type="text" class="form-control boxesInputs" id="address" name="address" placeholder="Alamat">
                  <small class="inputBoxesTextDanger text-danger"></small>
                </div>
                <div class="mb-3">
                  <label for="telepon" class="form-label">Telepon</label>
                  <input type="text" class="form-control boxesInputs" id="telepon" name="telepon" placeholder="Telepon">
                  <small class="inputBoxesTextDanger text-danger"></small>
                </div>
                <button type="submit" class="btn btn-primary" id="btnTambahBoxes">Tambah Box</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>
<script 
  src="https://code.jquery.com/jquery-3.6.0.min.js" 
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
  crossorigin="anonymous">
</script>
<script>

$(document).ready(function() {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    const boxesInputs = $('.boxesInputs');
    const btnTambahBoxes = $('#btnTambahBoxes');
    const inputBoxesTextDanger = $('.inputBoxesTextDanger');
    
    btnTambahBoxes.on('click', function(e) {
      e.preventDefault()

      for(var j = 0; j < boxesInputs.length; j++) {
        if (boxesInputs[j].value === '') {
          inputBoxesTextDanger[j].innerHTML = "Please fillout this field";
          
        } else {
          e.preventDefault()
          inputBoxesTextDanger[j].innerHTML = "";
        }

        if(j === 3) {
          if (boxesInputs[0].value === '' || boxesInputs[1].value === '' || boxesInputs[2].value === '' || boxesInputs[3].value === '') {
              // save
          } else{
            $(this).closest('#formAddBoxes').submit()
          }
        }
      }
    })

    const tBody = $('#tBody')
    const columnKanan = $('#columnKanan')
    columnKanan.hide()
    const btnTambahBarang = $('#btnTambahBarang')
    btnTambahBarang.on('click', function(e) {
      e.preventDefault()
      
      const allInputs = $('.inputBarang')
      const inputTextDanger  = $('.inputTextDanger')
      for(var i = 0; i < allInputs.length; i++) {
        if (allInputs[i].value === '') {
          inputTextDanger[i].innerHTML = "Please fillout this field";
          
        } else {
          e.preventDefault()
          inputTextDanger[i].innerHTML = "";
        }

        if(i === 2) {
          if (allInputs[0].value === '' || allInputs[1].value === '' || allInputs[2].value === '') {
              // save
          } else {



            const data_cart = {
              namaBarang: $("input[name='name']").val(),
              kategoriBarang: $("select[name='category_id']").val(),
              hargaBarang: $("input[name='price']").val(),
              jumlahBarang: $("input[name='value']").val(),
            }
            const urls = '/kolom?name=' + $("input[name='name']").val() + '&category_id=' + $("select[name='category_id']").val() + '&price=' + $("input[name='price']").val() + '&value=' + $("input[name='value']").val()
            // AJAX
            $.ajax({
              type: "GET",
              url: urls,
              data: data_cart,
              success: function(data) {
                  var parsingHTML = $.parseHTML(data)

                  $("input[name='name']").val('')
                  $("input[name='price']").val('')
                  $("input[name='value']").val('')

                  columnKanan.show()
                  tBody.append(parsingHTML[0]);
                  for(let i = 0; i < allInputs.length; i++) {
                    inputTextDanger[i].innerHTML = '';
                  }
              }
            })
          }
        }
      }
    })

    
    $(document).on('click', '#btnDeleteRow', function(e) {
      e.preventDefault()
      $(this).closest('.row-keranjang').remove();
      if (tBody.children().length == 0) {
        columnKanan.hide();
      }
    })
})

</script>
@endsection