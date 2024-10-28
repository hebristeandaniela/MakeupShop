@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #ffe8e5;">
  <div class="container py-5 h-100">
    <div class="col col-xl-10">
      <div class="card text-center" style="border-radius: 1rem;">
        
          

          <div  style="background-color: #ffffff; border-top-left-radius: 1rem; border-bottom-left-radius: 1rem; border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;">
            <div class="card-body p-4 p-lg-5 text-black">
              
              

                <h3 class="fw-normal text-center mb-2 pb-2" style="letter-spacing: 1px;">RESETARE PAROLĂ</h3>
                <p>Introduceți adresa de e-mail a contului dvs. Noi vă vom trimite un link pentru configurarea parolei.</p>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresa de e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="justify-content-center">
                                <button class="btn btn-dark btn-lg btn-block" type="submit">Trimitere</button>
                            </div>
                </div>
            </div>


                
              </form>
           
          </div>
        
      </div>
    </div>
  </div>
</section>
@endsection
