@extends('layouts.layout')

@section('title','rejestracja')

@section('additional')
<style>
.login {
    min-height: 100vh;
}

    .bg-image {
    background-image: url('https://source.unsplash.com/k3DmHnnAH3M/600x1200');  
    background-size: cover;
    background-position: center;
}

    .login-heading {
    font-weight: 300;
}

    .btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
}
</style>
@endsection

@section('content')
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Zarejestruj się!</h3>
      
                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-floating mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <label for="floatingInput">Login</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        <label for="floatingInput">E-mail</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <label for="floatingPassword">Hasło</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label for="floatingPassword">Potwierdź hasło</label>
                      </div>
      
                      <div class="d-grid">
                        <button class="btn btn-lg btn-warning btn-login text-uppercase fw-bold mb-2" type="submit">Zarejestruj się</button>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Masz już konto?</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
