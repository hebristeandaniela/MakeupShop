<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.admin')

@section('content')

    <h1>Administrare Makeup Shop - Magazin de machiaje</h1>
    <hr>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-orange elevation-1"><i class="fas fa-table"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Stocuri totale</span>
                    <span class="info-box-number">{{ number_format($totalStocks) }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-orange-dark elevation-1"><i class="fas fa-th-list"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Comenzi în așteptare</span>
                    <span class="info-box-number">{{ number_format($pendingOrders) }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-orange-light elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Vânzări totale astăzi</span>
                    <span class="info-box-number">{{ number_format($totalSalesToday) }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-orange-darked elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Clienți înregistrați</span>
                    <span class="info-box-number">{{ number_format($registeredClients) }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="tourCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner h-100">
                @foreach ($banners as $index => $banner)
                    <div class="carousel-item h-100 {{ $index == 0 ? 'active' : '' }}">
                        <img class="d-block w-100 h-100" style="object-fit: contain" src="{{ asset('assets/images/slider/' . $banner) }}" alt="">
                    </div>
                @endforeach
               
            </div>
            <a class="carousel-control-prev" href="#tourCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">înapoi</span>
            </a>
            <a class="carousel-control-next" href="#tourCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">înainte</span>
            </a>
        </div>
    </div>
@endsection
