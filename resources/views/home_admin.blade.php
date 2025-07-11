@extends('layouts.admin_app')

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
        <h1 class="text-center mt-5">Mau Kemana Hari Ini?</h1>
        <div class="col-md-12 mb-4">
        </div>
        @foreach ($penerbangan as $penerbangan)
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/' . $penerbangan->gambar) }}" class="card-img-top" height="100">
                <div class="card-body">
                    <h5 class="card-title">{{ $penerbangan->nama_maskapai }}</h5>
                    <p class="card-text">Asal: {{ $penerbangan->asal }}</p>
                    <p class="card-text">Tujuan: {{ $penerbangan->tujuan }}</p>
                    <p class="card-text mb-3"><strong>Harga: </strong> Rp. {{number_format($penerbangan->harga)}}</p>
                    <a class="btn btn-warning btn-sm col-md-12 mb-2" style="font-size: larger" href="{{url('penerbangan/' .$penerbangan->id_penerbangan.'/edit')}}">Edit</a>
                    <form action="{{ route('penerbangan.destroy', $penerbangan->id_penerbangan) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger col-md-12">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
