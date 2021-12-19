@extends('master')
@section('auth')
<div id="authContainer" class="d-flex h-100vh flex-wrap">
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
  <div class="form-input">
    <div class="container d-flex justify-content-center">
      <div class="card">
        <div class="switch">
          <a href="/auth/login" class="login">Login</a>
          <a href="/auth/register" class="register active">Register</a>
        </div>
        <form id="formInput" action="" method="">
          <div class="input-container">
            <input 
              id="username" 
              name=""
              type="text"
              class="outskirt-input" 
              placeholder=""
            />
            <label for="username" class="outskirt-label">
              Username
            </label>
          </div>
          <div class="input-container">
            <input 
              id="email" 
              name=""
              type="email"
              class="outskirt-input" 
              placeholder=""
            />
            <label for="email" class="outskirt-label">
              Email
            </label>
          </div>
          <div class="input-container">
            <input 
              id="password" 
              name=""
              type="password"
              class="outskirt-input" 
              placeholder=""
            />
            <label for="password" class="outskirt-label">
              Password
            </label>
          </div>
          <div class="input-container">
            <input 
              id="confirm-password" 
              name=""
              type="password"
              class="outskirt-input" 
              placeholder=""
            />
            <label for="confirm-password" class="outskirt-label">
              Confirm Password
            </label>
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection