
 @extends('layouts.frontend')
 
@section('styles')
 <style>
         .checkoutBox{
            background: #fffaf6;
            margin-top:85px;
            width: 100%; 
            height: 100%;

        }
    </style>
 @section('content')
    
  <div class="checkoutBox">
<div class="container mt-35">
    <div class="text-center">
<h2 id="paymentStatus" class="{{ $status }}">{{ $statusMsg }}</h2>
        <a href="/" class="main-btn mt-5">
            Înapoi Acasă</a>
    </div>
</div>

  </div>
@endsection

