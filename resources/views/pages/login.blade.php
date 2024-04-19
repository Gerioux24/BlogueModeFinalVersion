@extends('layouts.master')

@section('title')
    Login
@endsection


@section('contenu')

<section class="login-body">
    <div class="login-container">
        <form action="{{ url('/login') }}" method="post">

        @csrf
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>
        <div class="remember-forgot">


          <a href="#">Forgot password?</a>
        </div>

        <button type="submit"><a href="{{ url('/create') }}">Se connecter</a></button>
        <div class="register-link">
          <p>Don't have an account? <a href="#">Register</a></p>
        </div>
      </form>
    </div>
  </section>

@endsection
