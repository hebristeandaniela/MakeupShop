@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #ffe8e5;">
  <div class="container py-5 h-100">
    <div class="col col-xl-10">
      <div class="card" style="border-radius: 1rem;">
        <div class="row g-0">
          <div class="col-md-6 col-lg-6 d-none d-md-block">
            <img src="assets/images/login.jpg" height=650
              alt="login form" style="border-radius: 1rem 0 0 1rem;" />
          </div>
   

          <div class="col-md-5 col-lg-6" style="background-color: #ffffff; border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;">
            <div class="card-body p-4 p-lg-5 text-black">
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="text-center mb-2">
                  <a class="navbar-brand mb-2" href="/">
                    <img src="assets/images/logo.png" alt="Logo" width=260 height=80>
                  </a> 
                </div>

                <h3 class="fw-normal text-center mb-3 pb-3" style="letter-spacing: 1px;">Înregistrare</h3>

                <div class="mb-3 row">
                 <div class="col-md-12">
                     <label class="form-label" for="name">{{ __('Nume') }}</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="mb-3 row">
                  <div class="col-md-12">
                   <label for="email" class="form-label">{{ __('Adresa de e-mail') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                     @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="mb-3 row">
                  <div class="col-md-12">
                   <label for="password" class="form-label">{{ __('Parolă') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                     @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="mb-3 row">
                   <div class="col-md-12">
                   <label for="password-confirm" class="form-label">{{ __('Confirmă parola') }}</label>
                 
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      {{ __('Înregistrare') }}
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
