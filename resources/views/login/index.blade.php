@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-4">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-4 fw-normal text-center">Please login</h1>

            @if (session('register'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('register') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @elseif (session('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>{{ session('failed') }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Don't have an account? <a href="/register" class="text-decoration-none">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection