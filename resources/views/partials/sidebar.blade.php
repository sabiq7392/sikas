<?php
  function setActive($url) {
    return str_contains(url()->current(), $url) ? 'active' : '';
  }
?>

<nav id="sidebar">
  <a href="/">
    <h1 class="brand">S<span id="brandLongName">IKAS</span></h1>
  </a>
  <div class="menu">
    <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">
      <i class="bi bi-speedometer"></i> 
      <span>Dashboard</span>
    </a>
    <a href="/cashiers" class="{{ setActive('cashiers') }}">
      <i class="bi bi-coin"></i> 
      <span>Cashiers</span>
    </a>
    <a href="/boxes" class="{{ setActive('boxes') }}">
      <i class="bi bi-truck"></i>
      <span>Boxes</span>
    </a>
    <a href="/items" class="{{ setActive('items') }}">
      <i class="bi bi-box-seam"></i> 
      <span>Items</span>
    </a>
    <a href="/categories" class="{{ setActive('categories') }}">
      <i class="bi bi-boxes"></i> 
      <span>Categories</span>
    </a>
    <a href="/users" class="{{ setActive('users') }}">
      <i class="bi bi-person-check"></i> 
      <span>Users</span>
    </a>
    <a href="/logout">
      <i class="bi bi-box-arrow-left"></i>
      <span>Logout</span>
    </a>
  </div>
</nav>

<button 
  id="minMaxSidebar"
  type="button" 
  aria-label="toggle minimize sidebar"
>
  <i class="bi bi-caret-left"></i>
</button>