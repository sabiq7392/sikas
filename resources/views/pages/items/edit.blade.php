@extends('master')
@section('content')
<div id="items">
  <div class="form-input bg-none">
    <div class="card">
      <h3>Edit Items</h3>
      <form id="formInput" action="/items/{{ $item->id }}" method="post">
        @csrf
        @method('put')
        <div class="input-container">
          <input 
            id="name" 
            name="name"
            type="text"
            class="outskirt-input" 
            value="{{ $item->name }}"
          />
          <label for="name" class="outskirt-label">
            Name
          </label>
        </div>
        <div class="input-container">
          <select id="categories" name="category_id" class="outskirt-input">
            @foreach ($categories as $category)
              @if ($category->id == $item->category_id)
                <option value="{{ $item->category_id }}" selected>
                  {{ $item->category->name }}
                </option>
              @else
                <option value="{{ $category->id }}">
                  {{ $category->name }}
                </option>
              @endif
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
            value="{{ $item->stock_box }}"
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
            value="{{ $item->price_per_box }}"
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