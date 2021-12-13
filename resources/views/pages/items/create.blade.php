@extends('index')
@section('content')
  <form action="/items" method="post">
    @csrf
    <div class="form-group">
      <label for="itemName">Items Name</label>
      <input 
        id="itemName" 
        name="item_name"
        type="text" 
        class="form-control" 
        placeholder="Makanan"
      />
    </div>
    <div class="form-group">
      <label for="itemCategory">Category</label>
      <select 
        id="itemCategory" 
        name="item_category" 
        class="form-control"
      >
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="itemPricePerBox">Price Per Box</label>
      <input
        id="itemPricePerBox" 
        name="item_price_per_box"
        type="number"
        class="form-control" 
      />
    </div>
    <div class="form-group">
      <label for="itemStockBox">Stock Box</label>
      <input
        id="itemStockBox" 
        name="item_stock_box"
        type="number"
        class="form-control" 
      />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection