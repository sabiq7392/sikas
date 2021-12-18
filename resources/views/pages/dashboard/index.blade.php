@extends('master')
@section('content')
  <div id="dashboard" class="container d-grid gap-xl">
    <div class="d-flex gap-xl flex-wrap">
      <article id="cashierApplicationSystem" class="card-bigest">
        <img 
          src="{{ asset('images/cashier-app-system.png') }}" 
          alt="Cashier Application System"
          class="cashier-app-system"
        />
        <div class="d-grid align-items-center">
          <div class="cashier-app-system-container">
            <h3 tabindex="0">Cashier <br> Application <br> System</h3>
            <a href="" class="go-to-cashier">
              <span>Go to cashier</span>
              <img 
                src="{{ asset('images/arrow-go-to-cashier.png') }}" 
                alt="Icon Arrow Go To Cashier"
                class="icon-arrow-go-to-cashier"
              />
            </a>
          </div>
        </div>
      </article>
      <article id="recentActivity">
        <form id="formSearch" action="">
          <input 
            id="inputSearch"
            name=""
            type="search" 
            placeholder="search recent activity"
          />
          <button id="buttonSearchSubmit" type="submit" aria-label="search activity">
            <i class="bi bi-search"></i>
          </button>
        </form>
        <section>
          <h3 tabindex="0">Recent Activity</h3>
          <div class="activity-container">
            <div class="activity">
              <p tabindex="0">Transaction 700432 was succesfull</p>
              <time tabindex="0">Today 16.00</time>
            </div>
            <div class="activity">
              <p tabindex="0">Transaction 700213 was failed</p>
              <time tabindex="0">Today 08.00</time>
            </div>
            <div class="activity">
              <p tabindex="0">Admin has login</p>
              <time tabindex="0">Today 07.00</time>
            </div>
            <div class="activity">
              <p tabindex="0">Admin has login</p>
              <time tabindex="0">Today 07.00</time>
            </div>
          </div>
        </section>
      </article>
    </div>

    <section id="menu">
      <h3 tabindex="0">Menu</h3>
      <div class="d-flex gap-lg flex-wrap">
        <a href="">
          <span tabindex="0">Product</span>
          <img 
            src="{{ asset('images/product.png') }}" 
            alt="Menu Product"
          />
        </a>
        <a href="">
          <span tabindex="0">Admin</span>
          <img 
            src="{{ asset('images/admin.png') }}" 
            alt="Menu Admin"
          />
        </a>
        <a href="">
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