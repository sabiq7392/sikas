<nav id="sidebar">
  <h1 class="brand">S<span id="brandLongName">IKAS</span></h1>
  <div class="menu">
    <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">
      <i class="bi bi-speedometer"></i> 
      <span>Dashboard</span>
    </a>
    <a href="">
      <i class="bi bi-coin"></i> 
      <span>Cashier</span>
    </a>
    <a href="/items" class="{{ Request::is('items') ? 'active' : '' }}">
      <i class="bi bi-box-seam"></i> 
      <span>Items</span>
    </a>
    <a href="">
      <i class="bi bi-person-check"></i> 
      <span>Admin</span>
    </a>
    <a href="">
      <i class="bi bi-boxes"></i> 
      <span>Categories</span>
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