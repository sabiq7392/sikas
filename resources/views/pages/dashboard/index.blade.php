@extends('master')
@section('content')
  <div id="dashboard" class="container d-grid gap-xl">
    <div class="d-flex gap-xl flex-wrap">
      @include('../../partials/cashier-app-system')
      @include('../../partials/recent-activity')
    </div>

    <section id="menu">
      <h3 tabindex="0">Menu</h3>
      <div class="d-flex gap-lg flex-wrap">
        <a href="/items">
          <span tabindex="0">Items</span>
          <img 
            src="{{ asset('images/product.png') }}" 
            alt="Menu Product"
          />
        </a>
        <a href="/admin">
          <span tabindex="0">Admin</span>
          <img 
            src="{{ asset('images/admin.png') }}" 
            alt="Menu Admin"
          />
        </a>
        <a href="/categories">
          <span tabindex="0">Categories</span>
          <img 
            src="{{ asset('images/categories.png') }}" 
            alt="Menu Categories"
          />
        </a>
      </div>
    </section>
  </div>
@endsection