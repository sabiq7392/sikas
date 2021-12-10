<!DOCTYPE html>
<html lang="en">
  @include('partials.head')
<body class="hold-transition sidebar-mini">
  
<div class="wrapper">
  @include('partials.navbar-top')
  @include('partials.sidebar-main')

  <div class="content-wrapper">
    @include('partials.header')
    
    <section class="content">
      @yield('content')
    </section>
  </div>
  @include('partials.footer')
</div>

@include('partials.scripts')
@stack('script')

</body>
</html>
