 @extends('layouts.frontend')
 
@section('styles')
 <style>
     body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Noto Sans', sans-serif; letter-spacing: 0px; font-size: 14px; color: #2e3139; font-weight: 400; line-height: 26px; }
        h1, h2, h3, h4, h5, h6 { letter-spacing: 0px; font-weight: 400; color: #fe7865; margin: 0px 0px 15px 0px; font-family: 'Noto Sans', sans-serif; }
       
        p { margin: 0 0 20px; line-height: 1.8; }
        p:last-child { margin: 0px; }
        ul, ol { }
        a { text-decoration: none; color: #fe7865; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
        a:focus, a:hover { text-decoration: none; color: #0943c6; }
        
 .box { background-color: #fff; border-radius: 10px; border: 2px solid #fe7865; padding: 50px; }
        .box-title { margin-bottom: 30px; text-transform: uppercase; font-size: 26px; font-weight: 700; color: #fe7865; letter-spacing: 2px; }
         .checkoutBox{
             background: #fffaf6;
            margin-top:85px;
            width: 100%; 

        }
    </style>
 @section('content')
    
  <div class="checkoutBox">
<div class="container mt-25">
    <div class="text-center box">
        <h1 id="paymentStatus" class="box-title text-center {{ $status }}">{{ $statusMsg }}</h1>

        @if ($status == 'success')
        <div class="mt-5">
            <h4 class="product-title mt-10">Informații plată</h4>
            <p><b>Id Client:</b> {{ $client_id }}</p>
            <p><b>Sumă totală:</b> {{ $amount }} RON</p>
            <p><b>Status plată:</b> Plata a fost finalizată cu succes!</p>

            <h4 class="product-title mt-20">Informații client</h4>

            <p><b>Nume:</b> {{ $client_name }}</p>
   
    <p><b>Orasul:</b> {{ $city}}</p>
    <p><b>Judetul:</b> {{ $state }}</p>
    <p><b>Tara:</b> {{ $country }}</p> 
    <p><b>Codul Postal:</b> {{ $postal_code}}</p>
    <p><b>Adresa:</b> {{ $line1 }}</p>
</div> </p>


            <h4 class="product-title mt-20">Informații produs</h4>
            @foreach ($ordersArray as $order)
            <p><b>Produs:</b> {{ $order['name'] }}</p>
            <p><b>Cantitatea:</b> {{ $order['quantity'] }}</p>
            <p><b>Pret:</b> {{ $order['price'] }} RON/buc</p>
            @endforeach
        </div>
        @else
        <p class="mt-5">Poți afișa un mesaj de eroare sau oferi alte instrucțiuni</p>
        @endif

        <a href="/" class="main-btn mt-5">
            Înapoi Acasă</a>
    </div>
</div>

  </div>
@endsection

