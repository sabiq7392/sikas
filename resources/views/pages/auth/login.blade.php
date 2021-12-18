@extends('master')
@section('auth')
  <main id="authContainer" class="d-flex h-100vh flex-wrap">
    <div class="greeting">
      <div class="container d-grid justify-content-center">
        <h1 tabindex="0">Selamat Datang <br> Sistem Kasir Online</h1>
        <img 
          src="{{ asset('images/welcome.png') }}" 
          alt="Selamat Datang Sistem Kasir Online"
          class="image-welcome"
        />
      </div>
    </div>
    <div class="form-input-auth">
      <div class="container d-flex justify-content-center">
        <div class="card">
          <div class="switch">
            <a href="/auth/login" class="login active">Login</a>
            <a href="/auth/register" class="register">Register</a>
          </div>
          <form id="formInput" action="" method="">
            <div class="input-container">
              <input 
                id="email" 
                name=""
                type="email"
                class="auth-input" 
                placeholder=""
              />
              <label for="email" class="auth-label">Email</label>
            </div>
            <div class="input-container">
              <input 
                id="password" 
                name=""
                type="password"
                class="auth-input" 
                placeholder=""
              />
              <label for="password" class="auth-label">Password</label>
              <button id="showHidePassword" aria-label="show password" type="button">
                <i class="bi bi-eye"></i>
              </button>
            </div>
            <button type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection
  