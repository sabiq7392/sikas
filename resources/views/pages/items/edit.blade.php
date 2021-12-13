@extends('index')
@section('content')
  <form action="/items/detail/{{ $item->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="itemName">Items Name</label>
      <input 
        id="itemName" 
        name="item_name"
        type="text" 
        class="form-control" 
        placeholder="Makanan"
        value="{{ $item->name }}"
      />
    </div>
    <div class="form-group">
      <label for="itemCategory">Category</label>
      <select 
        id="itemCategory" 
        name="item_category" 
        class="form-control"
      >
        <option value="{{ $item->category_id }}">{{ $item->category_id }}</option>
      </select>
    </div>
    <div class="form-group">
      <label for="bio">Price Per Box</label>
      <input
        id="itemPricePerBox" 
        name="item_price_per_box"
        type="number"
        class="form-control" 
        value="{{ $item->price_per_box }}"
      />
    </div>
    <div class="form-group">
      <label for="item_stock_box">Stock Box</label>
      <input
        id="itemStockBox" 
        name="item_stock_box"
        type="number"
        class="form-control" 
        value="{{ $item->stock_box }}"
      />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection