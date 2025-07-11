@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/aset/banner.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/aset/banner.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/aset/banner.jpg" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <h1 class="text-center mt-5">Mau Kemana Hari Ini?</h1>
        </div>
        @foreach ($penerbangan as $penerbangan)
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/' . $penerbangan->gambar) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $penerbangan->nama_maskapai }}</h5>
                    <p class="card-text">Asal: {{ $penerbangan->asal }}</p>
                    <p class="card-text">Tujuan: {{ $penerbangan->tujuan }}</p>
                    <p class="card-text mb-3"><strong>Harga: </strong> Rp. {{number_format($penerbangan->harga)}}</p>
                    <a href="{{ url('checkout') }}/{{ $penerbangan->id_penerbangan }}" class="btn btn-primary hover-zoom">Checkout</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
