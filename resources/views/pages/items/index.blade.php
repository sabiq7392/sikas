@extends('master')
@section('content')
  <div id="items" class="container d-grid gap-xl">
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
@endsection