@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <h1 class="text-center mt-5">Edit Maskapai</h1>
        </div>
    </div>

    <form method="POST" action="{{ route('penerbangan.update', $data->id_penerbangan) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="gambar" class="form-label">Gambar:</label>
                <div>
                    @if($data->gambar)
                        <img src="{{ asset('images/' . $data->gambar) }}" alt="Gambar Maskapai Saat Ini" style="max-width: 150px; height: auto; margin-bottom: 10px; border-radius: 5px;">
                    @endif
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama_maskapai" class="form-label">Nama Maskapai:</label>
                <div>
                    <input type="text" class="form-control @error('nama_maskapai') is-invalid @enderror" name="nama_maskapai" id="nama_maskapai" placeholder="Masukkan nama maskapai" value="{{ old('nama_maskapai', $data->nama_maskapai) }}" required>
                    @error('nama_maskapai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nomor_maskapai" class="form-label">Nomor Maskapai:</label>
                <div>
                    <input type="number" class="form-control @error('nomor_maskapai') is-invalid @enderror" name="nomor_maskapai" id="nomor_maskapai" placeholder="Masukkan nomor maskapai" value="{{ old('nomor_maskapai', $data->nomor_maskapai) }}" required>
                    @error('nomor_maskapai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="asal" class="form-label">Asal:</label>
                <div>
                    <input type="text" class="form-control @error('asal') is-invalid @enderror" name="asal" id="asal" placeholder="Masukkan Asal penerbangan" value="{{ old('asal', $data->asal) }}" required>
                    @error('asal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tujuan" class="form-label">Tujuan:</label>
                <div>
                    <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" id="tujuan" placeholder="Masukkan Tujuan Keberangkatan" value="{{ old('tujuan', $data->tujuan) }}" required>
                    @error('tujuan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="waktu_keberangkatan" class="form-label">Waktu Keberangkatan:</label>
                <div>
                    <input type="date" class="form-control @error('waktu_keberangkatan') is-invalid @enderror" name="waktu_keberangkatan" id="waktu_keberangkatan" value="{{ old('waktu_keberangkatan', \Carbon\Carbon::parse($data->waktu_keberangkatan)->format('Y-m-d')) }}" required>
                    @error('waktu_keberangkatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="waktu_kedatangan" class="form-label">Waktu Kedatangan: </label>
                <div>
                    <input type="date" class="form-control @error('waktu_kedatangan') is-invalid @enderror" name="waktu_kedatangan" id="waktu_kedatangan" value="{{ old('waktu_kedatangan', \Carbon\Carbon::parse($data->waktu_kedatangan)->format('Y-m-d')) }}" required>
                    @error('waktu_kedatangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <div>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" placeholder="Masukkan Harga" value="{{ old('harga', $data->harga) }}" required>
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary w-100 w-md-auto" style="border-radius: 50px; height:60px; width: 100px;">
                        {{ __('Simpan Perubahan') }}
                    </button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <button class="btn btn-secondary w-100 w-md-auto" style="border-radius: 50px; height:60px; width: 100px; line-height: 45px;">
                        <a href="{{ url('home_admin') }}" class="text-white text-decoration-none">Kembali</a>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
