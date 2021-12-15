<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Login | Sikas</title>

  <link rel="stylesheet" href="{{ asset('assets/styles/css/index.css') }}">
</head>
<body>

  <div class="auth-container">
    <div class="greeting">
      <div>
        <h1>Selamat Datang <br> Sistem Kasir Online</h1>
        <img src="{{ asset('assets/images/welcome.png') }}" alt="Selamat Datang Sistem Kasir Online">
      </div>
    </div>
    <div class="form-input-auth">
      {{-- style="background-image: url('{{ asset('assets/images/wave-1.png') }}')" --}}
      <div class="card" >
        <div class="switch">
          <button class="active" title="login">Login</button>
          <button title="register">Register</button>
        </div>
        <form action="">
          <div class="input-container">
            <input id="username" class="auth-input" type="text">
            <label for="username" class="auth-label" >Username</label>
          </div>
          <div class="input-container">
            <input id="password" class="auth-input" type="password">
            <label for="password" class="auth-label">Password</label>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="{{ asset('assets/scripts/auth-input-label.js') }}"></script>
</body>
</html>