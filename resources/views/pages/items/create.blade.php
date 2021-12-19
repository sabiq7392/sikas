@extends('master')
@section('content')
<div id="items">
  <div class="form-input bg-none">
    <div class="card">
      <h3>Create Items</h3>
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
            Name
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
            Categories
          </label>
        </div>
        <div class="input-container">
          <input 
            id="stockBox" 
            name="stock_box"
            type="number"
            class="outskirt-input" 
          />
          <label for="stockBox" class="outskirt-label">
            Stock
          </label>
        </div>
        <div class="input-container">
          <input 
            id="pricePerBox" 
            name="price_per_box"
            type="number"
            class="outskirt-input" 
          />
          <label for="pricePerBox" class="outskirt-label">
            Price Per Box
          </label>
        </div>
        <button type="submit">Create</button>
      </form>
    </div>
  </div>
</div>
@endsection