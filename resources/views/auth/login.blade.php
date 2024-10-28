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
            <div class="col-md-6 col-lg-6" style="background-color: #ffffff; border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="text-center mb-2">
                   
                     <a class="navbar-brand mb-2" href="/">
                    <img src="assets/images/logo.png" alt="Logo" width=260 height=80>
                    </a> 
              </div>

                  <h3 class="fw-normal text-center mb-3 pb-3" style="letter-spacing: 1px;">Conectare</h3>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">E-mail</label>
                    <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Parolă</label>
                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                        <div class="row mb-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ține-mă minte') }}
                                    </label>
                                </div>
                            </div>
                        </div>
<div class="col-md-6 offset-md-4">
                  <div class="pt-1 mb-3">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Autentificare</button>
                  </div>
</div>
                  <a class="small text-muted" href="{{ route('password.request') }}">Ați uitat parola?</a>
                  <p class="pb-lg-2" style="color: #393f81;">Nu aveți încă cont? <a href="{{ route('register') }}" style="color: #FF4500;">Înregistrare</a></p>
               
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    
  </div>
</section>
@endsection
