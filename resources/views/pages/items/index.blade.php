@extends('master')
@section('content')
  <div id="items" class="container d-grid gap-xl">
    <div class="d-flex gap-xl flex-wrap">
      <article class="card-bigest">
        <h3>Chart Product</h3>
      </article>
      <article id="recentActivity">
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
    <form id="formSearch" action="">
      <input 
        id="inputSearch"
        name=""
        type="search" 
        placeholder="search items"
      />
      <button id="buttonSearchSubmit" type="submit" aria-label="search activity">
        <i class="bi bi-search"></i>
      </button>
    </form>
  </div>
@endsection